# SnappsProject/Progressbar
PHP-CLI - Progressbar

Example usage:
<pre>

require_once('Progressbar.php');

$total = 30;
$bar = new SnappsProject\Progressbar($total);
for ($n=1; $n <= $total; $n++) {
  $bar->updateBar($n);
  usleep(300000); //Emulates workload
}
</pre>
[==============================================================================>                    ] - 80% - 24/30
