<?php
	$dir = '../../.';
	$myFiles = scandir($dir);

	$directory = array(
		"LEARNING" => [],
		"PROJECTS" => [],
		"SCHOOL" => []
	);
	$learning = [];
	$projects = [];
	$school = [];

	// Create the base Learning array
	$learningDir = '../../LEARNING';
	$learningFiles = scandir($learningDir);
	$learning = $learningFiles;

	/* 
		Below we are going to:
			a) Reverse the array to get the . and .. directories to the end.
			b) Run through a for loop twice to remove the . and .. directories from the end.
			c) Reverse the smaller array to get the directories back into the correct order.
	*/

	// a.
	$learning = array_reverse($learning);

	// b.
	for($i = 0; $i < 2; $i++) {
		$learningExtra = array_pop($learning);
	}

	// c.
	$learning = array_reverse($learning);

	// Iterate thhrough the LEARNING array and add each item to the 2-D array where first level is LEARNING
	foreach($learning as $file) {
		$directory["LEARNING"][] = $file;
	}

	// Create the base Projects array
	$projectsDir = '../../PROJECTS';
	$projectFiles = scandir($projectsDir);
	$projects = $projectFiles;

	// a.
	$projects = array_reverse($projects);

	// b.
	for($i = 0; $i < 3; $i++) {
		$projectExtra = array_pop($projects);
	}

	// c.
	$projects = array_reverse($projects);

	// Iterate thhrough the PROJECTS array and add each item to the 2-D array where first level is PROJECTS
	foreach($projects as $file) {
		$directory["PROJECTS"][] = $file;
	}

	// Create the base School array
	$schoolDir = '../../SCHOOL';
	$schoolFiles = scandir($schoolDir);
	$school = $schoolFiles;

	// a.
	$school = array_reverse($school);

	//b.
	for($i = 0; $i < 3; $i++) {
		$schoolExtra = array_pop($school);
	}

	// c.
	$school = array_reverse($school);

	// Iterate thhrough the SCHOOL array and add each item to the 2-D array where first level is SCHOOL
	foreach($school as $file) {
		$directory["SCHOOL"][] = $file;
	}

	$directory = json_encode($directory);

	print_r($directory);

?>