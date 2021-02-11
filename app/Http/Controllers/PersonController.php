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
       $min = $request->input * 1;
       $max = $min + 10;
       $item = Person::ageGreaterThan($min)->ageLessThan($max)->first();
       $param = ['input' => $request->input, 'item' => $item];
       return view('person.find', $param);
   }

   public function add(Request $request)
   {
       return view('person.add');
   }

   public function create(Request $request)
   {
       $this->validate($request, Person::$rules);
       $person = new Person;
       $form = $request->all();
       unset($form['_token']);
       // fillで引数に用意されている配列の値をモデルのプロパティに代入する。
       $person->fill($form)->save();
       return redirect('/person');
   }

   public function edit(Request $request)
   {
       $person = Person::find($request->id);
       return view('person.edit', ['form' => $person]);
   }

   public function update(Request $request)
   {
       $this->validate($request, Person::$rules);
       $person = Person::find($request->id);
       $form = $request->all();
       unset($form['_token']);
       $person->fill($form)->save();
       return redirect('/person');
   }

   public function delete(Request $request)
   {
       $person = Person::find($request->id);
       return view('person.del', ['form' => $person]);
   }

   public function remove(Request $request)
   {
       Person::find($request->id)->delete();
       return redirect('/person');
   }
}