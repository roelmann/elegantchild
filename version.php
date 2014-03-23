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
 * elegantchild theme with the underlying Bootstrap theme.
 *
 * @package    theme
 * @subpackage elegantchild
 * @author     Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Barnard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2014032200;
$plugin->release = '1.0 (Build: 20140322)';
$plugin->maturity = MATURITY_BETA;             // this version's maturity level.
$plugin->requires  = 2013110500;
$plugin->component = 'theme_elegantchild';
$plugin->dependencies = array(
    'theme_bootstrapbase'  => 2013110500,
    'theme-elegance' => 2014011600,
);
