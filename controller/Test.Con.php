<?php

/**
 * Created by PhpStorm.
 * User: EricZhang
 * Date: 16/2/9
 * Time: 11:37
 */
class Test
{
    public function testFunc()
    {
        $testMgr = MF::getTestInstance();
        $testMgr->test();
    }
}