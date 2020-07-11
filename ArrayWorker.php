<?php
class ArrayWorker {
    protected $array = array();
    
    public function __construct()
    {
        $this->fill();
        $this->reindex();
    }

    protected function fill(){
        for($i = 0; $i < 7; $i++){
            $this->array[] = rand(0,100);
        }
    }

    protected function reindex(){
        $temp_max = max($this->array);
        $temp_min = min($this->array);
        $key_min = array_search(min($this->array), $this->array);
        $key_max = array_search(max($this->array), $this->array);
        $this->array[$key_min] = $temp_max;
        $this->array[$key_max] = $temp_min;
    }

    public function dump(){
        return array_search(min($this->array), $this->array)+array_search(max($this->array), $this->array);
    }
}
?>