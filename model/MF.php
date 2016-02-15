<?php

/**
 * Created by PhpStorm.
 * User: EricZhang
 * Date: 16/2/3
 * Time: 21:30
 */
class MF
{
    /**
     * @return ConfigManager
     */
    public static function getConfigInstance(){
        include_once MODEL.'/ConfigManager.class.php';
        if (empty($_ENV[MODEL_CONFIG])){
            $_ENV[MODEL_CONFIG] = new ConfigManager();
        }
        return $_ENV[MODEL_CONFIG];
    }

    /**
     * @return TestManager
     */
    public static function getTestInstance(){
        include MODEL . '/TestManager.class.php';
        if (empty($_ENV[MODEL_TEST])){
            $_eENV[MODEL_TEST] = new TestManager();
        }
        return $_ENV[MODEL_TEST];
    }
}