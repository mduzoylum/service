<?php

class AutoLoader
{
    public function include($yol="/"){
        $dosyalar = opendir($yol);
        while ($dosya = readdir($dosyalar)) {
            $search_word = preg_match("/$dosya/i", ".php");
            if ($dosya =='.' || $dosya == '..') {
                continue;
            } else {
                @include_once $yol . "/" . $dosya;
            }
        }
        closedir($dosyalar);
    }
}