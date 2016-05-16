# php-terminal-progress-bar
Php - Terminal Progressbar 
Example usage:
<pre>
require_once('Progressbar.php');

$total = 30; //total instrunctions
$bar = new SnappsProject\Progressbar($total);
for ($n=1; $n <= $total; $n++) {
  $bar->updateBar($n);
  usleep(300000); //Emulates workload
}

<pre>
[==============================================================================>                    ] - 80% - 24/30-
