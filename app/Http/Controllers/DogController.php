<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DogController extends Controller
{
  public function index() {
      
    $dogs = Dog::all()->sortBy('callName');
        
    return view('dogs.index', [
        'dogs'=> $dogs
    ]);
   
  }

  public function create() {
    return view('dogs.create');
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

      dd($dog);

    
  //     return redirect()->route('dogs.index')
  //                     ->with('success','Product updated successfully');
   }


  public function show($id)
  {
      return view('dogs.show', [
     'dog'=> Dog::with('mped', 'fped')->findOrFail (23)]);
  }

  // protected function validateDog([
  //   'callName' =>'required',
  //   'regName' => ['reqired', 'unique']

  // ]);
}
 