<?php 
/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Developer by : Giacomo Failla - failla.giacomo@gmail.com
*/
Namespace SnappsProject;

class Progressbar {

    private $total;

    public function __construct($total)
    {
        if(!$total) {
            throw new \Exception ('Progressbar error: Total not set');
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
            throw new \Exception ('Progress bar error: Progress is not numeric');
        }
        $this->perc = round(($progress / $this->total) * 100,0);
        $this->bar  = "[" . str_repeat("=", $this->perc);
        $this->bar  = substr($this->bar, 0, strlen($this->bar) - 1) . ">";
        $this->bar .= str_repeat(" ", 100 - $this->perc) . "] - $this->perc% - $progress/$this->total";
        return $this->bar;
    }
    
    public function updateBar($progress)
    {
        printf("%s\r",$this->makeBar($progress));
        if($progress == $this->total) {
            printf("\n");
        }
    }
}
