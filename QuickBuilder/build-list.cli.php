#!/usr/bin/php
<?php

function make_base_dir($srcfile,$category) {
	$fp=file($srcfile);
	foreach ($fp as $item) {
	    $item=trim($item);
	    if (!empty($item)){
				// if category empty then mkdir for each item
				if ($category=="") {
				} else {
					// make item dir
					list($title,$version,$url)=explode('|', $item);
					$cmd="echo '$title $version' >> src/software.list.txt";
					system($cmd); 	
				}
	    }
	}
}


//create program in base dir
$cmd="echo '== Development ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.development.list.txt","development");

$cmd="echo '== Education ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.education.list.txt","education");

$cmd="echo '== Game ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.game.list.txt","game");

$cmd="echo '== Graphics ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.graphics.list.txt","graphics");

$cmd="echo '== Internet ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.internet.list.txt","internet");

$cmd="echo '== Multimedia ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.multimedia.list.txt","multimedia");

$cmd="echo '== Office ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.office.list.txt","office");

$cmd="echo '== Tool ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.tools.list.txt","tools");

$cmd="echo '== Web Application ==' >> src/software.list.txt";
system($cmd);
make_base_dir("src.web.list.txt","web");

?>
