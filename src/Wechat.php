<?php
namespace Hitomi;

class Wechat{

    static protected $instance = null;

    // 主要配置参数
    protected $appId = '';
    protected $appSecret = '';
    protected $mchId = '';
    protected $key = '';

    // 构造方法
    protected function __construct($options = []){
        foreach ($options as $name => $item) {
            if (property_exists($this, $name)) {
                $this->$name = $item;
            }
        }
    }


    // 单例模式 实例化
    public static function instance($options = []){
        if (is_null(self::$instance)) {
            self::$instance = new static($options);
        }
        return self::$instance;
    }


    public function foo(){
        echo 'test : ' . $this->appId;
    }

    public function getAccessToken(){
        echo 'accessToken';
    }
}