<?php

/**
 * Created by PhpStorm.
 * User: student
 * Date: 29.10.16
 * Time: 15:54
 */
namespace common\components;

class DbHelperComponents
{
    public function getPol($a){
        $b = array(1 => 'Бала',
            2=>'Кыз');
        return $b[$a];
    }
    public function getPols(){
        $b = array(1 => 'Бала',
            2=>'Кыз');
        return $b;
    }
    public  function getStatusHelps(){
        $b = [0 =>'Жардам алына элек', 1=>'Жардам алынды'];
        return $b;
    }
}