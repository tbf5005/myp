<?php

function baseUrl(){
    return $_SERVER['CONTEXT_PREFIX'] ;
}

function controllerUrl(){
    return baseUrl() . '/app/Controllers/' ;
}