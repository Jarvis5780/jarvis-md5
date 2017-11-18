<?php
/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 18/11/2017
 * Time: 21:11
 */

namespace Jarvis\Md5;


/**
 * Class Md5Hasher
 * @package Jarvis\Md5
 */
class Md5Hasher{

    /**
     * @param       $value
     * @param array $option
     * @return string
     */
    public function make($value,$option=[]){
        $salt = isset($option['salt'])?$option['salt']:'';
        return hash('md5',$value.$salt);
    }

    /**
     * @param       $value
     * @param       $hasherValue
     * @param array $option
     * @return bool
     */
    public function  check($value ,$hasherValue,$option=[]){
        $salt = isset($option['salt'])?$option['salt']:'';
        return hash('md5',$value.$salt) === $hasherValue;
    }
}