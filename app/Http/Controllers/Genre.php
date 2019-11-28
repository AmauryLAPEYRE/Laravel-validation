<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Genre extends Controller
{
  public function insertOne(Request $request)
  {
    $genre = new \App\Genre;
    $genre->name = $request->input('name');
    $genre->save();
    return redirect('/genres');
  }
  public function deleteOne(Request $request)
  {
      $id = $request->id;
      $genre = \App\Genre::find($id);
      $genre->delete();
      return redirect('/genres');
  }
  public function updateOne(Request $request)
  {
    $id = $request->id;
    $genre = \App\Genre::find($id);
    $genre->name = $request->input('name');
    $genre->save();
    return redirect('/genres');
  }
}
