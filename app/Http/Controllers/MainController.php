<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Review;
use App\Models\News;
use App\Models\Services;
use App\Models\Testlesson;

class MainController extends Controller
{

   public function index(){
    $servicesIndex = Services::all();
    $reviews = Review::all();
    $news = News::all();

    return view('index', compact('servicesIndex', 'reviews', 'news'));
   }

   public function submit(Request $req){

    $testData = new Testlesson();

    $testData->email = $req->input('email');
    $testData->name = $req->input('name');
    $testData->date = date("Y-m-d",strtotime($req->input('date')));
    $testData->message = $req->input('message');
    $testData->categories = $req->input('categories');

    $testData->save();

    return response()->json(['success'=>'Данные успешно отправлены']);
}

}
