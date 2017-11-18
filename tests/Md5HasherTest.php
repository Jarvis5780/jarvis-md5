<?php

/**
 * Created by PhpStorm.
 * User: jarvis
 * Date: 18/11/2017
 * Time: 23:52
 */
use PHPUnit\Framework\TestCase;
use Jarvis\Md5\Md5Hasher;

class Md5HasherTest extends TestCase
{
    protected $hash;

    public function setUp(){
        $this->hash = new Md5Hasher();
    }

    public function testMd5HasherMake(){
        $str = 123456;
        $passwd = md5($str);
        $newPasswd = $this->hash->make($str);

        $this->assertEquals($passwd,$newPasswd);

    }
}