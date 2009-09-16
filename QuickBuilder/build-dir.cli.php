#!/usr/bin/php
<?php

function make_base_dir($srcfile,$category) {
	$fp=file($srcfile);
	foreach ($fp as $item) {
	    $item=trim($item);
	    if (!empty($item)){
				// if category empty then mkdir for each item
				if ($category=="") {
					mkdir("src/".$item,0777);
					echo "mkdir src/".$item."\n";
				} else {
					// make item dir
					list($title,$version,$url)=explode('|', $item);
					mkdir("src/".$category."/".strtolower($title),0777);
					echo "mkdir src/".$category."/".strtolower($title)."\n";		
					$cmd="echo '$title $version' >> src/software.list.txt";
					system($cmd); 	
					//$cmd="wget -b ".$url." -O src/".$category."/".$title."/".strtolower($title)."-".$version."-setup.exe";
			    	//system($cmd);   								
				}
	    }
	}
}

// create src dir
mkdir("src",0777);

// create base category
make_base_dir("src.category.list.txt","");

//create program in base dir
make_base_dir("src.development.list.txt","development");
make_base_dir("src.education.list.txt","education");
make_base_dir("src.game.list.txt","game");
make_base_dir("src.graphics.list.txt","graphics");
make_base_dir("src.internet.list.txt","internet");
make_base_dir("src.multimedia.list.txt","multimedia");
make_base_dir("src.office.list.txt","office");
make_base_dir("src.tools.list.txt","tools");
make_base_dir("src.web.list.txt","web");

?>
