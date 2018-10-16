<?php
	$dir = '../../.';
	$myFiles = scandir($dir);

	$list = [];
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

    $list = array_merge($learning, $projects, $school);
	$list = json_encode($list);

	print_r($list);

?>