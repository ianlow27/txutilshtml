<?php
$usage = "
  Usage: php $argv[0] [-h]
Version: v0.0.1-241031
  About: $argv[0] facilitates text processing
 Author: Ian Low | Date: 2024-10-31 | Copyright (c) 2024 Ian Low | Usage Rights: MIT License
Options:
    -h   Display help information including run options
    -n   Create a new instance
";
if(isset($argv[1])){
  if(substr($argv[1],0,2)=="-h"){
    echo $usage;
  }else if(substr($argv[1],0,2)=="-n"){  
    echo "Please enter the following information or press 'Enter' for default...\n";
    echo "Project name (defaults to 'myprojphp'): "; $projname = readline();
    if($projname=="") $projname = "myprojphp";
  }
}
?>