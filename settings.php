<?php
// This file is part of the custom Moodle elegantchild theme
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
 * elegantchild theme for the underlying Elegance theme.
 *
 * @package    theme
 * @subpackage elegantchild
 * @author	   Richard Oelmann
 * @author     from Elegance by Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Barnard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;

	global $PAGE;

	$ADMIN->add('themes', new admin_category('theme_elegantchild', 'elegantchild'));

	// "geneicsettings" settingpage
	$temp = new admin_settingpage('theme_elegantchild_generic',  get_string('geneicsettings', 'theme_elegantchild'));

    // Invert Navbar to dark background.
    $name = 'theme_elegantchild/invert';
    $title = get_string('invert', 'theme_elegantchild');
    $description = get_string('invertdesc', 'theme_elegantchild');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Turn on fluid width
    $name = 'theme_elegantchild/fluidwidth';
    $title = get_string('fluidwidth', 'theme_elegantchild');
    $description = get_string('fluidwidth_desc', 'theme_elegantchild');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Font Icons
    $name = 'theme_elegantchild/fonticons';
    $title = get_string('fonticons', 'theme_elegantchild');
    $description = get_string('fonticonsdesc', 'theme_elegantchild');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);

    // Frontpage Content.
    $name = 'theme_elegantchild/frontpagecontent';
    $title = get_string('frontpagecontent', 'theme_elegantchild');
    $description = get_string('frontpagecontentdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // Copyright setting.
    $name = 'theme_elegantchild/copyright';
    $title = get_string('copyright', 'theme_elegantchild');
    $description = get_string('copyrightdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Footnote setting.
    $name = 'theme_elegantchild/footnote';
    $title = get_string('footnote', 'theme_elegantchild');
    $description = get_string('footnotedesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Course Tiles.
    $name = 'theme_elegantchild/tiles';
    $title = get_string('tiles', 'theme_elegantchild');
    $description = get_string('tilesdesc', 'theme_elegantchild');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Embedded Video Max Width.
    $name = 'theme_elegantchild/videowidth';
    $title = get_string('videowidth', 'theme_elegantchild');
    $description = get_string('videowidthdesc', 'theme_elegantchild');
    $default = '100%';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_elegantchild/customcss';
    $title = get_string('customcss', 'theme_elegantchild');
    $description = get_string('customcssdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_elegantchild', $temp);

    /* Color and Logo Settings */
    $temp = new admin_settingpage('theme_elegantchild_colors', get_string('colorsettings', 'theme_elegantchild'));
    $temp->add(new admin_setting_heading('theme_elegantchild_colors', get_string('colorsettingssub', 'theme_elegantchild'),
    		format_text(get_string('colorsettingsdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

    	// Main theme colour setting.
    	$name = 'theme_elegantchild/themecolor';
    	$title = get_string('themecolor', 'theme_elegantchild');
    	$description = get_string('themecolordesc', 'theme_elegantchild');
    	$default = '#0098e0';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Main Font colour setting.
    	$name = 'theme_elegantchild/fontcolor';
    	$title = get_string('fontcolor', 'theme_elegantchild');
    	$description = get_string('fontcolordesc', 'theme_elegantchild');
    	$default = '#666';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Heading colour setting.
    	$name = 'theme_elegantchild/headingcolor';
    	$title = get_string('headingcolor', 'theme_elegantchild');
    	$description = get_string('headingcolordesc', 'theme_elegantchild');
    	$default = '#27282a';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Logo Image.
    	$name = 'theme_elegantchild/logo';
    	$title = get_string('logo', 'theme_elegantchild');
    	$description = get_string('logodesc', 'theme_elegantchild');
    	$setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Header Background Image.
    	$name = 'theme_elegantchild/headerbg';
    	$title = get_string('headerbg', 'theme_elegantchild');
    	$description = get_string('headerbgdesc', 'theme_elegantchild');
    	$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerbg');
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Body Background Image.
    	$name = 'theme_elegantchild/bodybg';
    	$title = get_string('bodybg', 'theme_elegantchild');
    	$description = get_string('bodybgdesc', 'theme_elegantchild');
    	$setting = new admin_setting_configstoredfile($name, $title, $description, 'bodybg');
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Main theme colour setting.
    	$name = 'theme_elegantchild/bodycolor';
    	$title = get_string('bodycolor', 'theme_elegantchild');
    	$description = get_string('bodycolordesc', 'theme_elegantchild');
    	$default = '#f1f1f4';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Set Transparency.
    	$name = 'theme_elegantchild/transparency';
    	$title = get_string('transparency' , 'theme_elegantchild');
    	$description = get_string('transparencydesc', 'theme_elegantchild');
    	$default = '1';
    	$choices = array(
    		'.10'=>'10%',
    		'.15'=>'15%',
    		'.20'=>'20%',
    		'.25'=>'25%',
    		'.30'=>'30%',
    		'.35'=>'35%',
    		'.40'=>'40%',
    		'.45'=>'45%',
    		'.50'=>'50%',
    		'.55'=>'55%',
    		'.60'=>'60%',
    		'.65'=>'65%',
    		'.70'=>'70%',
    		'.75'=>'75%',
    		'.80'=>'80%',
    		'.85'=>'85%',
    		'.90'=>'90%',
    		'.95'=>'95%',
   		'1'=>'100%');
    	$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
   	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    $ADMIN->add('theme_elegantchild', $temp);

    /* Banner Settings */
    $temp = new admin_settingpage('theme_elegantchild_usermenu', get_string('usermenusettings', 'theme_elegantchild'));
    $temp->add(new admin_setting_heading('theme_elegantchild_usermenu', get_string('usermenusettingssub', 'theme_elegantchild'),
    		format_text(get_string('usermenusettingsdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

    	// Enable My.
    	$name = 'theme_elegantchild/enablemy';
    	$title = get_string('enablemy', 'theme_elegantchild');
    	$description = get_string('enablemydesc', 'theme_elegantchild');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Enable View Profile.
    	$name = 'theme_elegantchild/enableprofile';
    	$title = get_string('enableprofile', 'theme_elegantchild');
    	$description = get_string('enableprofiledesc', 'theme_elegantchild');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Enable Edit Profile.
    	$name = 'theme_elegantchild/enableeditprofile';
    	$title = get_string('enableeditprofile', 'theme_elegantchild');
    	$description = get_string('enableeditprofiledesc', 'theme_elegantchild');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Enable Calendar.
    	$name = 'theme_elegantchild/enablecalendar';
    	$title = get_string('enablecalendar', 'theme_elegantchild');
    	$description = get_string('enablecalendardesc', 'theme_elegantchild');
    	$default = true;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Enable Private Files.
    	$name = 'theme_elegantchild/enableprivatefiles';
    	$title = get_string('enableprivatefiles', 'theme_elegantchild');
    	$description = get_string('enableprivatefilesdesc', 'theme_elegantchild');
    	$default = false;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Enable Badges.
    	$name = 'theme_elegantchild/enablebadges';
    	$title = get_string('enablebadges', 'theme_elegantchild');
    	$description = get_string('enablebadgesdesc', 'theme_elegantchild');
    	$default = false;
    	$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Additional number of links.
    		$name = 'theme_elegantchild/usermenulinks';
    		$title = get_string('usermenulinks' , 'theme_elegantchild');
    		$description = get_string('usermenulinksdesc', 'theme_elegantchild');
    		$default = '0';
    		$choices = array(
    			'0'=>'0',
    			'1'=>'1',
    			'2'=>'2',
    			'3'=>'3',
    			'4'=>'4',
    			'5'=>'5',
    			'6'=>'6',
    			'7'=>'7',
    			'8'=>'8',
    			'9'=>'9',
    			'10'=>'10');
    		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    		$setting->set_updatedcallback('theme_reset_all_caches');
    		$temp->add($setting);

    		$hascustomlinknum = (!empty($PAGE->theme->settings->usermenulinks));
    			if ($hascustomlinknum) {
    				$usermenulinks = $PAGE->theme->settings->usermenulinks;
    			} else {
    				$usermenulinks = '0';
    			}
    if ($hascustomlinknum !=0) {
		foreach (range(1, $usermenulinks) as $customlinknumber) {

		// This is the descriptor for the Custom Link.
		$name = 'theme_elegantchild/customlink';
		$title = get_string('customlinkindicator', 'theme_elegantchild');
		$information = get_string('customlinkindicatordesc', 'theme_elegantchild');
		$setting = new admin_setting_heading($name.$customlinknumber, $title.$customlinknumber, $information);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

		// Icon for Custom Link
		$name = 'theme_elegantchild/customlinkicon' . $customlinknumber;
		$title = get_string('customlinkicon', 'theme_elegantchild', $customlinknumber);
		$description = get_string('customlinkicondesc', 'theme_elegantchild', $customlinknumber);
		$default = 'dot-circle-o';
		$setting = new admin_setting_configtextarea($name, $title, $description, $default);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

		// Text for Custom Link
		$name = 'theme_elegantchild/customlinkname' . $customlinknumber;
		$title = get_string('customlinkname', 'theme_elegantchild', $customlinknumber);
		$description = get_string('customlinknamedesc', 'theme_elegantchild', $customlinknumber);
		$default = '';
		$setting = new admin_setting_configtext($name, $title, $description, $default);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);

		// Destination URL for Custom Link
		$name = 'theme_elegantchild/customlinkurl' . $customlinknumber;
		$title = get_string('customlinkurl', 'theme_elegantchild', $customlinknumber);
		$description = get_string('customlinkurldesc', 'theme_elegantchild', $customlinknumber);
		$default = '';
		$previewconfig = null;
		$setting = new admin_setting_configtext($name, $title, $description, $default);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);
		}
	}

    	$ADMIN->add('theme_elegantchild', $temp);

    /* Banner Settings */
    $temp = new admin_settingpage('theme_elegantchild_banner', get_string('bannersettings', 'theme_elegantchild'));
    $temp->add(new admin_setting_heading('theme_elegantchild_banner', get_string('bannersettingssub', 'theme_elegantchild'),
            format_text(get_string('bannersettingsdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

    // Set Number of Slides.
    $name = 'theme_elegantchild/slidenumber';
    $title = get_string('slidenumber' , 'theme_elegantchild');
    $description = get_string('slidenumberdesc', 'theme_elegantchild');
    $default = '1';
    $choices = array(
		'0'=>'0',
    	'1'=>'1',
    	'2'=>'2',
    	'3'=>'3',
    	'4'=>'4',
    	'5'=>'5',
    	'6'=>'6',
    	'7'=>'7',
    	'8'=>'8',
    	'9'=>'9',
    	'10'=>'10');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Set the Slide Speed.
    $name = 'theme_elegantchild/slidespeed';
    $title = get_string('slidespeed' , 'theme_elegantchild');
    $description = get_string('slidespeeddesc', 'theme_elegantchild');
    $default = '600';
    $setting = new admin_setting_configtext($name, $title, $description, $default );
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $hasslidenum = (!empty($PAGE->theme->settings->slidenumber));
    if ($hasslidenum) {
    		$slidenum = $PAGE->theme->settings->slidenumber;
	} else {
		$slidenum = '1';
	}

	$bannertitle = array('Slide One', 'Slide Two', 'Slide Three','Slide Four','Slide Five','Slide Six','Slide Seven', 'Slide Eight', 'Slide Nine', 'Slide Ten');

    foreach (range(1, $slidenum) as $bannernumber) {

    	// This is the descriptor for the Banner Settings.
    	$name = 'theme_elegantchild/banner';
        $title = get_string('bannerindicator', 'theme_elegantchild');
    	$information = get_string('bannerindicatordesc', 'theme_elegantchild');
    	$setting = new admin_setting_heading($name.$bannernumber, $title.$bannernumber, $information);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

        // Enables the slide.
        $name = 'theme_elegantchild/enablebanner' . $bannernumber;
        $title = get_string('enablebanner', 'theme_elegantchild', $bannernumber);
        $description = get_string('enablebannerdesc', 'theme_elegantchild', $bannernumber);
        $default = false;
        $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Slide Title.
        $name = 'theme_elegantchild/bannertitle' . $bannernumber;
        $title = get_string('bannertitle', 'theme_elegantchild', $bannernumber);
        $description = get_string('bannertitledesc', 'theme_elegantchild', $bannernumber);
        $default = $bannertitle[$bannernumber - 1];
        $setting = new admin_setting_configtext($name, $title, $description, $default );
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Slide text.
        $name = 'theme_elegantchild/bannertext' . $bannernumber;
        $title = get_string('bannertext', 'theme_elegantchild', $bannernumber);
        $description = get_string('bannertextdesc', 'theme_elegantchild', $bannernumber);
        $default = 'Bacon ipsum dolor sit amet turducken jerky beef ribeye boudin t-bone shank fatback pork loin pork short loin jowl flank meatloaf venison. Salami meatball sausage short loin beef ribs';
        $setting = new admin_setting_configtextarea($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Text for Slide Link.
        $name = 'theme_elegantchild/bannerlinktext' . $bannernumber;
        $title = get_string('bannerlinktext', 'theme_elegantchild', $bannernumber);
        $description = get_string('bannerlinktextdesc', 'theme_elegantchild', $bannernumber);
        $default = 'Read More';
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Destination URL for Slide Link
        $name = 'theme_elegantchild/bannerlinkurl' . $bannernumber;
        $title = get_string('bannerlinkurl', 'theme_elegantchild', $bannernumber);
        $description = get_string('bannerlinkurldesc', 'theme_elegantchild', $bannernumber);
        $default = '#';
        $previewconfig = null;
        $setting = new admin_setting_configtext($name, $title, $description, $default);
        $setting->set_updatedcallback('theme_reset_all_caches');
        $temp->add($setting);

        // Slide Image.
    	$name = 'theme_elegantchild/bannerimage' . $bannernumber;
    	$title = get_string('bannerimage', 'theme_elegantchild', $bannernumber);
    	$description = get_string('bannerimagedesc', 'theme_elegantchild', $bannernumber);
    	$setting = new admin_setting_configstoredfile($name, $title, $description, 'bannerimage'.$bannernumber);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    	// Slide Background Color.
    	$name = 'theme_elegantchild/bannercolor' . $bannernumber;
    	$title = get_string('bannercolor', 'theme_elegantchild', $bannernumber);
    	$description = get_string('bannercolordesc', 'theme_elegantchild', $bannernumber);
    	$default = '#000';
    	$previewconfig = null;
    	$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    }

 	$ADMIN->add('theme_elegantchild', $temp);

 	/* Marketing Spot Settings */
 		$temp = new admin_settingpage('theme_elegantchild_marketing', get_string('marketingheading', 'theme_elegantchild'));
 		$temp->add(new admin_setting_heading('theme_elegantchild_marketing', get_string('marketingheadingsub', 'theme_elegantchild'),
 				format_text(get_string('marketingdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

 		// Toggle Marketing Spots.
 		$name = 'theme_elegantchild/togglemarketing';
 		$title = get_string('togglemarketing' , 'theme_elegantchild');
 		$description = get_string('togglemarketingdesc', 'theme_elegantchild');
 		$alwaysdisplay = get_string('alwaysdisplay', 'theme_elegantchild');
 		$displaybeforelogin = get_string('displaybeforelogin', 'theme_elegantchild');
 		$displayafterlogin = get_string('displayafterlogin', 'theme_elegantchild');
 		$dontdisplay = get_string('dontdisplay', 'theme_elegantchild');
 		$default = 'display';
 		$choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
 		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketingtitle';
 		$title = get_string('marketingtitle', 'theme_elegantchild');
 		$description = get_string('marketingtitledesc', 'theme_elegantchild');
 		$default = 'More about Us';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketingtitleicon';
 		$title = get_string('marketingtitleicon', 'theme_elegantchild');
 		$description = get_string('marketingtitleicondesc', 'theme_elegantchild');
 		$default = 'globe';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the descriptor for Marketing Spot One
 		$name = 'theme_elegantchild/marketing1info';
 		$heading = get_string('marketing1', 'theme_elegantchild');
 		$information = get_string('marketinginfodesc', 'theme_elegantchild');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot One.
 		$name = 'theme_elegantchild/marketing1';
 		$title = get_string('marketingtitle', 'theme_elegantchild');
 		$description = get_string('marketingtitledesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing1icon';
 		$title = get_string('marketingicon', 'theme_elegantchild');
 		$description = get_string('marketingicondesc', 'theme_elegantchild');
 		$default = 'star';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing1content';
 		$title = get_string('marketingcontent', 'theme_elegantchild');
 		$description = get_string('marketingcontentdesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the descriptor for Marketing Spot Two
 		$name = 'theme_elegantchild/marketing2info';
 		$heading = get_string('marketing2', 'theme_elegantchild');
 		$information = get_string('marketinginfodesc', 'theme_elegantchild');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Two.
 		$name = 'theme_elegantchild/marketing2';
 		$title = get_string('marketingtitle', 'theme_elegantchild');
 		$description = get_string('marketingtitledesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing2icon';
 		$title = get_string('marketingicon', 'theme_elegantchild');
 		$description = get_string('marketingicondesc', 'theme_elegantchild');
 		$default = 'star';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing2content';
 		$title = get_string('marketingcontent', 'theme_elegantchild');
 		$description = get_string('marketingcontentdesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the descriptor for Marketing Spot Three
 		$name = 'theme_elegantchild/marketing3info';
 		$heading = get_string('marketing3', 'theme_elegantchild');
 		$information = get_string('marketinginfodesc', 'theme_elegantchild');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Three.
 		$name = 'theme_elegantchild/marketing3';
 		$title = get_string('marketingtitle', 'theme_elegantchild');
 		$description = get_string('marketingtitledesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing3icon';
 		$title = get_string('marketingicon', 'theme_elegantchild');
 		$description = get_string('marketingicondesc', 'theme_elegantchild');
 		$default = 'star';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing3content';
 		$title = get_string('marketingcontent', 'theme_elegantchild');
 		$description = get_string('marketingcontentdesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the descriptor for Marketing Spot Four
 		$name = 'theme_elegantchild/marketing4info';
 		$heading = get_string('marketing4', 'theme_elegantchild');
 		$information = get_string('marketinginfodesc', 'theme_elegantchild');
 		$setting = new admin_setting_heading($name, $heading, $information);
 		$temp->add($setting);

 		//Marketing Spot Four.
 		$name = 'theme_elegantchild/marketing4';
 		$title = get_string('marketingtitle', 'theme_elegantchild');
 		$description = get_string('marketingtitledesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing4icon';
 		$title = get_string('marketingicon', 'theme_elegantchild');
 		$description = get_string('marketingicondesc', 'theme_elegantchild');
 		$default = 'star';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$name = 'theme_elegantchild/marketing4content';
 		$title = get_string('marketingcontent', 'theme_elegantchild');
 		$description = get_string('marketingcontentdesc', 'theme_elegantchild');
 		$default = '';
 		$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 	$ADMIN->add('theme_elegantchild', $temp);

 	/* Quick Link Settings */
 		$temp = new admin_settingpage('theme_elegantchild_quicklinks', get_string('quicklinksheading', 'theme_elegantchild'));
 		$temp->add(new admin_setting_heading('theme_elegantchild_quicklinks', get_string('quicklinksheadingsub', 'theme_elegantchild'),
 				format_text(get_string('quicklinksdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

 		// Toggle Quick Links.
 		$name = 'theme_elegantchild/togglequicklinks';
 		$title = get_string('togglequicklinks' , 'theme_elegantchild');
 		$description = get_string('togglequicklinksdesc', 'theme_elegantchild');
 		$alwaysdisplay = get_string('alwaysdisplay', 'theme_elegantchild');
 		$displaybeforelogin = get_string('displaybeforelogin', 'theme_elegantchild');
 		$displayafterlogin = get_string('displayafterlogin', 'theme_elegantchild');
 		$dontdisplay = get_string('dontdisplay', 'theme_elegantchild');
 		$default = 'display';
 		$choices = array('1'=>$alwaysdisplay, '2'=>$displaybeforelogin, '3'=>$displayafterlogin, '0'=>$dontdisplay);
 		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		// Set Number of Quick Links.
 		$name = 'theme_elegantchild/quicklinksnumber';
 		$title = get_string('quicklinksnumber' , 'theme_elegantchild');
 		$description = get_string('quicklinksnumberdesc', 'theme_elegantchild');
 		$default = '4';
 		$choices = array(
 			'1'=>'1',
 			'2'=>'2',
 			'3'=>'3',
 			'4'=>'4',
 			'5'=>'5',
 			'6'=>'6',
 			'7'=>'7',
 			'8'=>'8',
 			'9'=>'9',
 			'10'=>'10',
 			'11'=>'11',
 			'12'=>'12');
 		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		$hasquicklinksnum = (!empty($PAGE->theme->settings->quicklinksnumber));
 			if ($hasquicklinksnum) {
 				$quicklinksnum = $PAGE->theme->settings->quicklinksnumber;
 			} else {
 				$quicklinksnum = '4';
 			}
 		//This is the title for the Quick Links area
 		$name = 'theme_elegantchild/quicklinkstitle';
 		$title = get_string('quicklinkstitle', 'theme_elegantchild');
 		$description = get_string('quicklinkstitledesc', 'theme_elegantchild');
 		$default = 'Site Quick Links';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		//This is the icon for the Quick Links area
 		$name = 'theme_elegantchild/quicklinksicon';
 		$title = get_string('quicklinksicon', 'theme_elegantchild');
 		$description = get_string('quicklinksicondesc', 'theme_elegantchild');
 		$default = 'link';
 		$setting = new admin_setting_configtext($name, $title, $description, $default);
 		$setting->set_updatedcallback('theme_reset_all_caches');
 		$temp->add($setting);

 		foreach (range(1, $quicklinksnum) as $quicklinksnumber) {

 			//This is the descriptor for Quick Link One
 			$name = 'theme_elegantchild/quicklinkinfo';
 			$title = get_string('quicklinks', 'theme_elegantchild');
 			$information = get_string('quicklinksdesc', 'theme_elegantchild');
 			$setting = new admin_setting_heading($name.$quicklinksnumber, $title.$quicklinksnumber, $information);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);

 			//Quick Link Icon.
 			$name = 'theme_elegantchild/quicklinkicon' . $quicklinksnumber;
 			$title = get_string('quicklinkicon', 'theme_elegantchild', $quicklinksnumber);
 			$description = get_string('quicklinkicondesc', 'theme_elegantchild', $quicklinksnumber);
 			$default = 'star';
 			$setting = new admin_setting_configtext($name, $title, $description, $default);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);

 			// Quick Link Icon Color.
 			$name = 'theme_elegantchild/quicklinkiconcolor' . $quicklinksnumber;
 			$title = get_string('quicklinkiconcolor', 'theme_elegantchild', $quicklinksnumber);
 			$description = get_string('quicklinkiconcolordesc', 'theme_elegantchild', $quicklinksnumber);
 			$default = '';
 			$previewconfig = null;
 			$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);

 			// Quick Link Button Text.
 			$name = 'theme_elegantchild/quicklinkbuttontext' . $quicklinksnumber;
 			$title = get_string('quicklinkbuttontext', 'theme_elegantchild', $quicklinksnumber);
 			$description = get_string('quicklinkbuttontextdesc', 'theme_elegantchild', $quicklinksnumber);
 			$default = 'Click Here';
 			$setting = new admin_setting_configtext($name, $title, $description, $default);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);

 			// Quick Link Button Color.
 			$name = 'theme_elegantchild/quicklinkbuttoncolor' . $quicklinksnumber;
 			$title = get_string('quicklinkbuttoncolor', 'theme_elegantchild', $quicklinksnumber);
 			$description = get_string('quicklinkbuttoncolordesc', 'theme_elegantchild', $quicklinksnumber);
 			$default = '';
 			$previewconfig = null;
 			$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);

 			// Quick Link Button URL.
 			$name = 'theme_elegantchild/quicklinkbuttonurl' . $quicklinksnumber;
 			$title = get_string('quicklinkbuttonurl', 'theme_elegantchild', $quicklinksnumber);
 			$description = get_string('quicklinkbuttonurldesc', 'theme_elegantchild', $quicklinksnumber);
 			$default = '';
 			$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
 			$setting->set_updatedcallback('theme_reset_all_caches');
 			$temp->add($setting);
 		}


 	$ADMIN->add('theme_elegantchild', $temp);

 	/* Login Page Settings */
    $temp = new admin_settingpage('theme_elegantchild_loginsettings', get_string('loginsettings', 'theme_elegantchild'));
    $temp->add(new admin_setting_heading('theme_elegantchild_loginsettings', get_string('loginsettingssub', 'theme_elegantchild'),
            format_text(get_string('loginsettingsdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

    // Enable Custom Login Page.
    $name = 'theme_elegantchild/enablecustomlogin';
    $title = get_string('enablecustomlogin', 'theme_elegantchild');
    $description = get_string('enablecustomlogindesc', 'theme_elegantchild');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Set Number of Slides.
    $name = 'theme_elegantchild/loginbgumber';
    $title = get_string('loginbgumber' , 'theme_elegantchild');
    $description = get_string('loginbgumberdesc', 'theme_elegantchild');
    $default = '1';
    $choices = array(
    	'1'=>'1',
    	'2'=>'2',
    	'3'=>'3',
    	'4'=>'4',
    	'5'=>'5');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $hasloginbgnum = (!empty($PAGE->theme->settings->loginbgumber));
    if ($hasloginbgnum) {
    	$loginbgnum = $PAGE->theme->settings->loginbgumber;
	} else {
		$loginbgnum = '1';
	}

    foreach (range(1, $loginbgnum) as $loginbgnumber) {

    // Login Background Image.
    	$name = 'theme_elegantchild/loginimage' . $loginbgnumber;
    	$title = get_string('loginimage', 'theme_elegantchild');
    	$description = get_string('loginimagedesc', 'theme_elegantchild');
    	$setting = new admin_setting_configstoredfile($name, $title.$loginbgnumber, $description, 'loginimage'.$loginbgnumber);
    	$setting->set_updatedcallback('theme_reset_all_caches');
    	$temp->add($setting);

    }

 	$ADMIN->add('theme_elegantchild', $temp);

 	/* Social Network Settings */
	$temp = new admin_settingpage('theme_elegantchild_social', get_string('socialheading', 'theme_elegantchild'));
	$temp->add(new admin_setting_heading('theme_elegantchild_social', get_string('socialheadingsub', 'theme_elegantchild'),
            format_text(get_string('socialdesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));

    // Website url setting.
    $name = 'theme_elegantchild/website';
    $title = get_string('website', 'theme_elegantchild');
    $description = get_string('websitedesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Blog url setting.
    $name = 'theme_elegantchild/blog';
    $title = get_string('blog', 'theme_elegantchild');
    $description = get_string('blogdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Facebook url setting.
    $name = 'theme_elegantchild/facebook';
    $title = get_string(    	'facebook', 'theme_elegantchild');
    $description = get_string(    	'facebookdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Flickr url setting.
    $name = 'theme_elegantchild/flickr';
    $title = get_string('flickr', 'theme_elegantchild');
    $description = get_string('flickrdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Twitter url setting.
    $name = 'theme_elegantchild/twitter';
    $title = get_string('twitter', 'theme_elegantchild');
    $description = get_string('twitterdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Google+ url setting.
    $name = 'theme_elegantchild/googleplus';
    $title = get_string('googleplus', 'theme_elegantchild');
    $description = get_string('googleplusdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // LinkedIn url setting.
    $name = 'theme_elegantchild/linkedin';
    $title = get_string('linkedin', 'theme_elegantchild');
    $description = get_string('linkedindesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Tumblr url setting.
    $name = 'theme_elegantchild/tumblr';
    $title = get_string('tumblr', 'theme_elegantchild');
    $description = get_string('tumblrdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Pinterest url setting.
    $name = 'theme_elegantchild/pinterest';
    $title = get_string('pinterest', 'theme_elegantchild');
    $description = get_string('pinterestdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Instagram url setting.
    $name = 'theme_elegantchild/instagram';
    $title = get_string('instagram', 'theme_elegantchild');
    $description = get_string('instagramdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // YouTube url setting.
    $name = 'theme_elegantchild/youtube';
    $title = get_string('youtube', 'theme_elegantchild');
    $description = get_string('youtubedesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Vimeo url setting.
    $name = 'theme_elegantchild/vimeo';
    $title = get_string('vimeo', 'theme_elegantchild');
    $description = get_string('vimeodesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Skype url setting.
    $name = 'theme_elegantchild/skype';
    $title = get_string('skype', 'theme_elegantchild');
    $description = get_string('skypedesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // VKontakte url setting.
    $name = 'theme_elegantchild/vk';
    $title = get_string('vk', 'theme_elegantchild');
    $description = get_string('vkdesc', 'theme_elegantchild');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_elegantchild', $temp);

    /* Category Settings */
    $temp = new admin_settingpage('theme_elegantchild_categoryicon', get_string('categoryiconheading', 'theme_elegantchild'));
	$temp->add(new admin_setting_heading('theme_elegantchild_categoryicon', get_string('categoryiconheadingsub', 'theme_elegantchild'),
            format_text(get_string('categoryicondesc' , 'theme_elegantchild'), FORMAT_MARKDOWN)));
    // Category Icons.
    $name = 'theme_elegantchild/enablecategoryicon';
    $title = get_string('enablecategoryicon', 'theme_elegantchild');
    $description = get_string('enablecategoryicondesc', 'theme_elegantchild');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Default Icon Selector.
    $name = 'theme_elegantchild/defaultcategoryicon';
    $title = get_string('defaultcategoryicon' , 'theme_elegantchild');
    $description = get_string('defaultcategoryicondesc', 'theme_elegantchild');
    $default = 'f07c';
    $choices = array(
		'f000'=>'fa-glass',
    	'f001'=>'fa-music',
    	'f002'=>'fa-search',
    	'f003'=>'fa-envelope-o',
    	'f004'=>'fa-heart',
    	'f005'=>'fa-star',
    	'f006'=>'fa-star-o',
    	'f007'=>'fa-user',
    	'f008'=>'fa-film',
    	'f009'=>'fa-th-large',
    	'f00a'=>'fa-th',
    	'f00b'=>'fa-th-list',
    	'f00c'=>'fa-check',
    	'f00d'=>'fa-times',
    	'f00e'=>'fa-search-plus',
    	'f010'=>'fa-search-minus',
    	'f011'=>'fa-power-off',
    	'f012'=>'fa-signal',
    	'f013'=>'fa-cog',
    	'f014'=>'fa-trash-o',
    	'f015'=>'fa-home',
    	'f016'=>'fa-file-o',
    	'f017'=>'fa-clock-o',
    	'f018'=>'fa-road',
    	'f019'=>'fa-download',
    	'f01a'=>'fa-arrow-circle-o-down',
    	'f01b'=>'fa-arrow-circle-o-up',
    	'f01c'=>'fa-inbox',
    	'f01d'=>'fa-play-circle-o',
    	'f01e'=>'fa-repeat',
    	'f021'=>'fa-refresh',
    	'f022'=>'fa-list-alt',
    	'f023'=>'fa-lock',
    	'f024'=>'fa-flag',
    	'f025'=>'fa-headphones',
    	'f026'=>'fa-volume-off',
    	'f027'=>'fa-volume-down',
    	'f028'=>'fa-volume-up',
    	'f029'=>'fa-qrcode',
    	'f02a'=>'fa-barcode',
    	'f02b'=>'fa-tag',
    	'f02c'=>'fa-tags',
    	'f02d'=>'fa-book',
    	'f02e'=>'fa-bookmark',
    	'f02f'=>'fa-print',
    	'f030'=>'fa-camera',
    	'f031'=>'fa-font',
    	'f032'=>'fa-bold',
    	'f033'=>'fa-italic',
    	'f034'=>'fa-text-height',
    	'f035'=>'fa-text-width',
    	'f036'=>'fa-align-left',
    	'f037'=>'fa-align-center',
    	'f038'=>'fa-align-right',
    	'f039'=>'fa-align-justify',
    	'f03a'=>'fa-list',
    	'f03b'=>'fa-outdent',
    	'f03c'=>'fa-indent',
    	'f03d'=>'fa-video-camera',
    	'f03e'=>'fa-picture-o',
    	'f040'=>'fa-pencil',
    	'f041'=>'fa-map-marker',
    	'f042'=>'fa-adjust',
    	'f043'=>'fa-tint',
    	'f044'=>'fa-pencil-square-o',
    	'f045'=>'fa-share-square-o',
    	'f046'=>'fa-check-square-o',
    	'f047'=>'fa-arrows',
    	'f048'=>'fa-step-backward',
    	'f049'=>'fa-fast-backward',
    	'f04a'=>'fa-backward',
    	'f04b'=>'fa-play',
    	'f04c'=>'fa-pause',
    	'f04d'=>'fa-stop',
    	'f04e'=>'fa-forward',
    	'f050'=>'fa-fast-forward',
    	'f051'=>'fa-step-forward',
    	'f052'=>'fa-eject',
    	'f053'=>'fa-chevron-left',
    	'f054'=>'fa-chevron-right',
    	'f055'=>'fa-plus-circle',
    	'f056'=>'fa-minus-circle',
    	'f057'=>'fa-times-circle',
    	'f058'=>'fa-check-circle',
    	'f059'=>'fa-question-circle',
    	'f05a'=>'fa-info-circle',
    	'f05b'=>'fa-crosshairs',
    	'f05c'=>'fa-times-circle-o',
    	'f05d'=>'fa-check-circle-o',
    	'f05e'=>'fa-ban',
    	'f060'=>'fa-arrow-left',
    	'f061'=>'fa-arrow-right',
    	'f062'=>'fa-arrow-up',
    	'f063'=>'fa-arrow-down',
    	'f064'=>'fa-share',
    	'f065'=>'fa-expand',
    	'f066'=>'fa-compress',
    	'f067'=>'fa-plus',
    	'f068'=>'fa-minus',
    	'f069'=>'fa-asterisk',
    	'f06a'=>'fa-exclamation-circle',
    	'f06b'=>'fa-gift',
    	'f06c'=>'fa-leaf',
    	'f06d'=>'fa-fire',
    	'f06e'=>'fa-eye',
    	'f070'=>'fa-eye-slash',
    	'f071'=>'fa-exclamation-triangle',
    	'f072'=>'fa-plane',
    	'f073'=>'fa-calendar',
    	'f074'=>'fa-random',
    	'f075'=>'fa-comment',
    	'f076'=>'fa-magnet',
    	'f077'=>'fa-chevron-up',
    	'f078'=>'fa-chevron-down',
    	'f079'=>'fa-retweet',
    	'f07a'=>'fa-shopping-cart',
    	'f07b'=>'fa-folder',
    	'f07c'=>'fa-folder-open',
    	'f07d'=>'fa-arrows-v',
    	'f07e'=>'fa-arrows-h',
    	'f080'=>'fa-bar-chart-o',
    	'f081'=>'fa-twitter-square',
    	'f082'=>'fa-facebook-square',
    	'f083'=>'fa-camera-retro',
    	'f084'=>'fa-key',		'f085'=>'fa-cogs',
		'f086'=>'fa-comments',
    	'f087'=>'fa-thumbs-o-up',
    	'f088'=>'fa-thumbs-o-down',
    	'f089'=>'fa-star-half',
    	'f08a'=>'fa-heart-o',
    	'f08b'=>'fa-sign-out',
    	'f08c'=>'fa-linkedin-square',
    	'f08d'=>'fa-thumb-tack',
    	'f08e'=>'fa-external-link',
    	'f090'=>'fa-sign-in',
    	'f091'=>'fa-trophy',
    	'f092'=>'fa-github-square',
    	'f093'=>'fa-upload',
    	'f094'=>'fa-lemon-o',
    	'f095'=>'fa-phone',
    	'f096'=>'fa-square-o',
    	'f097'=>'fa-bookmark-o',
    	'f098'=>'fa-phone-square',
    	'f099'=>'fa-twitter',
    	'f09a'=>'fa-facebook',
    	'f09b'=>'fa-github',
    	'f09c'=>'fa-unlock',
    	'f09d'=>'fa-credit-card',
    	'f09e'=>'fa-rss',
    	'f0a0'=>'fa-hdd-o',
    	'f0a1'=>'fa-bullhorn',
    	'f0f3'=>'fa-bell',
    	'f0a3'=>'fa-certificate',
    	'f0a4'=>'fa-hand-o-right',
    	'f0a5'=>'fa-hand-o-left',
    	'f0a6'=>'fa-hand-o-up',
    	'f0a7'=>'fa-hand-o-down',
    	'f0a8'=>'fa-arrow-circle-left',
    	'f0a9'=>'fa-arrow-circle-right',
    	'f0aa'=>'fa-arrow-circle-up',
    	'f0ab'=>'fa-arrow-circle-down',
    	'f0ac'=>'fa-globe',
    	'f0ad'=>'fa-wrench',
    	'f0ae'=>'fa-tasks',
    	'f0b0'=>'fa-filter',
    	'f0b1'=>'fa-briefcase',
    	'f0b2'=>'fa-arrows-alt',
    	'f0c0'=>'fa-users',
    	'f0c1'=>'fa-link',
    	'f0c2'=>'fa-cloud',
    	'f0c3'=>'fa-flask',
    	'f0c4'=>'fa-scissors',
    	'f0c5'=>'fa-files-o',
    	'f0c6'=>'fa-paperclip',
    	'f0c7'=>'fa-floppy-o',
    	'f0c8'=>'fa-square',
    	'f0c9'=>'fa-bars',
    	'f0ca'=>'fa-list-ul',
    	'f0cb'=>'fa-list-ol',
    	'f0cc'=>'fa-strikethrough',
    	'f0cd,a-underline',
    	'f0ce'=>'fa-table',
    	'f0d0'=>'fa-magic',
    	'f0d1'=>'fa-truck',
    	'f0d2'=>'fa-pinterest',
    	'f0d3'=>'fa-pinterest-square',
    	'f0d4'=>'fa-google-plus-square',
    	'f0d5'=>'fa-google-plus',
    	'f0d6'=>'fa-money',
    	'f0d7'=>'fa-caret-down',
    	'f0d8'=>'fa-caret-up',
    	'f0d9'=>'fa-caret-left',
    	'f0da'=>'fa-caret-right',
    	'f0db'=>'fa-columns',
    	'f0dc'=>'fa-sort',
    	'f0dd'=>'fa-sort-asc',
    	'f0de'=>'fa-sort-desc',
    	'f0e0'=>'fa-envelope',
    	'f0e1'=>'fa-linkedin',
    	'f0e2'=>'fa-undo',
    	'f0e3,a-gavel',
    	'f0e4'=>'fa-tachometer',
    	'f0e5'=>'fa-comment-o',
    	'f0e6'=>'fa-comments-o',
    	'f0e7'=>'fa-bolt',
    	'f0e8'=>'fa-sitemap',
    	'f0e9'=>'fa-umbrella',
    	'f0ea'=>'fa-clipboard',
    	'f0eb'=>'fa-lightbulb-o',
    	'f0ec'=>'fa-exchange',
    	'f0ed'=>'fa-cloud-download',
    	'f0ee'=>'fa-cloud-upload',
    	'f0f0'=>'fa-user-md',
    	'f0f1'=>'fa-stethoscope',
    	'f0f2'=>'fa-suitcase',
    	'f0a2'=>'fa-bell-o',
    	'f0f4'=>'fa-coffee',
    	'f0f5'=>'fa-cutlery',
    	'f0f6'=>'fa-file-text-o',
    	'f0f7'=>'fa-building-o',
    	'f0f8'=>'fa-hospital-o',
    	'f0f9'=>'fa-ambulance',
    	'f0fa'=>'fa-medkit',
    	'f0fb'=>'fa-fighter-jet',
    	'f0fc'=>'fa-beer',
    	'f0fd'=>'fa-h-square',
    	'f0fe'=>'fa-plus-square',
    	'f100'=>'fa-angle-double-left',
    	'f101'=>'fa-angle-double-right',
    	'f102'=>'fa-angle-double-up',
    	'f103'=>'fa-angle-double-down',
    	'f104'=>'fa-angle-left',
    	'f105'=>'fa-angle-right',
    	'f106'=>'fa-angle-up',
    	'f107'=>'fa-angle-down',
    	'f108'=>'fa-desktop',
    	'f109'=>'fa-laptop',
    	'f10a'=>'fa-tablet',
    	'f10b'=>'fa-mobile',
    	'f10c'=>'fa-circle-o',
    	'f10d'=>'fa-quote-left',
    	'f10e'=>'fa-quote-right',
    	'f110'=>'fa-spinner',
    	'f111'=>'fa-circle',
    	'f112'=>'fa-reply',
    	'f113'=>'fa-github-alt',
    	'f114'=>'fa-folder-o',
    	'f115'=>'fa-folder-open-o',
    	'f118'=>'fa-smile-o',
    	'f119'=>'fa-frown-o',
    	'f11a'=>'fa-meh-o',
    	'f11b'=>'fa-gamepad',
    	'f11c'=>'fa-keyboard-o',
    	'f11d'=>'fa-flag-o',
    	'f11e'=>'fa-flag-checkered',
    	'f120'=>'fa-terminal',
    	'f121'=>'fa-code',
    	'f122'=>'fa-reply-all',
    	'f122'=>'fa-mail-reply-all',
    	'f123'=>'fa-star-half-o',
    	'f124'=>'fa-location-arrow',
    	'f125'=>'fa-crop',
    	'f126'=>'fa-code-fork',
    	'f127'=>'fa-chain-broken',
    	'f128'=>'fa-question',
    	'f129'=>'fa-info',
    	'f12a'=>'fa-exclamation',
    	'f12b'=>'fa-superscript',
    	'f12c'=>'fa-subscript',
    	'f12d'=>'fa-eraser',
    	'f12e'=>'fa-puzzle-piece',
    	'f130'=>'fa-microphone',
    	'f131'=>'fa-microphone-slash',
    	'f132'=>'fa-shield',
    	'f133'=>'fa-calendar-o',
    	'f134'=>'fa-fire-extinguisher',
    	'f135'=>'fa-rocket',
    	'f136'=>'fa-maxcdn',
    	'f137'=>'fa-chevron-circle-left',
    	'f138'=>'fa-chevron-circle-right',
    	'f139'=>'fa-chevron-circle-up',
    	'f13a'=>'fa-chevron-circle-down',
    	'f13b'=>'fa-html5',
    	'f13c'=>'fa-css3',
    	'f13d'=>'fa-anchor',
    	'f13e'=>'fa-unlock-alt',
    	'f140'=>'fa-bullseye',
    	'f141'=>'fa-ellipsis-h',
    	'f142'=>'fa-ellipsis-v',
    	'f143'=>'fa-rss-square',
    	'f144'=>'fa-play-circle',
    	'f145'=>'fa-ticket',
    	'f146'=>'fa-minus-square',
    	'f147'=>'fa-minus-square-o',
    	'f148'=>'fa-level-up',
    	'f149'=>'fa-level-down',
    	'f14a'=>'fa-check-square',
    	'f14b'=>'fa-pencil-square',
    	'f14c'=>'fa-external-link-square',
    	'f14d'=>'fa-share-square',
    	'f14e'=>'fa-compass',
    	'f150'=>'fa-caret-square-o-down',
    	'f151'=>'fa-caret-square-o-up',
    	'f152'=>'fa-caret-square-o-right',
    	'f153'=>'fa-eur',
    	'f154'=>'fa-gbp',
    	'f155'=>'fa-usd',
    	'f156'=>'fa-inr',
    	'f157'=>'fa-jpy',
    	'f158'=>'fa-rub',
    	'f159'=>'fa-krw',
    	'f15a'=>'fa-btc',
    	'f15b'=>'fa-file',
    	'f15c'=>'fa-file-text',
    	'f15d'=>'fa-sort-alpha-asc',
    	'f15e'=>'fa-sort-alpha-desc',
    	'f160'=>'fa-sort-amount-asc',
    	'f161'=>'fa-sort-amount-desc',
    	'f162'=>'fa-sort-numeric-asc',
    	'f163'=>'fa-sort-numeric-desc',
    	'f164'=>'fa-thumbs-up',
    	'f165'=>'fa-thumbs-down',
    	'f166'=>'fa-youtube-square',
    	'f167'=>'fa-youtube',
    	'f168'=>'fa-xing',
    	'f169'=>'fa-xing-square',
    	'f16a'=>'fa-youtube-play',
    	'f16b'=>'fa-dropbox',
    	'f16c'=>'fa-stack-overflow',
    	'f16d'=>'fa-instagram',
    	'f16e'=>'fa-flickr',
    	'f170'=>'fa-adn',
    	'f171'=>'fa-bitbucket',
    	'f172'=>'fa-bitbucket-square',
    	'f173'=>'fa-tumblr',
    	'f174'=>'fa-tumblr-square',
    	'f175'=>'fa-long-arrow-down',
    	'f176'=>'fa-long-arrow-up',
    	'f177'=>'fa-long-arrow-left',
    	'f178'=>'fa-long-arrow-right',
    	'f179'=>'fa-apple',
    	'f17a'=>'fa-windows',
    	'f17b'=>'fa-android',
    	'f17c'=>'fa-linux',
    	'f17d'=>'fa-dribbble',
    	'f17e'=>'fa-skype',
    	'f180'=>'fa-foursquare',
    	'f181'=>'fa-trello',
    	'f182'=>'fa-female',
    	'f183'=>'fa-male',
    	'f184'=>'fa-gittip',
    	'f185'=>'fa-sun-o',
    	'f186'=>'fa-moon-o',
    	'f187'=>'fa-archive',
    	'f188'=>'fa-bug',
    	'f189'=>'fa-vk',
    	'f18a'=>'fa-weibo',
    	'f18b'=>'fa-renren',
    	'f18c'=>'fa-pagelines',
    	'f18d'=>'fa-stack-exchange',
    	'f18e'=>'fa-arrow-circle-o-right',
    	'f190'=>'fa-arrow-circle-o-left',
    	'f191'=>'fa-caret-square-o-left',
    	'f192'=>'fa-dot-circle-o',
    	'f193'=>'fa-wheelchair',
    	'f194'=>'fa-vimeo-square',
    	'f195'=>'fa-try');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Set Number of Categories.
    $name = 'theme_elegantchild/categorynumber';
    $title = get_string('categorynumber' , 'theme_elegantchild');
    $description = get_string('categorynumberdesc', 'theme_elegantchild');
    $default = '1';
    $choices = array(
		'0'=>'0',
    	'1'=>'1',
    	'2'=>'2',
    	'3'=>'3',
    	'4'=>'4',
    	'5'=>'5',
    	'6'=>'6',
    	'7'=>'7',
    	'8'=>'8',
    	'9'=>'9',
    	'10'=>'10',
    	'11'=>'11',
    	'12'=>'12',
    	'13'=>'13',
    	'14'=>'14',
    	'15'=>'15',
    	'16'=>'16',
    	'17'=>'17',
    	'18'=>'18',
    	'19'=>'19',
    	'20'=>'20',);
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    //This is the descriptor for Category Icons
    $name = 'theme_elegantchild/categoryiconinfo';
    $heading = get_string('categoryiconinfo', 'theme_elegantchild');
    $information = get_string('categoryiconinfodesc', 'theme_elegantchild');
    $setting = new admin_setting_heading($name, $heading, $information);
    $temp->add($setting);

    $hascatnum = (!empty($PAGE->theme->settings->categorynumber));

    if ($hascatnum) {
    	$catnum = $PAGE->theme->settings->categorynumber;
	} else {
		$catnum = '1';
	}

    foreach (range(1, $catnum) as $categorynumber) {

    // Category 1 Icon.
    $name = 'theme_elegantchild/categoryicon';
    $title = get_string('categoryicon' , 'theme_elegantchild');
    $description = get_string('categoryicondesc', 'theme_elegantchild');
    $default = '';
    $choices = array(
		''=>'Use Default',
		'f000'=>'fa-glass',
    	'f001'=>'fa-music',
    	'f002'=>'fa-search',
    	'f003'=>'fa-envelope-o',
    	'f004'=>'fa-heart',
    	'f005'=>'fa-star',
    	'f006'=>'fa-star-o',
    	'f007'=>'fa-user',
    	'f008'=>'fa-film',
    	'f009'=>'fa-th-large',
    	'f00a'=>'fa-th',
    	'f00b'=>'fa-th-list',
    	'f00c'=>'fa-check',
    	'f00d'=>'fa-times',
    	'f00e'=>'fa-search-plus',
    	'f010'=>'fa-search-minus',
    	'f011'=>'fa-power-off',
    	'f012'=>'fa-signal',
    	'f013'=>'fa-cog',
    	'f014'=>'fa-trash-o',
    	'f015'=>'fa-home',
    	'f016'=>'fa-file-o',
    	'f017'=>'fa-clock-o',
    	'f018'=>'fa-road',
    	'f019'=>'fa-download',
    	'f01a'=>'fa-arrow-circle-o-down',
    	'f01b'=>'fa-arrow-circle-o-up',
    	'f01c'=>'fa-inbox',
    	'f01d'=>'fa-play-circle-o',
    	'f01e'=>'fa-repeat',
    	'f021'=>'fa-refresh',
    	'f022'=>'fa-list-alt',
    	'f023'=>'fa-lock',
    	'f024'=>'fa-flag',
    	'f025'=>'fa-headphones',
    	'f026'=>'fa-volume-off',
    	'f027'=>'fa-volume-down',
    	'f028'=>'fa-volume-up',
    	'f029'=>'fa-qrcode',
    	'f02a'=>'fa-barcode',
    	'f02b'=>'fa-tag',
    	'f02c'=>'fa-tags',
    	'f02d'=>'fa-book',
    	'f02e'=>'fa-bookmark',
    	'f02f'=>'fa-print',
    	'f030'=>'fa-camera',
    	'f031'=>'fa-font',
    	'f032'=>'fa-bold',
    	'f033'=>'fa-italic',
    	'f034'=>'fa-text-height',
    	'f035'=>'fa-text-width',
    	'f036'=>'fa-align-left',
    	'f037'=>'fa-align-center',
    	'f038'=>'fa-align-right',
    	'f039'=>'fa-align-justify',
    	'f03a'=>'fa-list',
    	'f03b'=>'fa-outdent',
    	'f03c'=>'fa-indent',
    	'f03d'=>'fa-video-camera',
    	'f03e'=>'fa-picture-o',
    	'f040'=>'fa-pencil',
    	'f041'=>'fa-map-marker',
    	'f042'=>'fa-adjust',
    	'f043'=>'fa-tint',
    	'f044'=>'fa-pencil-square-o',
    	'f045'=>'fa-share-square-o',
    	'f046'=>'fa-check-square-o',
    	'f047'=>'fa-arrows',
    	'f048'=>'fa-step-backward',
    	'f049'=>'fa-fast-backward',
    	'f04a'=>'fa-backward',
    	'f04b'=>'fa-play',
    	'f04c'=>'fa-pause',
    	'f04d'=>'fa-stop',
    	'f04e'=>'fa-forward',
    	'f050'=>'fa-fast-forward',
    	'f051'=>'fa-step-forward',
    	'f052'=>'fa-eject',
    	'f053'=>'fa-chevron-left',
    	'f054'=>'fa-chevron-right',
    	'f055'=>'fa-plus-circle',
    	'f056'=>'fa-minus-circle',
    	'f057'=>'fa-times-circle',
    	'f058'=>'fa-check-circle',
    	'f059'=>'fa-question-circle',
    	'f05a'=>'fa-info-circle',
    	'f05b'=>'fa-crosshairs',
    	'f05c'=>'fa-times-circle-o',
    	'f05d'=>'fa-check-circle-o',
    	'f05e'=>'fa-ban',
    	'f060'=>'fa-arrow-left',
    	'f061'=>'fa-arrow-right',
    	'f062'=>'fa-arrow-up',
    	'f063'=>'fa-arrow-down',
    	'f064'=>'fa-share',
    	'f065'=>'fa-expand',
    	'f066'=>'fa-compress',
    	'f067'=>'fa-plus',
    	'f068'=>'fa-minus',
    	'f069'=>'fa-asterisk',
    	'f06a'=>'fa-exclamation-circle',
    	'f06b'=>'fa-gift',
    	'f06c'=>'fa-leaf',
    	'f06d'=>'fa-fire',
    	'f06e'=>'fa-eye',
    	'f070'=>'fa-eye-slash',
    	'f071'=>'fa-exclamation-triangle',
    	'f072'=>'fa-plane',
    	'f073'=>'fa-calendar',
    	'f074'=>'fa-random',
    	'f075'=>'fa-comment',
    	'f076'=>'fa-magnet',
    	'f077'=>'fa-chevron-up',
    	'f078'=>'fa-chevron-down',
    	'f079'=>'fa-retweet',
    	'f07a'=>'fa-shopping-cart',
    	'f07b'=>'fa-folder',
    	'f07c'=>'fa-folder-open',
    	'f07d'=>'fa-arrows-v',
    	'f07e'=>'fa-arrows-h',
    	'f080'=>'fa-bar-chart-o',
    	'f081'=>'fa-twitter-square',
    	'f082'=>'fa-facebook-square',
    	'f083'=>'fa-camera-retro',
    	'f084'=>'fa-key',		'f085'=>'fa-cogs',
		'f086'=>'fa-comments',
    	'f087'=>'fa-thumbs-o-up',
    	'f088'=>'fa-thumbs-o-down',
    	'f089'=>'fa-star-half',
    	'f08a'=>'fa-heart-o',
    	'f08b'=>'fa-sign-out',
    	'f08c'=>'fa-linkedin-square',
    	'f08d'=>'fa-thumb-tack',
    	'f08e'=>'fa-external-link',
    	'f090'=>'fa-sign-in',
    	'f091'=>'fa-trophy',
    	'f092'=>'fa-github-square',
    	'f093'=>'fa-upload',
    	'f094'=>'fa-lemon-o',
    	'f095'=>'fa-phone',
    	'f096'=>'fa-square-o',
    	'f097'=>'fa-bookmark-o',
    	'f098'=>'fa-phone-square',
    	'f099'=>'fa-twitter',
    	'f09a'=>'fa-facebook',
    	'f09b'=>'fa-github',
    	'f09c'=>'fa-unlock',
    	'f09d'=>'fa-credit-card',
    	'f09e'=>'fa-rss',
    	'f0a0'=>'fa-hdd-o',
    	'f0a1'=>'fa-bullhorn',
    	'f0f3'=>'fa-bell',
    	'f0a3'=>'fa-certificate',
    	'f0a4'=>'fa-hand-o-right',
    	'f0a5'=>'fa-hand-o-left',
    	'f0a6'=>'fa-hand-o-up',
    	'f0a7'=>'fa-hand-o-down',
    	'f0a8'=>'fa-arrow-circle-left',
    	'f0a9'=>'fa-arrow-circle-right',
    	'f0aa'=>'fa-arrow-circle-up',
    	'f0ab'=>'fa-arrow-circle-down',
    	'f0ac'=>'fa-globe',
    	'f0ad'=>'fa-wrench',
    	'f0ae'=>'fa-tasks',
    	'f0b0'=>'fa-filter',
    	'f0b1'=>'fa-briefcase',
    	'f0b2'=>'fa-arrows-alt',
    	'f0c0'=>'fa-users',
    	'f0c1'=>'fa-link',
    	'f0c2'=>'fa-cloud',
    	'f0c3'=>'fa-flask',
    	'f0c4'=>'fa-scissors',
    	'f0c5'=>'fa-files-o',
    	'f0c6'=>'fa-paperclip',
    	'f0c7'=>'fa-floppy-o',
    	'f0c8'=>'fa-square',
    	'f0c9'=>'fa-bars',
    	'f0ca'=>'fa-list-ul',
    	'f0cb'=>'fa-list-ol',
    	'f0cc'=>'fa-strikethrough',
    	'f0cd,a-underline',
    	'f0ce'=>'fa-table',
    	'f0d0'=>'fa-magic',
    	'f0d1'=>'fa-truck',
    	'f0d2'=>'fa-pinterest',
    	'f0d3'=>'fa-pinterest-square',
    	'f0d4'=>'fa-google-plus-square',
    	'f0d5'=>'fa-google-plus',
    	'f0d6'=>'fa-money',
    	'f0d7'=>'fa-caret-down',
    	'f0d8'=>'fa-caret-up',
    	'f0d9'=>'fa-caret-left',
    	'f0da'=>'fa-caret-right',
    	'f0db'=>'fa-columns',
    	'f0dc'=>'fa-sort',
    	'f0dd'=>'fa-sort-asc',
    	'f0de'=>'fa-sort-desc',
    	'f0e0'=>'fa-envelope',
    	'f0e1'=>'fa-linkedin',
    	'f0e2'=>'fa-undo',
    	'f0e3,a-gavel',
    	'f0e4'=>'fa-tachometer',
    	'f0e5'=>'fa-comment-o',
    	'f0e6'=>'fa-comments-o',
    	'f0e7'=>'fa-bolt',
    	'f0e8'=>'fa-sitemap',
    	'f0e9'=>'fa-umbrella',
    	'f0ea'=>'fa-clipboard',
    	'f0eb'=>'fa-lightbulb-o',
    	'f0ec'=>'fa-exchange',
    	'f0ed'=>'fa-cloud-download',
    	'f0ee'=>'fa-cloud-upload',
    	'f0f0'=>'fa-user-md',
    	'f0f1'=>'fa-stethoscope',
    	'f0f2'=>'fa-suitcase',
    	'f0a2'=>'fa-bell-o',
    	'f0f4'=>'fa-coffee',
    	'f0f5'=>'fa-cutlery',
    	'f0f6'=>'fa-file-text-o',
    	'f0f7'=>'fa-building-o',
    	'f0f8'=>'fa-hospital-o',
    	'f0f9'=>'fa-ambulance',
    	'f0fa'=>'fa-medkit',
    	'f0fb'=>'fa-fighter-jet',
    	'f0fc'=>'fa-beer',
    	'f0fd'=>'fa-h-square',
    	'f0fe'=>'fa-plus-square',
    	'f100'=>'fa-angle-double-left',
    	'f101'=>'fa-angle-double-right',
    	'f102'=>'fa-angle-double-up',
    	'f103'=>'fa-angle-double-down',
    	'f104'=>'fa-angle-left',
    	'f105'=>'fa-angle-right',
    	'f106'=>'fa-angle-up',
    	'f107'=>'fa-angle-down',
    	'f108'=>'fa-desktop',
    	'f109'=>'fa-laptop',
    	'f10a'=>'fa-tablet',
    	'f10b'=>'fa-mobile',
    	'f10c'=>'fa-circle-o',
    	'f10d'=>'fa-quote-left',
    	'f10e'=>'fa-quote-right',
    	'f110'=>'fa-spinner',
    	'f111'=>'fa-circle',
    	'f112'=>'fa-reply',
    	'f113'=>'fa-github-alt',
    	'f114'=>'fa-folder-o',
    	'f115'=>'fa-folder-open-o',
    	'f118'=>'fa-smile-o',
    	'f119'=>'fa-frown-o',
    	'f11a'=>'fa-meh-o',
    	'f11b'=>'fa-gamepad',
    	'f11c'=>'fa-keyboard-o',
    	'f11d'=>'fa-flag-o',
    	'f11e'=>'fa-flag-checkered',
    	'f120'=>'fa-terminal',
    	'f121'=>'fa-code',
    	'f122'=>'fa-reply-all',
    	'f122'=>'fa-mail-reply-all',
    	'f123'=>'fa-star-half-o',
    	'f124'=>'fa-location-arrow',
    	'f125'=>'fa-crop',
    	'f126'=>'fa-code-fork',
    	'f127'=>'fa-chain-broken',
    	'f128'=>'fa-question',
    	'f129'=>'fa-info',
    	'f12a'=>'fa-exclamation',
    	'f12b'=>'fa-superscript',
    	'f12c'=>'fa-subscript',
    	'f12d'=>'fa-eraser',
    	'f12e'=>'fa-puzzle-piece',
    	'f130'=>'fa-microphone',
    	'f131'=>'fa-microphone-slash',
    	'f132'=>'fa-shield',
    	'f133'=>'fa-calendar-o',
    	'f134'=>'fa-fire-extinguisher',
    	'f135'=>'fa-rocket',
    	'f136'=>'fa-maxcdn',
    	'f137'=>'fa-chevron-circle-left',
    	'f138'=>'fa-chevron-circle-right',
    	'f139'=>'fa-chevron-circle-up',
    	'f13a'=>'fa-chevron-circle-down',
    	'f13b'=>'fa-html5',
    	'f13c'=>'fa-css3',
    	'f13d'=>'fa-anchor',
    	'f13e'=>'fa-unlock-alt',
    	'f140'=>'fa-bullseye',
    	'f141'=>'fa-ellipsis-h',
    	'f142'=>'fa-ellipsis-v',
    	'f143'=>'fa-rss-square',
    	'f144'=>'fa-play-circle',
    	'f145'=>'fa-ticket',
    	'f146'=>'fa-minus-square',
    	'f147'=>'fa-minus-square-o',
    	'f148'=>'fa-level-up',
    	'f149'=>'fa-level-down',
    	'f14a'=>'fa-check-square',
    	'f14b'=>'fa-pencil-square',
    	'f14c'=>'fa-external-link-square',
    	'f14d'=>'fa-share-square',
    	'f14e'=>'fa-compass',
    	'f150'=>'fa-caret-square-o-down',
    	'f151'=>'fa-caret-square-o-up',
    	'f152'=>'fa-caret-square-o-right',
    	'f153'=>'fa-eur',
    	'f154'=>'fa-gbp',
    	'f155'=>'fa-usd',
    	'f156'=>'fa-inr',
    	'f157'=>'fa-jpy',
    	'f158'=>'fa-rub',
    	'f159'=>'fa-krw',
    	'f15a'=>'fa-btc',
    	'f15b'=>'fa-file',
    	'f15c'=>'fa-file-text',
    	'f15d'=>'fa-sort-alpha-asc',
    	'f15e'=>'fa-sort-alpha-desc',
    	'f160'=>'fa-sort-amount-asc',
    	'f161'=>'fa-sort-amount-desc',
    	'f162'=>'fa-sort-numeric-asc',
    	'f163'=>'fa-sort-numeric-desc',
    	'f164'=>'fa-thumbs-up',
    	'f165'=>'fa-thumbs-down',
    	'f166'=>'fa-youtube-square',
    	'f167'=>'fa-youtube',
    	'f168'=>'fa-xing',
    	'f169'=>'fa-xing-square',
    	'f16a'=>'fa-youtube-play',
    	'f16b'=>'fa-dropbox',
    	'f16c'=>'fa-stack-overflow',
    	'f16d'=>'fa-instagram',
    	'f16e'=>'fa-flickr',
    	'f170'=>'fa-adn',
    	'f171'=>'fa-bitbucket',
    	'f172'=>'fa-bitbucket-square',
    	'f173'=>'fa-tumblr',
    	'f174'=>'fa-tumblr-square',
    	'f175'=>'fa-long-arrow-down',
    	'f176'=>'fa-long-arrow-up',
    	'f177'=>'fa-long-arrow-left',
    	'f178'=>'fa-long-arrow-right',
    	'f179'=>'fa-apple',
    	'f17a'=>'fa-windows',
    	'f17b'=>'fa-android',
    	'f17c'=>'fa-linux',
    	'f17d'=>'fa-dribbble',
    	'f17e'=>'fa-skype',
    	'f180'=>'fa-foursquare',
    	'f181'=>'fa-trello',
    	'f182'=>'fa-female',
    	'f183'=>'fa-male',
    	'f184'=>'fa-gittip',
    	'f185'=>'fa-sun-o',
    	'f186'=>'fa-moon-o',
    	'f187'=>'fa-archive',
    	'f188'=>'fa-bug',
    	'f189'=>'fa-vk',
    	'f18a'=>'fa-weibo',
    	'f18b'=>'fa-renren',
    	'f18c'=>'fa-pagelines',
    	'f18d'=>'fa-stack-exchange',
    	'f18e'=>'fa-arrow-circle-o-right',
    	'f190'=>'fa-arrow-circle-o-left',
    	'f191'=>'fa-caret-square-o-left',
    	'f192'=>'fa-dot-circle-o',
    	'f193'=>'fa-wheelchair',
    	'f194'=>'fa-vimeo-square',
    	'f195'=>'fa-try');
    $setting = new admin_setting_configselect($name.$categorynumber, $title.$categorynumber, $description.$categorynumber, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    }

    $ADMIN->add('theme_elegantchild', $temp);
