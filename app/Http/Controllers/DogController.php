<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class DogController extends Controller
{
  public function index() {

    $dogs = Dog::orderBy('callName');

    if(request('search')) {
      $dogs->where('callName', 'like', '%' . request('search') . '%');
       }
      
    return view('dogs.index', [
        'dogs'=> $dogs->paginate(20)
    ]);
   
  }

  public function create() {
    return view('dogs.create');
  }

  public function store(Request $request) {


  
    $request->validate([
      'callName' => 'required',
      'regName' => 'required',
      // 'slug' => ['required', Rule::unique('dogs', 'slug')->ignore($dog)],
      'slug' => 'required',
      'mped_id' => 'required',
      'fped_id' => 'required',
      'clearances' => 'nullable',
      'birthday' => 'required',
      'pedigree' => 'nullable',
      'pic' => 'nullable',
      'wpage' => 'nullable',
      'dogstat' => 'required',
      'colour' => 'required',
      'sex' => 'required',
      'blurb' => 'nullable',
      
  ]);

  Dog::create($request->all());

  return redirect()->route('list_dog')
      ->with('success', ( $request->callName .' was successfully created'));


  }



  public function edit(Dog $dog)
  {
    return view('dogs/edit', ['dog' => $dog]);
  }



  public function update(Request $request, Dog $dog)
  {
      $request->validate([
          'callName' => 'required',
          'regName' => 'required',
          'slug' => ['required', Rule::unique('dogs', 'slug')->ignore($dog)],
          // 'slug' => 'required',
          'mped_id' => 'required',
          'fped_id' => 'required',
          'clearances' => 'nullable',
          'birthday' => 'required',
          'pedigree' => 'nullable',
          'pic' => 'nullable',
          'wpage' => 'nullable',
          'dogstat' => 'required',
          'colour' => 'required',
          'sex' => 'required',
          'blurb' => 'nullable',
          
      ]);
    
      $dog->update($request->all());

      return redirect()->route('list_dog')
      ->with('success', ( $dog->callName .' was successfully updated!'));
   }


  public function show(Dog $dog)
  {

      return view('dogs.show', [
     'dog'=> $dog]);
  }

  // protected function validateDog([
  //   'callName' =>'required',
  //   'regName' => ['reqired', 'unique']

  // ]);
}
 