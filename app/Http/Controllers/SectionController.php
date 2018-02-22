<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
{

    public function index($id = null) {
      if ($id == null) {
            return Section::orderBy('id', 'desc')->get();
        } else {
            return Section::where('id', $id)->get();
        }
    }

    public function add(Request $request) {
      $status = false;
      $message = 'success';
      $sec = new Section;
      try {
          $sec->name = $request->input('name');
          $sec->description = $request->input('description');
          $sec->has_generic_answer = $request->input('has_generic_answer');
          $sec->time_duration = $request->input('time_duration');
          $sec->save();
          $status = true;
      } catch (Exception $e) {
        $message = $e;
      }
      return response()->json(['success' => $status, 'message' => $message]);
    }

    public function update(Request $request, $id) {
      $status = false;
      $message = '';
      $guest = Section::find($id);

      try {
          $sec->name = $request->input('name');
          $sec->description = $request->input('description');
          $sec->has_generic_answer = $request->input('has_generic_answer');
          $sec->time_duration = $request->input('time_duration');
          $sec->save();
        $status = true;
      } catch (Exception $e) {
        $message = $e;
      }
      return response()
          ->json(['success' => $status, 'message' => $message]);
    }

    public function destroy($id) {
      $status = false;
      $message = '';
      $guest = Section::find($id);
      if(count($guest) > 0){
        $guest->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
