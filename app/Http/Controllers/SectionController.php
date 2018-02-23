<?php

namespace App\Http\Controllers;

use App\Section;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SectionController extends Controller
{

    public function index($id = null) {
      if ($id == null) {
            return Section::orderBy('updated_at', 'desc')->get();
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
      $sec = Section::find($id);
      $answer = Answer::where('section_id', $sec->id)->get();
      try {
          if($sec->has_generic_answer=='true' && count($answer) > 0){
            foreach ($answer as $p) {
              $as_delete = Answer::find($p->id);
              $as_delete->delete();
            }  
          }

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
      $sec = Section::find($id);
      $qs = Question::where('section_id', $sec->id)->get();
      $answer = Answer::where('section_id', $sec->id)->get();
      
      if(count($qs) > 0){
        foreach ($qs as $p) {
          $qs_delete = Question::find($p->id);
          $qs_delete->delete();
        }  
      }

      if(count($answer) > 0){
        foreach ($answer as $p) {
          $as_delete = Answer::find($p->id);
          $as_delete->delete();
        }  
      }
      
      if(count($sec) > 0){
        $sec->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
