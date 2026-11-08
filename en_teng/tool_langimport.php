<?php
// This file is part of Moodle - http://moodle.org/.
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
//
// Strings for language 'en_teng'.
defined('MOODLE_INTERNAL') || die();
$string['downloadnotavailable'] = '                          <a href="{$a->src}">{$a->src}</a>         <code>{$a->dest}</code>';
$string['install'] = '   ';
$string['installfailed'] = '   ';
$string['installfinished'] = '   ';
$string['installpending'] = '        {$a}.';
$string['installscheduled'] = '    ';
$string['installedlangs'] = '  ';
$string['langimport'] = '  ';
$string['langimportdisabled'] = '                            ';
$string['langpackinstalled'] = '  \'{$a}\'   ';
$string['langpackinstalledevent'] = '  ';
$string['langpackremoved'] = '  \'{$a}\'  ';
$string['langpacknotremoved'] = '      \'{$a}\'        ';
$string['langpackremovedevent'] = '  ';
$string['langpackupdateskipped'] = '  \'{$a}\'   ';
$string['langpackuptodate'] = '  \'{$a}\'  ';
$string['langpackupdated'] = '  \'{$a}\'   ';
$string['langpackupdatedevent'] = '  ';
$string['langunsupported'] = '<p>          </p><ul>{$a->missinglocales}</ul><p>    {$a->globallocale}            </p>';
$string['langupdatecomplete'] = '   ';
$string['missingcfglangotherroot'] = '   $CFG->langotherroot';
$string['missinglangparent'] = '   <em>{$a->parent}</em>  <em>{$a->lang}</em>.';
$string['noenglishuninstalltitle'] = '  ';
$string['noenglishuninstall'] = '      ';
$string['nolangupdateneeded'] = '           ';
$string['pluginname'] = ' ';
$string['purgestringcaches'] = '  ';
$string['search'] = '   ';
$string['selectlangs'] = '   ';
$string['uninstall'] = '   ';
$string['uninstallconfirm'] = '         <strong>{$a}</strong>   ';
$string['updatelangs'] = '    ';
$string['updatelangsnote'] = '                            \'{$a->taskname}\'      ';
$string['privacy:metadata'] = '         ';
// Keep these instructions in Latin script so they are readable before the font is installed.
$string['readme'] = 'This language pack writes Moodle\'s English interface in Tolkien\'s Tengwar script. It uses Private Use Area characters and needs the **FreeMonoTengwar** font to display them.

Complete the font setup before selecting English (Tengwar) as your preferred language.

1. Download and extract [FreeMonoTengwar](https://freetengwar.sourceforge.net/freemonotengwar.html), then copy `FreeMonoTengwar.ttf` into `$CFG->dataroot/fonts/` (create the folder if needed)
2. In "Site administration" > "Appearance" > "Themes" > "Boost" > "Advanced settings" > "Raw SCSS", add:
    ```scss
    @font-face {
        font-family: "FreeMonoTengwar";
        src: url("[[font:core|FreeMonoTengwar.ttf]]") format("truetype");
        font-display: swap;
    }

    body.lang-en_teng {
        --mds-font-family-base: "FreeMonoTengwar", sans-serif;
        --bs-font-sans-serif: "FreeMonoTengwar", sans-serif;
        --bs-body-font-family: "FreeMonoTengwar", sans-serif;
        font-family: "FreeMonoTengwar", sans-serif;
    }
    ```
3. Go to "Site administration" > "Development" > "Purge caches", then select "English (Tengwar)" under "Preferences" > "Preferred language"

With this setup, Moodle sends the font to visitors\' browsers automatically.

If you need English back, add `?lang=en` to your Moodle home URL.

**Firefox tab titles**

Firefox uses its own fonts for tab titles, so those can still show missing-glyph boxes even when the Moodle page displays correctly. There is an optional browser configuration for each user in the [Firefox tab title instructions](https://github.com/cameron1729/moodle-en_teng#firefox-tab-titles).

See the [language pack repository](https://github.com/cameron1729/moodle-en_teng) for the full setup instructions and background.';
