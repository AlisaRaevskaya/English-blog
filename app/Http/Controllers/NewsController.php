<?php

namespace App\Http\Controllers;
use App\Http\Models\News;
use App\Http\Requests\NewsRequest;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function submit(NewsRequest $req){
        $news = new News(); //класс на основе модели
        $news->title= $req->input('');
    }

}
