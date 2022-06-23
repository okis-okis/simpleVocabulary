<?php

declare(strict_types = 1);

namespace App\Controllers;

require_once 'App/View.php';
require_once 'App/Libs/List.php';

use App\View;
use App\Libs\ListVocabulary;

class Main{

    public function index(){
        $_SESSION['id'] = 0;
        return View::make('index', [ListVocabulary::getList()])->render();
    }

    public function about(){
        return View::make('about')->render();
    }

    public function randomTests(){
        return View::make('randomTests')->render();
    }

    public function orderTests(){

        if(isset($_POST['next'])){
            unset($_POST);
            return View::make('orderTests', ListVocabulary::next())->render();
        }
        elseif(isset($_POST['previous'])){
            unset($_POST);
            return View::make('orderTests', ListVocabulary::previous())->render();
        }
        elseif(isset($_POST['check'])){
            $arr = ListVocabulary::current();
            if(strtolower($_POST['verb']) == $arr['verb']){
                $arr['verbResult'] = 'is-valid'; 
            }
            else{
                $arr['verbResult'] = 'is-invalid'; 
            }

            if(strtolower($_POST['simple']) == $arr['simple']){
                $arr['simpleResult'] = 'is-valid'; 
            }
            else{
                $arr['simpleResult'] = 'is-invalid'; 
            }

            if(strtolower($_POST['participle']) == $arr['participle']){
                $arr['participleResult'] = 'is-valid'; 
            }
            else{
                $arr['participleResult'] = 'is-invalid'; 
            }

            return View::make('orderTests', $arr)->render();
        }
        return View::make('orderTests', ListVocabulary::current())->render();
    }
}