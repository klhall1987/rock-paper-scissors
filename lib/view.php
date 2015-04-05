<?php

class view {

    public $path, $extension;

    function __construct( $path, $extension ) {
        $this->path = $path;
        $this->extension = $extension;
    }

    function output( $file, $data = array() ) {
        $content = file_get_contents( $this->path . $file . $this->extension );

        $content = $this->parse( $content, $data );

        return $content;
    }

    function parse( $content, $data ) {

        foreach( $data as $key => $value )
        {
            $content = str_replace('{' . $key . '}', $value, $content);
        }

        return $content;

    }
}