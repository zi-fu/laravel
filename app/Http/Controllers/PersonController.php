<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;


class PersonController extends Controller
{
   public function index(Request $request)
   {
       $items = Person::all();
       return view('person.index', ['items' => $items]);
   }

   public function find(Request $request)
   {
       return view('person.find', ['input' => '']);
   }

   public function search(Request $request)
   {
       $item = Person::nameEqual($request->input)->first();
       $param = ['input' => $request->input, 'item' => $item];
       return view('person.find', $param);
   }

}