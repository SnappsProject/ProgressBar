<?php 
class Progressbar {

    public function __construct($total)
    {
        if(!$total){
            throw new Exception ('Progressbar error: Total not set');
        }
        $this->total = $total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getTotal()
    {
        return $this->total;
    }

    private function makeBar($progress)
    {
        if(!is_numeric($progress)) {
            throw new Exception ('Progress bar error: Progress is not numeric');
        }
        $this->perc = ($progress / $this->total) * 100;
        $this->_viewperc = round($this->perc,0);
        $this->bar  = "[" . str_repeat("=", $this->perc);
        $this->bar  = substr($this->bar, 0, strlen($this->bar) - 1) . ">";
        $this->bar .= str_repeat(" ", 100 - $this->perc) . "] - $this->_viewperc% - $progress/$this->total-";
        return $this->bar;

    }

    public function updateBar($progress)
    {
        printf("%s\r",$this->makeBar($progress));
    }
}
