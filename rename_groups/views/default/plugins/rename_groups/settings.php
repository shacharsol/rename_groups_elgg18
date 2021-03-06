<?php
// read the languages directory to get a list of existing translations
global $CONFIG;

$language_location = $CONFIG->pluginspath . "rename_groups/languages/";

if($handle = opendir($language_location)) {

	$translations = array();
		while (false !== ($file = readdir($handle))) {
			if ($file != "." && $file != "..") {
				$translations[] = basename($file, '.php');
			}
		}
		closedir($handle);
}

if(count($translations) == 0){
	echo "<h1>" . elgg_echo('rename_groups:missing:language:file') . "</h1>";
}
else{
	echo "<h1>" . elgg_echo('rename_groups:settings') . "</h1>";
	
	for($i=0; $i<count($translations); $i++){
		
		$singular = elgg_get_plugin_setting($translations[$i].'singular');
		$plural = elgg_get_plugin_setting($translations[$i].'plural');
		
		//set defaults if nothing has been set yet
		if(empty($singular)){ $singular = elgg_echo('groups:group'); }
		if(empty($plural)){ $plural = elgg_echo('groups'); }
		
		$language = elgg_echo('rename_groups:language');
		$html = "<div class=\"rename_groups_language_edit\"><br/>";
		$html .= "$language: <b>{$translations[$i]}</b>";
		$html .= "<table><tr><td>&nbsp;</td></tr><tr><td>";
		$html .= "<label>" . elgg_echo('rename_groups:singular') . ":&nbsp;&nbsp;</label>";
		$html .= "</td><td>";
		$html .= elgg_view('input/text', array('name' => "params[" . $translations[$i].'singular' . "]", 'value' => $singular)) . "<br>";
		$html .= "</td></tr><tr><td>";
		$html .= "<label>" . elgg_echo('rename_groups:plural') . ": </label>";
		$html .= "</td><td>";
		$html .= elgg_view('input/text', array('name' => "params[" . $translations[$i].'plural' . "]", 'value' => $plural)) . "<br>";
		$html .= "</td></tr></table>";
		$html .= "</div>";
		echo $html;
	}
}
?>