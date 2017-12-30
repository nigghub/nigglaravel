<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class HtmlController extends Controller
{

    public function index(){

        $html = new \Htmldom('http://freewebsite-service.com/abcnigg');

        foreach($html->find('a[class=menulink]') as $element){
            $menus[]  = 'http://freewebsite-service.com/abcnigg/'.$element->href;

            $htmlByPage = new \Htmldom('http://freewebsite-service.com/abcnigg/'.$element->href);

                  foreach($htmlByPage->find('div[class=textbox], div[class=imagebox]') as $element1){
                  $FindDandg[]     =  $element->href." - (".$element1->plaintext.")";
                  }



        }


//        foreach($html->find('a[class=menulink]') as $element){
////            dd($element);
//            $helo[]     =  $element->plaintext.'|'.$element->href;
////            $helolink[] =  $element->href;
//        }

//        foreach($html->find('div[class=textbox]') as $element1){
////            dd($element);
//            $FindDandg[]     =  $element1->plaintext;
////            dd($FindDandg);
//        }


//        return view('welcome', ['hello' => $helo, 'FindDandg' => $FindDandg ]);
           return view('welcome', ['menus' => $menus, 'FindDandg' => $FindDandg  ]);
    }



}