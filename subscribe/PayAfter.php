<?php
/**
 * @author liaosp.top
 * @Time: 2018/11/12 -10:46
 * @Version 1.0
 * @Describe:
 * 1:
 * 2:
 * ...
 */
class PayAfter{
    private $objs = array();

    function addObj($obj){
        $this->objs[] = $obj;
    }
    function notice($data){
        foreach ($this->objs as $obj){
            $obj->notice($data);
        }
    }
}