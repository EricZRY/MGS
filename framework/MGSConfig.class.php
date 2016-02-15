<?php

/**
 * Created by PhpStorm.
 * User: EricZhang
 * Date: 16/2/3
 * Time: 22:18
 */

/**
 * Class MGSConfig
 * 基础配置
 */
class MGSConfig
{
    protected $config_file;
    protected $config = null;

    /**
     * 设置为私有的克隆函数，防止因为使用clone而产生另一个实例
     */
    private function __clone(){}

    protected function __construct($config_file){
        $this->config_file = $config_file;
        $this->init();
    }

    protected function init(){
        $this->config = parse_ini_file($this->config_file,true);
        if(!$this->config){

        }
    }

    protected function throwMGSException($msg,$code){
        throw new MGSConfigException();
    }


}

class MGSConfigException extends Exception{}