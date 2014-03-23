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
 * elegantchild theme for the underlying Elegance theme.
 *
 * @package    theme
 * @subpackage elegantchild
 * @author	   Richard Oelmann
 * @author     from Elegance by Julian (@moodleman) Ridden
 * @author     Based on code originally written by G J Barnard, Mary Evans, Bas Brands, Stuart Lamour and David Scotson.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */

function theme_elegantchild_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('elegantchild');
        if ($filearea === 'logo') {
            return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
        } else if ($filearea === 'headerbg') {
            return $theme->setting_file_serve('headerbg', $args, $forcedownload, $options);
        } else if ($filearea === 'bodybg') {
            return $theme->setting_file_serve('bodybg', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage1') {
            return $theme->setting_file_serve('bannerimage1', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage2') {
            return $theme->setting_file_serve('bannerimage2', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage3') {
            return $theme->setting_file_serve('bannerimage3', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage4') {
            return $theme->setting_file_serve('bannerimage4', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage5') {
            return $theme->setting_file_serve('bannerimage5', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage6') {
            return $theme->setting_file_serve('bannerimage6', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage7') {
            return $theme->setting_file_serve('bannerimage7', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage8') {
            return $theme->setting_file_serve('bannerimage8', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage9') {
            return $theme->setting_file_serve('bannerimage9', $args, $forcedownload, $options);
        } else if ($filearea === 'bannerimage10') {
            return $theme->setting_file_serve('bannerimage10', $args, $forcedownload, $options);
        } else if ($filearea === 'loginimage1') {
            return $theme->setting_file_serve('loginimage1', $args, $forcedownload, $options);
        } else if ($filearea === 'loginimage2') {
            return $theme->setting_file_serve('loginimage2', $args, $forcedownload, $options);
        } else if ($filearea === 'loginimage3') {
            return $theme->setting_file_serve('loginimage3', $args, $forcedownload, $options);
        } else if ($filearea === 'loginimage4') {
            return $theme->setting_file_serve('loginimage4', $args, $forcedownload, $options);
        } else if ($filearea === 'loginimage5') {
            return $theme->setting_file_serve('loginimage5', $args, $forcedownload, $options);
        } else {
            send_file_not_found();
        }
    } else {
        send_file_not_found();
    }
}

function theme_elegantchild_page_init(moodle_page $page) {
    $page->requires->jquery();
    $page->requires->jquery_plugin('bootstrap', 'theme_elegance');
    $page->requires->jquery_plugin('fitvids', 'theme_elegance');
    $page->requires->jquery_plugin('nprogress', 'theme_elegance');
    $page->requires->jquery_plugin('unslider', 'theme_elegance');
    $page->requires->jquery_plugin('eventswipe', 'theme_elegance');
    $page->requires->jquery_plugin('alert', 'theme_elegance');
    $page->requires->jquery_plugin('backstretch', 'theme_elegance');
    $page->requires->jquery_plugin('carousel', 'theme_elegance');
    $page->requires->jquery_plugin('collapse', 'theme_elegance');
    $page->requires->jquery_plugin('modal', 'theme_elegance');
    $page->requires->jquery_plugin('scrollspy', 'theme_elegance');
    $page->requires->jquery_plugin('tab', 'theme_elegance');
    $page->requires->jquery_plugin('tooltip', 'theme_elegance');
    $page->requires->jquery_plugin('transition', 'theme_elegance');
    $page->requires->jquery_plugin('modernizr', 'theme_elegance');
}
