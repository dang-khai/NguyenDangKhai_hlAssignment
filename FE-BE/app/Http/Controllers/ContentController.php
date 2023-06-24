<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Vote;
use Illuminate\Support\Facades\Cookie;

class ContentController extends Controller
{
    public function index() {
        $contents = Content::all();
        if(Cookie::get('checked')) {
            $index = count($contents);
        }else {
            $index = 0;
        }
        return view('welcome', compact(['contents', 'index']));
    }
    public function store(Request $request) {
        $contents = Content::all();
        $index = $request['index'];
        $index++;
        if($index == count($contents)) {
            Cookie::queue('checked', "checked");
        }
        Vote::insert([
            'content_id' => $index,
            'vote' => $request['vote']
        ]);
        return view('welcome', compact('index', 'contents'));
    }
}
