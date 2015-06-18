<?php

require_once __DIR__ . '/client.php';
require_once __DIR__ . '/badge.php';
require_once __DIR__ . '/collection.php';
require_once __DIR__ . '/assertion_collection.php';

/**
 * Represents a single event in OBF.
 *
 * @author olli
 */
class obf_assertion {

    /**
     * @var obf_badge The related badge.
     */
    private $badge = null;

    /**
     * @var string The email subject.
     */
    private $emailsubject = '';

    /**
     * @var string The bottom part of the email message.
     */
    private $emailfooter = '';

    /**
     * @var string The top part of the email message.
     */
    private $emailbody = '';

    /**
     * @var int When the badge was issued, Unix timestamp.
     */
    private $issuedon = null;

    /**
     * @var string[] An array of recipient emails.
     */
    private $recipients = array();

    /**
     * @var string Possible error message.
     */
    private $error = '';

    /**
     * @var string The name of the event.
     */
    private $name = '';

    /**
     * @var int The expiration date as an Unix timestamp.
     */
    private $expires = null;

    /**
     * @var string The id of the event.
     */
    private $id = null;

    /**
     * Returns an empty instance of this class.
     *
     * @return obf_assertion
     */
    public static function get_instance() {
        return new self();
    }

    /**
     * Issues the badge.
     *
     * @return True on success, false otherwise.
     */
    public function process() {
        try {
            $this->badge->issue($this->recipients, $this->issuedon,
                    $this->emailsubject, $this->emailbody, $this->emailfooter);
            return true;
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * Gets and returns the assertion instance from OBF.
     *
     * @param string $id The id of the event.
     * @param obf_client $client The client instance.
     * @return obf_assertion The assertion instance.
     */
    public static function get_instance_by_id($id, obf_client $client) {
        $arr = $client->get_event($id);
        $obj = self::get_instance()
                ->set_emailbody($arr['email_body'])
                ->set_emailfooter($arr['email_footer'])
                ->set_emailsubject($arr['email_subject'])
                ->set_issuedon($arr['issued_on'])
                ->set_id($arr['id'])
                ->set_name($arr['name'])
                ->set_recipients($arr['recipient'])
                ->set_badge(obf_badge::get_instance($arr['badge_id'], $client));

        return $obj;
    }

    /**
     * Returns this instance as an associative array.
     *
     * @return array The array.
     */
    public function toArray() {
        $badgearr = $this->badge instanceof obf_badge ? $this->badge->toArray() : array();

        return array(
            'badge' => $badgearr,
            'issued_on' => $this->get_issuedon() == '' ? '-' : $this->get_issuedon(),
            'expires' => $this->get_expires() == '' ? '-' : $this->get_expires());
    }

    /**
     * Returns all assertions matching the search criteria.
     *
     * @param obf_client $client The client instance.
     * @param obf_badge $badge Get only the assertions containing this badge.
     * @param type $email Get only the assertions related to this email.
     * @param type $limit Limit the amount of results.
     * @return \obf_assertion_collection The assertions.
     */
    public static function get_assertions(obf_client $client,
            obf_badge $badge = null, $email = null, $limit = -1) {
        $badgeid = is_null($badge) ? null : $badge->get_id();
        $arr = $client->get_assertions($badgeid, $email);
        $assertions = array();
        $collection = new obf_badge_collection($client);
        $collection->populate();

        foreach ($arr as $item) {
            $b = is_null($badge) ? $collection->get_badge($item['badge_id']) : $badge;
            $assertions[] = self::get_instance()
                    ->set_badge($b)
                    ->set_id($item['id'])
                    ->set_recipients($item['recipient'])
                    ->set_expires($item['expires'])
                    ->set_name($item['name'])
                    ->set_issuedon($item['issued_on']);
        }

        // Sort the assertions by date...
        usort($assertions,
                function (obf_assertion $a1, obf_assertion $a2) {
            return $a1->get_issuedon() <= $a2->get_issuedon();
        });

        // ... And limit the result set if that's what we want.
        if ($limit > 0) {
            $assertions = array_slice($assertions, 0, $limit);
        }

        return new obf_assertion_collection($assertions);
    }

    /**
     * Checks whether two assertions are equal.
     *
     * @param obf_assertion $another
     * @return boolean True on success, false otherwise.
     */
    public function equals(obf_assertion $another) {
        // PENDING: Is this comparison enough?
        return ($this->get_badge()->equals($another->get_badge()));
    }

    /**
     * Returns all assertions related to $badge.
     *
     * @param obf_badge $badge The badge.
     * @return obf_assertion_collection The related assertions.
     */
    public static function get_badge_assertions(obf_badge $badge,
            obf_client $client) {
        return self::get_assertions($client, $badge);
    }

    /**
     * Checks whether the badge has expired.
     *
     * @return boolean True, if the badge has expired and false otherwise.
     */
    public function badge_has_expired() {
        return ($this->has_expiration_date() && $this->expires < time());
    }

    public function has_expiration_date() {
        return !empty($this->expires) && $this->expires != 0;
    }

    public function get_expires() {
        return $this->expires;
    }

    public function set_expires($expires) {
        $this->expires = $expires;
        return $this;
    }

    public function get_id() {
        return $this->id;
    }

    public function set_id($id) {
        $this->id = $id;
        return $this;
    }

    public function get_error() {
        return $this->error;
    }

    public function get_badge() {
        return $this->badge;
    }

    public function set_badge($badge) {
        $this->badge = $badge;
        return $this;
    }

    public function get_emailsubject() {
        return $this->emailsubject;
    }

    public function set_emailsubject($emailsubject) {
        $this->emailsubject = $emailsubject;
        return $this;
    }

    public function get_emailfooter() {
        return $this->emailfooter;
    }

    public function set_emailfooter($emailfooter) {
        $this->emailfooter = $emailfooter;
        return $this;
    }

    public function get_emailbody() {
        return $this->emailbody;
    }

    public function set_emailbody($emailbody) {
        $this->emailbody = $emailbody;
        return $this;
    }

    public function get_issuedon() {
        return $this->issuedon;
    }

    public function set_issuedon($issuedon) {
        $this->issuedon = $issuedon;
        return $this;
    }

    public function get_recipients() {
        return $this->recipients;
    }

    public function set_recipients($recipients) {
        $this->recipients = $recipients;
        return $this;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_name($name) {
        $this->name = $name;
        return $this;
    }

}
