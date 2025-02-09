<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Email template form.
 * @package    local_obf
 * @copyright  2013-2015, Discendum Oy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

require_once(__DIR__ . '/obfform.php');
require_once(__DIR__ . '/../class/backpack.php');
/**
 * Email template form -class.
 * @copyright  2013-2015, Discendum Oy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class obf_criteria_import extends local_obf_form_base {

    /**
     * @var null
     */
    //protected $criterion = null;

    /**
     * Defines forms elements
     */
    protected function definition() {
        global $DB;
        $mform = $this->_form;
        $coursetable = 'local_obf_criterion_courses';
        $courses = $DB->get_records('course');
        $criteriacourses = $DB->get_records($coursetable);
        $allcourses = array();
        $critcourses = array();

        $count = 0;
        // Criteria courses
        foreach($criteriacourses as $course) {
            //$key = $course->id;
            $critcourse = obf_criterion_course::get_instance($course->id);
            $key = $critcourse->get_courseid();
            $value = $critcourse->get_name();
            $count = $DB->count_records($coursetable, array('obf_criterion_id' => $critcourse->get_criterionid()));

            if($count === 1) {
                $critcourses[$key] = $value;
            }
        }
        foreach($courses as $course) {
            $key = $course->id;
            $value = $course->fullname;
            $allcourses[$key] = $value;
        }

        $mform->addElement('header', 'header_backpackconfig',
            get_string('importbadgecriteria', 'local_obf'));

        $select = $mform->addElement('select', 'fromcourse', get_string('selectimportedcriteria_help',
            'local_obf'), $critcourses);

        $select = $mform->addElement('select', 'tocourse',
            get_string('selectexportedcriteria_help', 'local_obf'), $allcourses);

        $this->add_action_buttons();
    }
}
