<?php
$string['addcourses'] = 'Add selected courses';
$string['addcriteria'] = 'Create new awarding rule';
$string['addnewcriterion'] = 'Add course';
$string['apierror0'] = 'OBF service request failed. Check server logs for more info.';
$string['apierror400'] = 'OBF service request failed because of an erroneous/missing parameter.';
$string['apierror403'] = 'TODO: Forbidden';
$string['apierror404'] = 'Couldn\'t find OBF service. Please check the API URL from the settings.';
$string['apierror405'] = 'TODO: Method not allowed';
$string['apierror411'] = 'TODO: Length required';
$string['apierror413'] = 'TODO: Request entity too large';
$string['apierror429'] = 'TODO: Too many requests';
$string['apierror495'] = 'TODO: Cert error';
$string['apierror496'] = 'Certificate needs to be generated before Open Badge Factory can be used with Moodle. ' .
        'Log in to Open Badge Factory to get the request token and paste it to the field below.';
$string['apierror500'] = 'TODO: Internal server error';
$string['apierror502'] = 'TODO: Bad gateway';
$string['apierror503'] = 'OBF service is temporarily unavailable. Please try again later.';
$string['authenticationsuccess'] = 'Authentication successful.';
$string['back'] = 'Back';
$string['backpackconnected'] = 'Connected';
$string['backpackdisconnected'] = 'Disconnected';
$string['backpackemail'] = 'Email address';
$string['backpackemailnotfound'] = 'Couldn\'t find a user by the email \'{$a}\' from Mozilla Backpack.';
$string['backpackemail_help'] = 'Email address associated with your Mozilla OpenBadges Backpack account.';
$string['backpackgroups'] = 'Badge groups';
$string['backpackgroups_help'] = 'Select the badge groups that are shown in your badge displayer.';
$string['badgeactions'] = 'Actions';
$string['badgecreated'] = 'Created on';
$string['badgecriteria'] = 'Awarding rules';
$string['badgecriteriaurl'] = 'Criteria URL';
$string['badgedescription'] = 'Description';
$string['badgedetails'] = 'Badge details';
$string['badgeemail'] = 'Email template';
$string['badgeexport'] = 'Export Moodle\'s existing badges';
$string['badgehistory'] = 'Issuance history';
$string['badgeimage'] = 'Badge';
$string['badgeissued'] = 'Badge was successfully issued.';
$string['badgeissuedwhen'] = 'This badge is automatically awarded when any of the following rule '
        . 'is met:';
$string['badgelist'] = 'Badges';
$string['badgelisttitle'] = 'All badges';
$string['badgename'] = 'Name';
$string['badgesupdated'] = 'The badges were updated from Open Badge Factory. <strong>{$a}</strong> new badge(s) found.';
$string['badgewasautomaticallyissued'] = 'After reviewing the badge was awarded to {$a} recipient(s).';
$string['cancel'] = 'Cancel';
$string['cannoteditcriterion'] = 'This rule cannot be edited, because the badge has already '
        . 'been awarded automatically based on this rule.';
$string['certrequestfailed'] = 'There was an error while requesting the certificate from the API';
$string['clientid'] = 'Your Open Badge Factory client-id';
$string['clientiddescription'] = 'This is here just for testing purposes.';
$string['completedbycriterion'] = 'by <strong>{$a}</strong>';
$string['configurecriteria'] = 'Configure';
$string['confirmandissue'] = 'Confirm and issue';
$string['confirmcriteriondeletion'] = 'Are you sure you want to delete this awarding rule?';
$string['connect'] = 'Connect';
$string['connectionisworking'] = 'OBF connection is up and working.';
$string['connectionstatus'] = 'Backpack connection status';
$string['coursealreadyincriterion'] = 'The rule of automatic awarding of this badge in this '
        . 'course cannot be edited, because this course/badge -combination already exists in another '
        . 'rule containing multiple courses.';
$string['coursebadgelisttitle'] = 'Badges related to this course';
$string['coursecompletedby'] = 'Completed by';
$string['courserequired'] = 'At least one course has to be selected';
$string['criteriacompletedwhen'] = 'This rule is met when...';
$string['criteriacompletedwhenall'] = 'All of the following courses have to be completed:';
$string['criteriacompletedwhenany'] = 'Any of the following courses has to be completed:';
$string['criteriacompletionmethodall'] = 'All of these courses are completed';
$string['criteriacompletionmethodany'] = 'Any of these courses is completed';
$string['criteriacourses'] = 'Courses in this rule';
$string['criteriapreview'] = 'Badge criteria preview';
$string['criteriatypecourseset'] = 'Completing a set of courses';
$string['criteriondeleted'] = 'Awarding rule was deleted.';
$string['csrexportfailed'] = 'There was an error while trying to export the certificate signing request';
$string['deletecriterion'] = 'Delete awarding rule';
$string['disablemoodlebadges'] = 'Disable Moodle\'s own badge-module.';
$string['disconnect'] = 'Disconnect';
$string['editemailmessage'] = 'Edit email message';
$string['emailbody'] = 'Email body';
$string['emailfooter'] = 'Email footer';
$string['emailmessage'] = 'Email message';
$string['emailsubject'] = 'Email subject';
$string['emailtemplatesaved'] = 'Email template was successfully saved.';
$string['emailtemplatedescription'] = 'Here you can set the default template for the email that ' .
        'will be sent to the user receiving this badge. The email can be customized before the ' .
        'badge is awarded.';
$string['evidence'] = 'Evidence';
$string['existingcriteria'] = 'Existing courses';
$string['expiresby'] = 'Expires';
$string['expiringcertificate'] = 'Open Badge Factory client certificate is expiring in <b>{$a->days}</b> '
        . 'days. To renew the certificate <a href="{$a->obfurl}">log in to Open Badge Factory</a> '
        . 'with your organization admin account, go to Admin tools -> Edit Organisation Details '
        . '-> More settings, generate the certificate signing request token and paste it to Moodle '
        . '(Open Badges -> Settings -> OBF request token).';
$string['expiringcertificatesubject'] = 'Open Badge Factory client certificate is expiring.';
$string['gradecriterion'] = 'with <strong>minimum grade of {$a}</strong>';
$string['history'] = 'History';
$string['invalidcriteriatype'] = 'Unknown criteria type.';
$string['invalidtab'] = 'Page not found';
$string['issue'] = 'Issue badge';
$string['issuancedetails'] = 'Issuance details';
$string['issuebadge'] = 'Issue a badge';
$string['issueandexpiration'] = 'Issue and expiration dates';
$string['issuedon'] = 'Issued on';
$string['issuerdescription'] = 'Description';
$string['issuerdetails'] = 'Issuer details';
$string['issueremail'] = 'Email';
$string['issuername'] = 'Name';
$string['issuerurl'] = 'URL';
$string['issuethisbadge'] = 'Issue this badge';
$string['minimumgrade'] = 'Minimum grade';
$string['missingapiurl'] = 'Please enter the OBF API URL in the settings.';
$string['missingclientid'] = 'Please enter your OBF client id in the settings.';
$string['showmorerecipients'] = 'more';
$string['nobackpackgroups'] = 'No public badge groups in your backpack. Create at least one public '
        . 'group to your backpack.';
$string['nobadges'] = 'No badges yet.';
$string['nocourseswithcompletionenabled'] = 'There are no courses with completion enabled.';
$string['nocriteriayet'] = 'No automatic awarding rules created yet.';
$string['nohistory'] = 'This badge hasn\'t been issued yet.';
$string['nofolder'] = 'No folder';
$string['novalidcourses'] = 'All available courses are already related to this badge\'s awarding rules.';
$string['novalidcourses'] = 'There are no courses without awarding rules regarding to this badge.';
$string['nouserbadges'] = 'No badges earned yet.';
$string['numberofbadgessingle'] = ' badge';
$string['numberofbadgesmany'] = ' badges';
$string['obf'] = 'Open Badges';
$string['obf:configure'] = 'Configure OBF client settings';
$string['obf:configureuser'] = 'Configure own Open Badge settings';
$string['obf:earnbadge'] = 'Earn an Open Badge';
$string['obf:issuebadge'] = 'Issue badge to a user';
$string['obf:viewallbadges'] = 'View available badges';
$string['obf:viewdetails'] = 'View badge details';
$string['obf:viewhistory'] = 'View badge issuance history';
$string['pluginname'] = 'Open Badge Factory';
$string['previewbadge'] = 'Preview badge';
$string['previewcriteria'] = 'Preview';
$string['previewemail'] = 'Preview';
$string['pubkeyrequestfailed'] = 'There was an error while requesting the public key from the API';
$string['recipients'] = 'Recipients';
$string['recipientcandidates'] = 'Users matching the search';
$string['requesttoken'] = 'OBF request token';
$string['requesttoken_help'] = 'Paste here the token that is used to connect to Open Badge Factory ' .
        'API.';
$string['reviewcriterionaftersave'] = 'Review rule after saving';
$string['reviewcriterionaftersave_help'] = 'If this checkbox is checked, the rule will be '
        . 'reviewed after saving and if someone has already met this rule earlier, this badge '
        . 'will then be automatically awarded.';
$string['saveconfiguration'] = 'Continue';
$string['savecriteria'] = 'Save';
$string['selectatleastonerecipient'] = 'Select at least one recipient';
$string['selectbadge'] = 'Select badge';
$string['selectbadgestoexport'] = 'Select badges you want to export to Open Badge Factory';
$string['selectcourses'] = 'Select courses';
$string['selectcourses_help'] = 'Select courses that need to be completed to in order to receive '
        . 'this badge automatically.';
$string['selectrecipients'] = 'Select recipients';
$string['setbadgedetails'] = 'Set badge details';
$string['settings'] = 'Settings';
$string['showassertion'] = 'Details';
$string['showconnectionconfig'] = 'I know it\'s working, let me change the token anyway';
$string['toearnthisbadge'] = 'To earn this badge this course has to be completed';
$string['tokendecryptionfailed'] = 'Decrypting the request token failed. Be sure to paste the '
        . 'certificate signing request token fully.';
$string['updatebadges'] = 'Update badges from Open Badge Factory';
$string['url'] = 'Open Badge Factory URL';
$string['urldescription'] = 'The URL where the OBF API is found.';
$string['warningcannoteditafterreview'] = 'Note that if the badge is awarded when these rules are ' .
        'being reviewed, the rule(s) cannot be edited anymore. Once the badge has been automatically ' .
        'awarded to at least one person, editing of the rules is prohibited. So make sure the rules ' .
        'are set correctly before reviewing.';