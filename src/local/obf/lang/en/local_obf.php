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
 * English locale for local_obf.
 *
 * @package    local_obf
 * @copyright  2015, Discendum Oy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['activitycompletedby'] = 'Completed by';
$string['addcourses'] = 'Add selected courses';
$string['addcriteria'] = 'Create new awarding rule';
$string['addedcriteria'] = 'Criteria added to course';
$string['addemaildescription'] = 'Type your email address. If the address has not been verified, a verification code will be sent to that address.';
$string['addemailheader'] = 'Add and verify you email address';
$string['addnewcriterion'] = 'Add course';
$string['apierror'] = 'Couldn\'t find OBF service. Please check the API URL from the settings.';
$string['apierror0'] = 'Open Badge Factory service request failed. The site admin needs to configure the settings of the plugin.';
$string['apierror400'] = 'OBF service request failed because of an erroneous/missing parameter.';
$string['apierror403'] = 'Open Badge Factory denied the request. Site administrator needs to reauthenticate the Open Badge Factory -client.';
$string['apierror404'] = 'Couldn\'t find OBF service. Please check the API URL from the settings.';
$string['apierror405'] = '405 Method not allowed';
$string['apierror411'] = '411 Length required';
$string['apierror413'] = '413 Request entity too large';
$string['apierror429'] = '429 Too many requests';
$string['apierror495'] = '495 Cert error';
$string['apierror496'] = 'Certificate needs to be generated before Open Badge Factory can be used with Moodle. Log in to Open Badge Factory to get the request token and paste it to the field below.';
$string['apierror500'] = '500 Internal server error';
$string['apierror502'] = '502 Bad gateway';
$string['apierror503'] = 'OBF service is temporarily unavailable. Please try again later.';
$string['apidataretrieveall'] = 'Show all badges issued with OBF';
$string['apidataretrievelocal'] = 'Show only badges issued from this system';
$string['apidataretrieve'] = 'Badge issuing events';
$string['apidataretrievedesc'] = 'If you select "All" badges issued directly from Open Badge Factory will be included in all (badge) results.';
$string['authenticate'] = 'Authenticate';
$string['authenticationsuccess'] = 'Authentication successful.';
$string['availablecategories'] = 'Available categories';
$string['availablecategoriesselect'] = 'Categories';
$string['availablecategorieshelp'] = 'Select the badge categories of which badges can be used in issuance events of this institution. If none of the categories is selected, the badges from every category can be issued.';
$string['back'] = 'Back';
$string['backpackconfig'] = 'Mozilla Backpack settings';
$string['backpackconnected'] = 'Connected';
$string['backpackdisconnected'] = 'Disconnected';
$string['backpackemail'] = 'Email address';
$string['backpackemailnotfound'] = 'Couldn\'t find a user by the email \'{$a->email}\' from {$a->provider}.';
$string['backpackemail_help'] = 'Email address associated with your Mozilla OpenBadges Backpack account.';
$string['backpackemailaddexternalobp'] = '<p>Couldn\'t find a user matching the email \'<strong>{$a}</strong>\' from Open Badge Passport.</p><p>To add your email, open <a href="https://openbadgepassport.com">https://openbadgepassport.com</a> in your browser and log in. </p><p>After logging in follow the <strong><i>My account &gt; Account settings &gt; E-mail addresses</i></strong> navigation path.</p><p>With the <i>E-mail addresses</i> -page open, add \'<strong>{$a}</strong>\' in the \'Add new e-mail\' -field and save.</p>';
$string['backpackemailaddexternalbackpackprovider'] = '<p>Couldn\'t find a user matching the email \'<strong>{$a->useremail}</strong>\' from {$a->backpackproviderfullname}.</p><p>Make sure you have an account on <a href="{$a->backpackprovidersiteurl}">{$a->backpackprovidersiteurl}</a> and \'<strong>{$a->useremail}</strong>\' is added to your profile.</p>';
$string['backpackgroups'] = 'Badge groups';
$string['backpackgroups_help'] = 'Select the badge groups that are shown in your badge displayer.';
$string['backpacksettings'] = 'Mozilla Backpack settings';
$string['backpackprovidersettings'] = '{$a} -settings';
$string['backpackprovideractions'] = 'Actions';
$string['backpackproviderfullname'] = 'Full name';
$string['backpackprovideremailconfigureable'] = 'User can define the email-address';
$string['backpackprovidershortname'] = 'Short name';
$string['backpackproviderurl'] = 'URL';
$string['backpackproviderurlinvalid'] = 'URL is not properly defined, please use the full URL, ie. https://openbadgepassport.com/displayer/';
$string['backpackprovideruserwarning'] = 'Warning: {$a} users already have email associations saved for the provider. Create new providers when adding new services, do not edit existing providers to point to other services.';
$string['badgeactions'] = 'Actions';
$string['badgeblacklist'] = 'Badge hiding';
$string['badgecategories'] = 'Categories';
$string['badgecreated'] = 'Created on';
$string['badgecriteria'] = 'Awarding rules';
$string['badgecriteriaurl'] = 'Criteria URL';
$string['badgedescription'] = 'Description';
$string['badgedetails'] = 'Badge details';
$string['badgeemail'] = 'Email template';
$string['badgeexport'] = 'Export badges previously created in Moodle';
$string['badgeexportdescription'] = 'A copy of all selected badges will be made on Open Badge Factory.';
$string['badgeexportzeroexportable'] = 'No exportable badges found, or all badges already exported.';
$string['badgeexpiresby'] = 'Expires by';
$string['badgehistory'] = 'Awarding history';
$string['badgeimage'] = 'Badge';
$string['badgeissued'] = 'Badge was successfully issued.';
$string['badgeissuedwhen'] = 'This badge is automatically awarded when any of the following rule is met:';
$string['badgelist'] = 'Badge list';
$string['badgelisttitle'] = 'All badges';
$string['badgename'] = 'Name';
$string['badgetags'] = 'Tags';


$string['personalbadgecloudservices'] = 'Displayer badge source';

$string['importbadgecriteria'] = 'Import badge criteria';


$string['badgewasautomaticallyissued'] = 'After reviewing the badge was awarded to {$a} recipient(s).';
$string['blacklistbadge'] = 'Don\'t show badge';
$string['blacklistsaved'] = 'Blacklist saved.';
$string['blacklistdescription'] = 'Select the badges you don\'t want to display on your profile. You can hide any badge issued by this Moodle environment.';
$string['cachedef_obf_assertions'] = 'OBF badge assertion cache';
$string['cachedef_obf_assertions_backpacks'] = 'External Open Badge service cache';
$string['cachedef_obf_pub_badge'] = 'OBF Badge publicly accessible event specific data cache';
$string['cancel'] = 'Cancel';
$string['cannoteditcriterion'] = 'This rule cannot be edited, because the badge has already been awarded automatically based on this rule.';
$string['categorysettings'] = 'Category settings';
$string['certrequestfailed'] = 'There was an error while requesting the certificate from the API';
$string['certificateexpirationremindertask'] = 'Certificate expiration reminder';
$string['closepopup'] = 'Close';
$string['completedbycriterion'] = 'by <strong>{$a}</strong>';
$string['configurecriteria'] = 'Configure';
$string['confirmdelete'] = 'Are you sure you want to delete the record {$a} ?';
$string['confirmcriteriondeletion'] = 'Are you sure you want to delete this awarding rule?';
$string['confirmrevokation'] = 'Are you sure you want to revoke the users badge?';
$string['connect'] = 'Connect {$a}';
$string['connectionisworking'] = 'OBF connection is up and working. The client certificate expires in <strong>{$a}</strong>.';
$string['connectionstatus'] = 'Connection status';
$string['coursealreadyincriterion'] = 'The rule of automatic awarding of this badge in this course cannot be edited, because this course/badge -combination already exists in another rule containing multiple courses.';
$string['coursebadgelisttitle'] = 'Badges related to this course';
$string['coursecompletedby'] = 'Completed by';
$string['coursecompletionnotenabled'] = 'Completion tracking is not enabled on this course. Enable it in <a href="{$a}">course settings</a>.';
$string['courseeventhistory'] = 'Course awarding history';
$string['courserequired'] = 'At least one course has to be selected';
$string['courseuserbadges'] = 'User badges';
$string['courseobfbadges'] = 'Badges';
$string['criteriaaddcourse'] = 'Add course';
$string['criteriaaddendum'] = 'Criteria addendum';
$string['criteriaaddendum_help'] = 'A criteria addendum will be added to the issued badge. The addendum will be shown below the badge criteria. Note: Markdown is supported.';
$string['criteriaaddendumadd'] = 'Add a criteria addendum';
$string['criteriaaddendumheader'] = 'Criteria addendum';
$string['criteriacompletedwhen'] = 'This rule is met when...';
$string['criteriacompletedwhenall'] = 'All of the following courses have to be completed:';
$string['criteriacompletedwhenany'] = 'Any of the following courses has to be completed:'; 
$string['criteriacompletionmethodall'] = 'All of these courses are completed';
$string['criteriacompletionmethodany'] = 'Any of these courses is completed';
$string['criteriacompletionmethodprofileall'] = 'All of the selected profile fields have been completed';
$string['criteriacompletionmethodprofileany'] = 'Any of the selected profile fields has been completed';
$string['criteriacourses'] = 'Courses in this rule';
$string['criteriapreview'] = 'Badge criteria preview';
$string['criteriatypeactivity'] = 'Completing a set of activities';
$string['criteriatypecourse'] = 'Completing a set of courses';
$string['criteriatypecourseset'] = 'Completing a set of courses';
$string['criteriatypetotaracertif'] = 'Completing a certificate';
$string['criteriatypetotaraprogram'] = 'Completing a program';
$string['criteriatypeprofile'] = 'Profile completion';
$string['criteriatypeunknown'] = 'Incomplete criteria';
$string['criteriondeleted'] = 'Awarding rule was deleted.';
$string['criterionsaved'] = 'Awarding rule was saved.';
$string['criteriapartofcourseset'] = 'Part of criteria with several courses';
$string['criteria_3'] = 'Profile fields';
$string['criteria_3_help'] = 'Which profile field(s) need to be filled, to trigger badge awarding.';
$string['csrexportfailed'] = 'There was an error while trying to export the certificate signing request';
$string['createcsv'] = 'Download Badge History CSV';
$string['dateformatdate'] = '%Y-%m-%d';
$string['deauthenticate'] = 'Disconnect';
$string['deauthenticationsuccess'] = 'Successfully disconnected from Open Badge Factory.';
$string['deletecriterion'] = 'Delete awarding rule';
$string['disableassertioncache'] = 'Disable badge assertion cache';
$string['disableassertioncache_help'] = 'Badges on profile pages will not be cached. Badges issued from outside the Moodle environment will appear on profile pages without delay, but may affect profile page loading times.';
$string['disablemoodlebadges'] = 'Allow Moodle\'s own badge-module. WARNING: ALLOWING MOODLE\'S OWN MODULE WILL CAUSE CONFLICT';
$string['disablemoodlebadges_help'] = 'Old Moodle badges will be hidden from the user interface, but user badges that are saved to a Backpack can still be shown, and the badges exported to Open Badge Factory can still be awarded.';
$string['displaymoodlebadges'] = 'Display Moodle badges on profiles';
$string['displaymoodlebadges_help'] = 'Old Moodle badges will be displayed on user profile pages.';
$string['error:nosuchfield'] = 'No such field.';
$string['disconnect'] = 'Disconnect {$a}';
$string['edit'] = 'Edit';
$string['editemailmessage'] = 'Edit email message';
$string['emailbadgerevokedsubject'] = 'Your badge has been revoked';
$string['emailbadgerevokedbody'] = 'One of your earned badges ({$a->revokedbadgename}) has been revoked by {$a->revokername}.';
$string['emailbody'] = 'Email body';
$string['emailfooter'] = 'Email footer';
$string['emaillinktext'] = 'Email link text';
$string['emailmessage'] = 'Email message';
$string['emailsubject'] = 'Email subject';
$string['emailtemplatesaved'] = 'Email template was successfully saved.';
$string['emailtemplatedescription'] = 'Here you can set the default template for the email that will be sent to the user receiving this badge. The email can be customized before the badge is awarded.';
$string['emailverifytokenemailbody'] = "You must verify your email address.\nVerification code: {\$a->token} \nVerification url: {\$a->tokenurl}";
$string['emailverifytokenemailsubject'] = 'Email verification';
$string['eventrevoked'] = 'Event revoked for {$a}.';
$string['evidence'] = 'Evidence';
$string['expiresby'] = 'Expires';
$string['expired'] = 'Expired';
$string['expiringcertificate'] = 'Open Badge Factory API key is expiring in <b>{$a->days}</b> days. To renew the API key <a href="{$a->obfurl}">log in to Open Badge Factory</a> with your organization admin account, go to Admin tools -> Edit Organisation Details -> More settings, generate the certificate signing request token and renew the API key at <a href="{$a->configurl}">Open Badges -> Settings -> OBF request token</a>.';
$string['expiringcertificatesubject'] = 'Open Badge Factory client certificate is expiring.';
$string['exportsettings'] = 'Export settings';
$string['exportextrasettings'] = 'Export settings';
$string['gradecriterion'] = 'with <strong>minimum grade of {$a}</strong>';
$string['history'] = 'Awarding history';
$string['historyrecipients'] = '{$a} recipients';
$string['invalidtab'] = 'Page not found';
$string['issue'] = 'Issue badge';
$string['issuancedetails'] = 'Issuance details';
$string['issuebadge'] = 'Issue a badge';
$string['issueandexpiration'] = 'Issue and expiration dates';
$string['issuedon'] = 'Issued on';
$string['issuedfrom'] = 'Issued from';
$string['issuer'] = 'Issuer';
$string['issuerdescription'] = 'Description';
$string['issuerdetails'] = 'Issuer details';
$string['issueremail'] = 'Email';
$string['issuername'] = 'Name';
$string['issuerurl'] = 'URL';
$string['issuethisbadge'] = 'Issue this badge';
$string['makeexporteddrafts'] = 'Exported badges are drafts by default';
$string['messageprovider:revoked'] = 'Issued badge is revoked';
$string['minimumgrade'] = 'Minimum grade';
$string['nobackpackgroups'] = 'No public badge groups in your backpack. Create at least one public group to your backpack.';
$string['nobadgehistory'] = 'This badge hasn\'t been issued yet.';
$string['nobadges'] = 'No badges yet.';
$string['nobadgesincourse'] = 'No related badges yet.';
$string['nobadgestoexport'] = 'No badges to export.';
$string['nocourseswithcompletionenabled'] = 'There are no courses with completion enabled.';
$string['nocriteriayet'] = 'No automatic awarding rules created yet.';
$string['nohistory'] = 'No badges issued yet.';
$string['noparticipants'] = 'No participants.';
$string['nouserbadges'] = 'No badges earned yet.';
$string['novalidcourses'] = 'There are no courses without awarding rules regarding to this badge.';
$string['numberofbadgessingle'] = ' badge';
$string['numberofbadgesmany'] = ' badges';
$string['obf'] = 'Open Badges';
$string['obfconnectionconfig'] = 'API connection settings';
$string['obf:configure'] = 'Configure OBF client settings';
$string['obf:configureuser'] = 'Configure own Open Badge settings';
$string['obf:earnbadge'] = 'Earn an Open Badge';
$string['obf:editcriterion'] = 'Edit badge criterion';
$string['obf:issuebadge'] = 'Issue badge to a user';
$string['obf:revokeallevents'] = 'Revoke event';
$string['obf:revokecourseevents'] = 'Revoke an event, which was automatically issued based on course criteria.';
$string['obf:seeparticipantbadges'] = 'See the badges of course participants';
$string['obf:viewallbadges'] = 'View available badges';
$string['obf:viewallevents'] = 'View badge issue events';
$string['obf:viewcourseevents'] = 'View course\'s badge issue events';
$string['obf:viewbackpack'] = 'View backpacks';
$string['obf:viewdetails'] = 'View badge details';
$string['obf:viewhistory'] = 'View badge issuance history';
$string['obf:viewownbackpack'] = 'View own backpack';
$string['obfuserpreferences'] = 'Open Badge-settings';
$string['obpbackpacksettings'] = 'Open Badge Passport -settings';
$string['pkidirnotwritable'] = 'Certificate directory <i>{$a}</i> should be writable for web server user.';
$string['pluginname'] = 'Open Badge Factory';
$string['previewbadge'] = 'Preview badge';
$string['previewcriteria'] = 'Preview';
$string['previewemail'] = 'Preview';
$string['profilebadgelist'] = 'Badges';
$string['profilebadgelistbackpackprovider'] = '{$a} badges';
$string['profilebadgelistmoz'] = 'Mozilla Backpack badges';
$string['profilebadgelistobp'] = 'Open Badge Passport badges';
$string['pubkeyextractionfailed'] = 'There was an error while extracting public key from certificate.';
$string['pubkeyrequestfailed'] = 'There was an error while requesting the public key from the API';
$string['readmeenablecompletion'] = 'Badge earning criteria';
$string['readmeenablecompletion_help'] = '<p>In order for the automatic badge earning criteria to function properly, the completion tracking has to be enabled. </p><p>Easiest way to enable completion tracking is:</p><ol><li>Locate the "Settings" -block.</li><li>Type "enablecompletion" into the search box, and hit search.</li><li>Enable completion tracking: Yes.</li><li>Optional, but recommended: Enable completion tracking on course default settings.</li></ol><strong>Course settings</strong><p>If completion tracking is not enabled on course default settings, or course tracking is disabled on a course, the completion tracking can be enabled via the <i>Course administration-&gt;Edit settings</i> -page.</p>';
$string['recipients'] = 'Recipients';
$string['recipientcandidates'] = 'Users matching the search';
$string['requesttoken'] = 'OBF request token';
$string['requesttoken_help'] = '<p>Paste here the token that is used to connect to Open Badge Factory API.</p><p>To generate the required API key, log in to <a href="https://openbadgefactory.com">Open Badge Factory</a>,  in the \'<i>Admin tools</i>\' -page, open the \'<i>API key</i>\' -link, and click on \'<i>Generate certificate signing request token</i>\'. Copy the generated token into Moodle.</p>';
$string['resetfilter'] = 'Reset filter';
$string['reviewcriterionaftersave'] = 'Review rule after saving';
$string['reviewcriterionaftersave_help'] = 'If this checkbox is checked, the rule will be reviewed after saving and if someone has already met this rule earlier, this badge will then be automatically awarded.';
$string['revoke'] = 'Revoke';
$string['revokeuserbadges'] = 'Revoke user badges';

$string['samecriteriaerror'] = 'From and to courses cannot be the same';

$string['saveconfiguration'] = 'Continue';
$string['savecriteria'] = 'Save';
$string['savesettings'] = 'Save';
$string['selectatleastonerecipient'] = 'Select at least one recipient';
$string['selectactivity'] = 'Select activity';
$string['selectbadge'] = 'Select badge';
$string['selectbadgestoexport'] = 'Select badges you want to export to Open Badge Factory';
$string['selectcourses'] = 'Select courses';


$string['selectcourses_help'] = 'Select courses that need to be completed to in order to receive this badge automatically.';


$string['selectimportedcriteria_help'] = 'Select course you want to import badge criteria from.';
$string['selectexportedcriteria_help'] = 'Select course you want to import badge criteria to.';


$string['selectcriteriatype'] = 'Select...';
$string['selectcriteriatype_help'] = 'Select the method, by which the badge is earned.';
$string['selectcompletionmethod'] = 'Select completion method';
$string['selectcompletionmethod_help'] = 'Select the method, by which the badge is earned.';
$string['selectprogram'] = 'Select program';
$string['selectrecipients'] = 'Select recipients';
$string['settings'] = 'Settings';
$string['settingssaved'] = 'Settings saved';
$string['showassertion'] = 'Details';
$string['showbadgecriteria'] = 'Open badge criteria';
$string['showbadges'] = 'Show badges';
$string['showbadgesonmyprofile'] = 'Show badges on profile page';
$string['showcategories'] = 'Display badges from these categories:';
$string['showconnectionconfig'] = 'I know it\'s working, let me change the token anyway.';
$string['showmorerecipients'] = 'more';
$string['siteadmin'] = 'Site Administration';
$string['testbackpackapiurlexception'] = 'Error testing API via <a href="{$a->url}">{$a->url}</a> ! Error-code: {$a->errorcode}.';
$string['toearnthisbadge'] = 'To earn this badge this course has to be completed';
$string['tokendecryptionfailed'] = 'Decrypting the request token failed. Be sure to paste the certificate signing request token fully.';
$string['totaraprogram'] = 'Program';
$string['totaraprogramselectexpires'] = 'Select which setting is used for awarded badges';
$string['totaraprogramexpiresbybadge'] = 'Expiry from badge properties';
$string['totaraprogramexpiresbycertificate'] = 'Expiry from certificate properties';
$string['unknowncriterion'] = 'Incomplete criterion';
$string['urlgroup'] = 'URL';
$string['urlgroup_help'] = '<p>If you are not using the default openbadgefactory.com server. Set the service address here.</p>';

$string['useremailupdater'] = 'User email updater';


$string['userpreferences'] = 'User-settings';
$string['userpreferencessaved'] = 'User-settings saved.';
$string['usersdisplaybadges'] = 'Display of user badges';
$string['userscanmanagedisplayofbadges'] = 'Users can choose to display badges';
$string['usersforcedtodisplaybadges'] = 'Badges are displayed on profile pages';
$string['usersnotallowedtodisplaybadges'] = 'Badges are not displayed on profile pages';
$string['verification_failed'] = 'Backpack verification failed. Reason: {$a}';
$string['verifytoken'] = 'Token';
$string['verifytokenbutton'] = 'Verify';
$string['verifytokendescription'] = 'An email has been sent to the provided address. Check your email for a verification code.';
$string['warningcannoteditafterreview'] = 'Note that if the badge is awarded when these rules are being reviewed, the rule(s) cannot be edited anymore. Once the badge has been automatically awarded to at least one person, editing of the rules is prohibited. So make sure the rules are set correctly before reviewing.';
$string['coursereset'] = "Delete awarding rules when course is reset.";
