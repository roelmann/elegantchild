<?php
// This file is part of the custom Moodle elegance theme
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
 * Renderers to align Moodle's HTML with that expected by elegance
 *
 * @package    theme_elegance
 * @copyright  2014 Julian Ridden http://moodleman.net
 * @authors    Julian Ridden -  Bootstrap 3 work by Bas Brands, David Scotson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
$THEME->doctype = 'html5';
$THEME->yuicssmodules = array();
$THEME->name = 'elegantchild';
$THEME->parents = array('elegance');

$THEME->sheets = array('core');

$THEME->supportscssoptimisation = false;

$THEME->editor_sheets = array('editor');

$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->csspostprocess = 'theme_elegance_process_css';

$THEME->javascripts = array(
);
$THEME->javascripts_footer = array(
    'bootstrap3',
);

if (core_useragent::is_ie() && !core_useragent::check_ie_version('9.0')) {
    $THEME->javascripts[] = 'html5shiv';
}

$THEME->hidefromselector = false;

$THEME->blockrtlmanipulations = array(
    'side-pre' => 'side-post',
    'side-post' => 'side-pre'
);
