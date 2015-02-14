# php-terminal-progress-bar
Php - Terminal Progressbar 

Example usage:
<pre>
<?php
//Require File
require('Progressbar.php');
//Example 
$total = 30; //total instrunctions
$bar = new Progressbar($total);
for ($n=1; $n <= $total; $n++) {
  $bar->updateBar($n);    
  usleep(300000); //Emulates workload
}

<pre>

