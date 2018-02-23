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
            return Answer::orderBy('updated_at', 'desc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function getbyquestion(Request $request){
        return Answer::where('section_id', $request->input('section_id'))->where('question_id', $request->input('question_id'))->orderBy('updated_at', 'desc')->get();
    }

    public function add(Request $request) {
      $status = false;
      $message = 'success';
      $answer = new Answer;
      try {
          $answer->name = $request->input('name');
          $answer->value = $request->input('value');
          $answer->section_id = $request->input('section_id');
          $answer->question_id = $request->input('question_id');
          $answer->save();
          $status = true;
      } catch (Exception $e) {
        $message = $e;
      }
      return response()->json(['success' => $status, 'message' => $message]);
    }

    public function update(Request $request, $id) {
      $status = false;
      $message = '';
      $answer = Answer::find($id);

      try {
          $answer->name = $request->input('name');
          $answer->value = $request->input('value');
          $answer->section_id = $request->input('section_id');
          $answer->question_id = $request->input('question_id');
          $answer->save();
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
      $answer = Answer::find($id);
      if(count($answer) > 0){
        $answer->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
