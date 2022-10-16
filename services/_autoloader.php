<?php

    spl_autoload_register(function ($class) {

        $map = [
            __DIR__ . '/../',
            __DIR__ . '/../services/'
        ];

        foreach ($map as $dir) {
            $file = stream_resolve_include_path($dir . $class .'.php');

            if(is_readable($file)) {
                include_once $file;
                break;
            }
        }
    });