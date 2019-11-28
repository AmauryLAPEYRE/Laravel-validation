<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Actor extends Controller
{
  public function insertOne(Request $request)
  {
    $actor = new \App\Actor;
    $actor->last_name = $request->input('last_name');
    $actor->first_name = $request->input('first_name');
    $actor->save();
    return redirect('/actors');
  }
  public function deleteOne(Request $request)
  {
    $id = $request->id;
    $actor = \App\Actor::find($id);
    $actor->delete();
    return redirect('/actors');
  }
  public function updateOne(Request $request)
  {
    $id = $request->id;
    $actor = \App\Actor::find($id);
    $actor->last_name = $request->input('last_name');
    $actor->first_name = $request->input('first_name');
    $actor->save();
    return redirect('/actors');
  }
}
