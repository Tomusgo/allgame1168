<?php
namespace App;

class SiteConfig {

    private static $config = null;

    public static function getInstance() {
        if(is_null(self::$config)) {
            $raw = '{}';
            try {
                $raw = file_get_contents(__DIR__.'/../storage/app/site_config.json');
            } catch (\Throwable $th) {
            }
            self::$config = json_decode($raw, JSON_OBJECT_AS_ARRAY);
        }
    }

    public static function fetch_data() {
        $data = null;
        $url = env('FETCH_DATA_URL', null);

        if (! is_null($url)) {
            $data = file_get_contents($url);
            file_put_contents(__DIR__.'/../storage/app/site_config.json', $data);
        }
        return $data;
    }

    public static function config($key = null, $value = null) {
        self::getInstance();
        
        if(! is_null($key)) {
            if(isset(self::$config[$key])) {
                if (is_null(self::$config[$key]) && ! is_null($value)) {
                    return $value;
                }
                return self::$config[$key];
            } else {
                if (! is_null($value)) {
                    return $value;
                }
                return null;
            }
        }
        return self::$config;
    }
}