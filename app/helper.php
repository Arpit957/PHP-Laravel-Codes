<?php


//important functions

 if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
 }

if(!function_exists('get_formatted_date')){
    function get_formatted_date($date){
        return date('d-m-Y',strtotime($date));
    }
}