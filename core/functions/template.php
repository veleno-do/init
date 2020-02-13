<?php

class Template{

    public static function load( $tpl_file_path ){
        extract( ( array )$this );

        include( $tpl_file_path );
    }
}