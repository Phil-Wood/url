<?php
namespace App\Core;

class Helper {

    public static function raw($data){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}