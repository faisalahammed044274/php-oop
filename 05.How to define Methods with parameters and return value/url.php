<?php

class Url{
    function openUrl($url){
        header("Location:$url");
    }
}

$url1 = new Url();
$url1->openUrl("https://www.google.com");