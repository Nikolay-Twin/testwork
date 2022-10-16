<?php
namespace config;

/**
 * Class Main
 * @package config
 */
class Main
{
    const DEV_MODE = true;

    /**
     * @return array
     */
    public function dbParams()
    {
        if(self::DEV_MODE){
            return [
                'dsn'    => 'mysql:dbname=test;host=localhost',
                'opt'    => [],
                'user'   => 'root',
                'pass'   => '',
                'debug'  => true,
            ];
        }
        return [
            'dsn'    => 'mysql:dbname=host=',
            'opt'    => [],
            'user'   => '',
            'pass'   => '',
            'debug'  => false,
        ];
    }

    /**
     * @return string[]
     */
    public function tplParams()
    {
        return [
            'dir' => __DIR__ .'/../app/views',
            'php' => false
        ];
    }

    /**
     * @return string[]
     */
    public function migrateParams()
    {  
        return [
            'dir' => dirname(__DIR__, 2)
            . '/ApiManager/migrations/',
            'namespace' => 'Bot\Migrations',
        ];
    }
}
