<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to laravel!';
        // return view('pages.index', compact('title'));


        return view('pages.index')->with('title', $title);
    }
    //  public function about()
    // {
    //     return view('pages.about');
    // }
    public function services()
    {
        $data = array(
            'title' => 'Services1',
            'name' => 'name2',
            'surname' => 'surname3',
            'services' => ['Web Design', 'Programming', 'SEL']
        );

        return view('pages.services')->with($data);
    }

    // public function redirect($link)
    // {
    //     switch ($link) {
    //         case "about":
    //             $title = 'about us';
    //             return view('pages.' . $link)->with('title',$title);
    //             break;

    //         case "services":
    //             $data = array(
    //                 'title'=> 'Services1',
    //                 'name'=> 'name2',
    //                 'surname'=>'surname3',
    //                 'services' => ['Web Design', 'Programming', 'SEL']
    //             );

    //             return view('pages.' . $link)->with($data);
    //             break;
    //     }
    // }
}
