<?php
//
//
//This program is free software; you can redistribute it and/or
//modify it under the terms of the GNU General Public License
//as published by the Free Software Foundation; either version 2
//of the License, or (at your option) any later version.
//
//This program is distributed in the hope that it will be useful,
//but WITHOUT ANY WARRANTY; without even the implied warranty of
//MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//GNU General Public License for more details.

// check to see if user has automatic updates enabled
$cm =& cronmanager::create($db);
$online_updates = $cm->updates_enabled() ? true : false;

// check if new version of module is available
if ($online_updates && $foo = uribook_vercheck()) {
	print "<br>A <b>new version</b> of this module is available from the <a target='_blank' href='http://github.com/reconwireless/FreePBX-URI-Phonebook/downloads'>Reconnaissance Communications</a><br>";
}

//tts_findengines()
if(count($_POST)){
	uribookoptions_saveconfig();
}
	$date = uribookoptions_getconfig();
	$selected = ($date[0]);

//  Get current featurecode from FreePBX registry
$fcc = new featurecode('uribook', 'uribook');
$featurecode = $fcc->getCodeActive(); 

?>
<form method="POST" action="">
	<br><h2><?php echo _("URI Book")?><hr></h5></td></tr>
Allows you to easily add SIP URI extensions, temporarily limited to vuc.me sip uri <b><?PHP print $featurecode; ?></b>.  This value can be changed in Feature Codes. <br>

<br><h5>User Data:<hr></h5>
Select the extension you wish the URI Phonebook program to use.<br>The module does not check to see if the selected Extension is being used, ensure to choose an extension not being used on the system.<br><br>
<a href="#" class="info">Choose a service and extension:<span>Choose from the list of extensions and SIP URIs </span></a>

<select size="1" name="engine">
<?php
echo "<option".(($date[0]=='1200-vucme')?' selected':'').">noaa-flite</option>\n";
echo "<option".(($date[0]=='882-vucme')?' selected':'').">noaa-swift</option>\n";
?>
</select>
<br><br>key:<br>
<b>882</b> - 882 spells vuc on the keypad <br>
<b>1200</b> - 1200 is the the eastern time of the vuc every Friday<br>

		
<br><br><input type="submit" value="Submit" name="B1"><br>

<center><br>
The module is a personal attempt at building an easy way to enter SIP URI extensions  Support, documentation and current versions are available at the URI Phonebook module <a target="_blank" href="https://github.com/reconwireless/FreePBX-URI-Phonebook">reconwireless dev site</a></center>
<?php


?>