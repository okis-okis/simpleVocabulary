<?php

declare(strict_types = 1);

namespace App\Libs;

use App\Errors\VocabularyNotFoundException;

class ListVocabulary{

    public static function getList(): array{
        $fileName = getcwd().'\App\Libs\vocabulary.json';

        if(!file_exists($fileName)){
            throw new VocabularyNotFoundException();
        }

        $json = file_get_contents($fileName);

        $arr = (json_decode($json, true))['words'];

        return $arr;
    }

    public static function next(){
        $arr = ListVocabulary::getList();

        if(!isset($_SESSION['id'])){
            $_SESSION['id'] = 0;
        }
        if(isset($arr[$_SESSION['id']+1])){
            $_SESSION['id']++;
        }
        return $arr[$_SESSION['id']];
    }

    public static function previous(){
        $arr = ListVocabulary::getList();

        if(!isset($_SESSION['id'])){
            $_SESSION['id'] = 0;
        }
        if($_SESSION['id']-1>=0){
            $_SESSION['id']--;
        }

        return $arr[$_SESSION['id']];
    }

    public static function current(){
        $arr = ListVocabulary::getList();

        if(!isset($_SESSION['id'])){
            $_SESSION['id'] = 0;
        }

        return $arr[$_SESSION['id']];
    }

    public static function check(){
        
    }
}