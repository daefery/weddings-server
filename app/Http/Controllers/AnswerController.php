<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AnswerController extends Controller
{

    public function index($id = null) {
      if ($id == null) {
            return Answer::orderBy('id', 'desc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function getbyquestion(Request $request){
        return Answer::where('section_id', $request->input('section_id') && 'question_id', $request->input('question_id'))->orderBy('id', 'desc')->get();
    }

    public function add(Request $request) {
      $status = false;
      $message = 'success';
      $sec = new Answer;
      try {
          $sec->name = $request->input('name');
          $sec->value = $request->input('value');
          $sec->section_id = $request->input('section_id');
          $sec->question_id = $request->input('question_id');
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
      $guest = Answer::find($id);

      try {
          $sec->name = $request->input('name');
          $sec->grade = $request->input('value');
          $sec->section_id = $request->input('section_id');
          $sec->question_id = $request->input('question_id');
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
      $guest = Answer::find($id);
      if(count($guest) > 0){
        $guest->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
