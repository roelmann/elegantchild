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

$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
<h2>ElegantChild Theme</h2>
<p><img class=img-polaroid src="elegantchild/pix/screenshot.jpg" /></p>
</div>
<div class="well">
<h3>About</h3>
<p>ElegantChild is a child theme for Julians Elegance Bootstrap3 based theme</p>
<h3>Theme Credits</h3>
<p>Author: Richard Oelmann, <br />based entirely on work done for the parent theme by Julian (Moodleman) Ridden<br />
Contact: julian@moodleman.net<br />
Website: <a href="http://moodleman.net">www.moodleman.net</a>
</p>
<p>Supportng Author: Bas Brands (for the Bootstrap 3 work)<br />
Contact: bas@sonsbeekmedia.nl<br>
Website: <a href="http://www.basbrands.nl">www.basbrands.nl</a>
</p>
<h3>Donate if you can</h3>
<p>ElegantChild is based on Julians Elegance. Therefore I am maintaining Julians PayPal link - see below.</p>
<p>Elegance, and all my (Julians) themes, will always be free to the Moodle community. However the time it is taking to ceate and maintain these is increasing with every release. If you like this theme and the support I provide in the forums I would like to encourage you to donate with the button below. This is in no way required to use this theme.</p>

<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KNV2ZPHCYTB8E" class="btn btn-lrg btn-info">Donate AUD$15</a>

</div></div>';

$string['pluginname'] = 'elegantchild';
$string['configtitle'] = 'elegantchild';

$string['region-side-middle'] = 'Homepage Middle';
$string['region-hidden-dock'] = 'Admin Only';

$string['reader'] = 'Reader';

$string['mydashboard'] = 'My Dashboard';

$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

$string['frontpagecontent'] = 'Frontpage Content';
$string['frontpagecontentdesc'] = 'This location appears as a higlight under the slideshw on the frontpage';

$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Whatever you add to this textarea will be displayed in the footer throughout your Moodle site.';

$string['invert'] = 'Invert navbar';
$string['invertdesc'] = 'Swaps text and background for the navbar at the top of the page between black and white.';

$string['fluidwidth'] = 'Fluid width theme';
$string['fluidwidth_desc'] = 'Enable this option to allow using your full screen';

$string['fonticons'] = 'Use Icon Font';
$string['fonticonsdesc'] = 'Enable this option to use the Glyphicon Icon Font';

$string['transparency'] = 'Content trasparency';
$string['transparencydesc'] = 'Want to see more of your background show through? This setting changes the transparency of Moodle content and blocks';

$string['region-side-post'] = 'Right';
$string['region-side-pre'] = 'Left';

$string['visibleadminonly'] = 'Blocks moved into the area below will only be seen by admins';

$string['backtotop'] = 'Back to top';
$string['nextsection'] = 'Next Section';
$string['previoussection'] = 'Previous Section';

$string['copyright'] = 'Copyright';
$string['copyrightdesc'] = 'The name of your organisation.';

/* General */
$string['geneicsettings'] = 'General Settings';

$string['tiles'] = 'Tile Course resources';
$string['tilesdesc'] = 'Displayes resources and activities as tiles in a course';

$string['videowidth'] = 'Set Max Video Width';
$string['videowidthdesc'] = 'Tis theme dynamically sizes embedded video. By default they go 100% width. You can override this here.<br>
<strong>Important Note:</strong> Remember to add a % or px after your number or it won\'t work';

$string['bootstrapcdn'] = 'FontAwesome from CDN';
$string['bootstrapcdndesc'] = 'If enabled this will load FontAwesome from the online Bootstrap CDN source. Enable this if you are having issues getting the Font Awesome icons to display in your site.';

$string['alwaysdisplay'] = 'Always Show';
$string['displaybeforelogin'] = 'Show before login only';
$string['displayafterlogin'] = 'Show after login only';
$string['dontdisplay'] = 'Never Show';

/* User Menu */

$string['usermenusettings'] = 'User Menu';
$string['usermenusettingssub'] = 'Options for logged in users';
$string['usermenusettingsdesc'] = 'Determine which links show in the logged in user menu';

$string['enablemy'] = 'My Dashboard';
$string['enablemydesc'] = 'Display a link to the MyMoodle page';

$string['enableprofile'] = 'User Profile';
$string['enableprofiledesc'] = 'Display a link to the users profile';

$string['enableeditprofile'] = 'Edit Profile';
$string['enableeditprofiledesc'] = 'Display a link to edit the users profile';

$string['enablebadges'] = 'Badges';
$string['enablebadgesdesc'] = 'Display a link to the users badges';

$string['enablecalendar'] = 'User Calendar';
$string['enablecalendardesc'] = 'Display a link to the users calendar';

$string['enableprivatefiles'] = 'Private Files';
$string['enableprivatefilesdesc'] = 'Display a link to the users private files';

$string['usermenulinks'] = '# of Custom Links';
$string['usermenulinksdesc'] = 'Set how many extra links you would like to add for your users.<br>You will need to save the settings for the new link options to appear.';

$string['customlinkindicator'] = 'Custom Link Number ';
$string['customlinkindicatordesc'] = 'Set up this custom link';

$string['customlinkicon'] = 'Link Icon';
$string['customlinkicondesc'] = 'Name of the icon you wish to use next to your link.<br> List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';

$string['customlinkname'] = 'Link Name';
$string['customlinknamedesc'] = 'Name shown to users for your link';

$string['customlinkurl'] = 'Link Destination URL';
$string['customlinkurldesc'] = 'The full or relative path for your destination URL.';


/* Colors and Logos */

$string['colorsettings'] = 'Logos & Colors';
$string['colorsettingssub'] = 'Change your look and feel';
$string['colorsettingsdesc'] = 'Upload your logos and change the theme colors with these settings.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Please upload your custom logo here if you want to add it to the header.<br>
As space in the navbar is limited, your logo should be no more than 30px high.';

$string['headerbg'] = 'Header Background';
$string['headerbgdesc'] = 'If you want to replace the standard background you can upload your own here.<br>
Recomended size is 110px high by 1600 wide. The image will tile if smaller.<br>
<strong>Cool Tip</strong>: If your image uses transparency the theme color will show through.';

$string['bodybg'] = 'Background Image';
$string['bodybgdesc'] = 'If you want to replace the standard background you can upload your own here.<br>
<strong>Cool Tip</strong>: You can use this to show through Moodle content using the transparency option below.';

$string['bodycolor'] = 'Background Color';
$string['bodycolordesc'] = 'If no image is uploaded Moodle will then default to this color';

$string['themecolor'] = 'Theme Colour';
$string['themecolordesc'] = 'Set your theme "highlght" color. This is also used for links.';

$string['fontcolor'] = 'Font Colour';
$string['fontcolordesc'] = 'Set the main font color used throughout the site.';

$string['headingcolor'] = 'Heading Colours';
$string['headingcolordesc'] = 'Set the color used for the majority of Headings throughout the site.';

/* Banners */

$string['bannersettings'] = 'Slideshow Settings';
$string['bannersettingssub'] = 'These settings control the slideshow that appears on the Moodle frontpage';
$string['bannersettingsdesc'] = 'Enable and determine settings for each slide below';


$string['bannerindicator'] = 'Slide Number ';
$string['bannerindicatordesc'] = 'Set up this slide';

$string['slidespeed'] = 'Slide Duration ';
$string['slidespeeddesc'] = 'Set how long the slide appears in milliseconds';


$string['slidenumber'] = 'Number of slides ';
$string['slidenumberdesc'] = 'Number of slide options will not change until you hit save after changing this number';

$string['enablebanner'] = 'Enable this Slide';
$string['enablebannerdesc'] = 'Will you be using this slide';

$string['bannertitle'] = 'Slide Title';
$string['bannertitledesc'] = 'Name of this slide';

$string['bannertext'] = 'Slide Text';
$string['bannertextdesc'] = 'Text to display on the slide';

$string['bannerlinktext'] = 'URL Name';
$string['bannerlinktextdesc'] = 'Text to display when showing link';

$string['bannerlinkurl'] = 'URL Address';
$string['bannerlinkurldesc'] = 'Address slide links to';

$string['bannerimage'] = 'Slide Image';
$string['bannerimagedesc'] = 'Large image to go behind the slide text';

$string['bannercolor'] = 'Slide Color';
$string['bannercolordesc'] = 'Don\'t want to use an image? Specify a background color instead';

/* Login Screen */
$string['loginsettings'] = 'Login Screen';
$string['loginsettingssub'] = 'Custom Login Screen Settings';
$string['loginsettingsdesc'] = 'The custom version has a background slideshow you can customise images for as well as a cleaner look.';

$string['enablecustomlogin'] = 'Use Custom Login';
$string['enablecustomlogindesc'] = 'When enabled this will use the theme augmented version of the login screen. Removing the tick wil revert to the Moodle default version.<br>The augmented version allows you to upload backgrund slides to really add pizzaz to your page design.';

$string['loginbgumber'] = 'Background Number';
$string['loginbgumberdesc'] = 'How many backgrounds should revolve when the login page loads';

$string['loginimage'] = 'Background Image';
$string['loginimagedesc'] = 'The ideal size for background images is 1200x800 pixels';

/* Marketing Spots */
$string['marketingheading'] = 'Marketing Spots';
$string['marketinginfodesc'] = 'Enter the settings for your marketing spot.';
$string['marketingheadingsub'] = 'Three locations on the front page to add information and links';
$string['marketingheight'] = 'Height of Marketing Images';
$string['marketingheightdesc'] = 'If you want to display images in the Marketing boxes you can specify their hight here.';
$string['marketingdesc'] = 'This theme provides the option of enabling three "marketing" or "ad" spots just under the slideshow.  These allow you to easily identify core information to your users and provide direct links.';

$string['togglemarketing'] = 'Marketing Spot display';
$string['togglemarketingdesc'] = 'Choose if you wish to hide or show the three Marketing Spots.';

$string['marketingtitleicon'] = 'Heading Icon';
$string['marketingtitleicondesc'] = 'Name of the icon you wish to use in the heading for the marketing spots. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';


$string['marketing1'] = 'Marketing Spot One';
$string['marketing2'] = 'Marketing Spot Two';
$string['marketing3'] = 'Marketing Spot Three';
$string['marketing4'] = 'Marketing Spot Four';

$string['marketingtitle'] = 'Title';
$string['marketingtitledesc'] = 'Title to show in this marketing spot';
$string['marketingicon'] = 'Icon';
$string['marketingicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';
$string['marketingimage'] = 'Image';
$string['marketingimagedesc'] = 'This provides the option of displaying an image above the text in the marketing spot';
$string['marketingcontent'] = 'Content';
$string['marketingcontentdesc'] = 'Content to display in the marketing box. Keep it short and sweet.';
$string['marketingbuttontext'] = 'Link Text';
$string['marketingbuttontextdesc'] = 'Text to appear on the button.';
$string['marketingbuttonurl'] = 'Link URL';
$string['marketingbuttonurldesc'] = 'URL the button will point to.';


/* Quick Links */
$string['quicklinksheading'] = 'Quick links';
$string['quicklinksheadingdesc'] = 'Enter the settings for your front page Quick Links';
$string['quicklinksheadingsub'] = 'Locations on the front page to add information and links';
$string['quicklinksdesc'] = 'This theme provides the option of enabling "Quick Link" spots.  These allow you to create locations that link to any URL of your choice.';

$string['togglequicklinks'] = 'Quick Links display';
$string['togglequicklinksdesc'] = 'Choose if you wish to hide or show the Quick Links area';

$string['quicklinksicon'] = 'Heading Icon';
$string['quicklinksicondesc'] = 'Name of the icon you wish to use in the heading for the Quick Links spots. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';

$string['quicklinks'] = 'Quick Link Number ';

$string['quicklinksnumber'] = 'Number of Links';
$string['quicklinksnumberdesc'] = 'How many quick links to you want to display on the front page.';

$string['quicklinkstitle'] = 'Area heading';
$string['quicklinkstitledesc'] = 'The name associated with the Quick Links area on the front page.';

$string['quicklinkicon'] = 'Icon';
$string['quicklinkicondesc'] = 'Name of the icon you wish to use. List is <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet/" target="_new">here</a>.  Just enter what is after the "fa-".';
$string['quicklinkiconcolor'] = 'Quick Link Color';
$string['quicklinkiconcolordesc'] = 'Background color behind the Quick Link icon';
$string['quicklinkbuttontext'] = 'Link Text';
$string['quicklinkbuttontextdesc'] = 'Text to appear on the button.';
$string['quicklinkbuttoncolor'] = 'Button Color';
$string['quicklinkbuttoncolordesc'] = 'Quick Link Button color';
$string['quicklinkbuttonurl'] = 'Link URL';
$string['quicklinkbuttonurldesc'] = 'URL the button will point to.';


/* Social Networks */
$string['socialheading'] = 'Social Networking';
$string['socialheadingsub'] = 'Engage your users with Social Networking';
$string['socialdesc'] = 'Provide direct links to the core social networks that promote your brand.  These will appear in the header of every page.';
$string['socialnetworks'] = 'Social Networks';

$string['facebook'] = 'Facebook URL';
$string['facebookdesc'] = 'Enter the URL of your Facebook page. (i.e http://www.facebook.com/pukunui)';

$string['twitter'] = 'Twitter URL';
$string['twitterdesc'] = 'Enter the URL of your Twitter feed. (i.e http://www.twitter.com/pukunui)';

$string['googleplus'] = 'Google+ URL';
$string['googleplusdesc'] = 'Enter the URL of your Google+ profile. (i.e https://google.com/+Pukunui/)';

$string['linkedin'] = 'LinkedIn URL';
$string['linkedindesc'] = 'Enter the URL of your LinkedIn profile. (i.e http://www.linkedin.com/company/pukunui-technology)';

$string['youtube'] = 'YouTube URL';
$string['youtubedesc'] = 'Enter the URL of your YouTube channel. (i.e http://www.youtube.com/moodleman)';

$string['tumblr'] = 'Tumblr URL';
$string['tumblrdesc'] = 'Enter the URL of your Tumblr. (i.e http://moodleman.tumblr.com)';

$string['vimeo'] = 'Vimeo URL';
$string['vimeodesc'] = 'Enter the URL of your Vimeo channel. (i.e http://vimeo.com/moodleman)';

$string['flickr'] = 'Flickr URL';
$string['flickrdesc'] = 'Enter the URL of your Flickr page. (i.e http://www.flickr.com/mycollege)';

$string['vk'] = 'VKontakte URL';
$string['vkdesc'] = 'Enter the URL of your Vkontakte page. (i.e http://www.vk.com/mycollege)';

$string['skype'] = 'Skype Account';
$string['skypedesc'] = 'Enter the Skype username of your organisations Skype account';

$string['pinterest'] = 'Pinterest URL';
$string['pinterestdesc'] = 'Enter the URL of your Pinterest page. (i.e http://pinterest.com/mycollege)';

$string['instagram'] = 'Instagram URL';
$string['instagramdesc'] = 'Enter the URL of your Instagram page. (i.e http://instagram.com/mycollege)';

$string['website'] = 'Website URL';
$string['websitedesc'] = 'Enter the URL of your own website. (i.e http://www.pukunui.com)';

$string['blog'] = 'Blog URL';
$string['blogdesc'] = 'Enter the URL of your institution blog. (i.e http://www.moodleman.net)';


/* Category Icons */
$string['categoryiconheading'] = 'Category Icons';
$string['categoryiconheadingsub'] = 'Use icons to represent your categories';
$string['categoryicondesc'] = 'If enabled this will allow you to set icons for each category of course.';


$string['categorynumber'] = 'Number of Categories ';
$string['categorynumberdesc'] = 'Number of category icons will not change until you hit save after changing this number';

$string['defaultcategoryicon'] = 'Default Category Icons';
$string['defaultcategoryicondesc'] = 'Set a default category icon';

$string['categoryiconinfo'] = 'Set Custom Category Icons';
$string['categoryiconinfodesc'] = 'Each icon is set by "category ID". You get these by looking at the URL or each category.';

$string['enablecategoryicon'] = 'Turn on icons';
$string['enablecategoryicondesc'] = 'If ticked this will enable the category icon funcionality.';

$string['categoryicon'] = 'Category';
$string['categoryicondesc'] = 'categoryid=';

$string['subtitle'] = 'Subtitle';
$string['subtitle_desc'] = 'Optionally select a subtitle for the Moodle homepage';

/* Social Networks Icon Descriptions */
$string['socialnetworksicondescriptionblog'] = 'Read our Blog';
$string['socialnetworksicondescriptionwebsite'] = 'Visit our Website';
$string['socialnetworksicondescriptiongoogleplus'] = 'Follow us on Google Plus';
$string['socialnetworksicondescriptiontwitter'] = 'Follow us on Twitter';
$string['socialnetworksicondescriptionfacebook'] = 'Like us on Facebook';
$string['socialnetworksicondescriptionlinkedin'] = 'Connect with us on LinkedIn';
$string['socialnetworksicondescriptionyoutube'] = 'Watch us on Youtube';
$string['socialnetworksicondescriptionvimeo'] = 'Watch us on Vimeo';
$string['socialnetworksicondescriptionflickr'] = 'View us on Flickr';
$string['socialnetworksicondescriptionpinterest'] = 'Pin us on Pinterest';
$string['socialnetworksicondescriptiontumblr'] = 'Find us on Tumblr';
$string['socialnetworksicondescriptioninstagram'] = 'Find us on Instagram';
$string['socialnetworksicondescriptionvk'] = 'Like us on VK';
$string['socialnetworksicondescriptionskype'] = 'Call us on Skype';
