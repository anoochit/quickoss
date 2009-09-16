#!/usr/bin/php
<?php

$cmd="mkisofs -o release/quickpc_v".date(ym.d").iso -graft-points -rational-rock -full-iso9660-filenames -iso-level 2 -r -J 
src/";
system($cmd); 	

?>
