<?php
////////////////////////////////////////////////////////////////////////////////
//   Copyright (C) ReloadCMS Development Team                                 //
//   http://reloadcms.com                                                     //
//   This product released under GNU General Public License v2                //
////////////////////////////////////////////////////////////////////////////////
$MODULES[$category][0] = __('Forum');
if($system->checkForRight('GENERAL') || $system->checkForRight('FORUM')) {
    $MODULES[$category][1] = __('Forum');
}
?>