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
 * This filter provides automatic linking to database activity entries
 * when found inside every Moodle text.
 *
 * @package    filter
 * @subpackage data
 * @copyright  2006 Vy-Shane Sin Fat
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Database activity filtering
 */
class filter_data extends moodle_text_filter {

    public function filter($text, array $options = array()) {
        global $CFG, $DB;


        return filter_phrases($text, $contentlist);  // Look for all these links in the text
    }
}
