<?php
namespace Demo;

class Config
{
    private static $instance;
    private $settings;
    
    private function __construct()
    {
        $this->settings = array();
    }
    
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Config;
        }
        return self::$instance;
    }

    public function get($key)
    {
        if (array_key_exists($key, $this->settings)) {
            return $this->settings[$key];
        }
        return null;
    }

    public function set($key, $value)
    {
        $this->settings[$key] = $value;
    }

    public function clear()
    {
        $this->settings = array();
    }
}
