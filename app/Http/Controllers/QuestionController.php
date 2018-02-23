<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{

    public function index($id = null) {
      if ($id == null) {
            return Question::orderBy('updated_at', 'desc')->get();
        } else {
            return Question::where('id', $id)->get();
        }
    }

    public function getbysection(Request $request){
        return Question::where('section_id', $request->input('section_id'))->orderBy('updated_at', 'desc')->get();
    }

    public function add(Request $request) {
      $status = false;
      $message = 'success';
      $question = new Question;
      try {
          $question->name = $request->input('name');
          $question->grade = $request->input('grade');
          $question->section_id = $request->input('section_id');
          $question->save();
          $status = true;
      } catch (Exception $e) {
        $message = $e;
      }
      return response()->json(['success' => $status, 'message' => $message]);
    }

    public function update(Request $request, $id) {
      $status = false;
      $message = '';
      $question = Question::find($id);

      try {
          $question->name = $request->input('name');
          $question->grade = $request->input('grade');
          $question->section_id = $request->input('section_id');
          $question->save();
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
      $question = Question::find($id);
      $answer = Answer::where('question_id', $question->id)->get();

      if(count($answer) > 0){
        foreach ($answer as $p) {
          $as_delete = Answer::find($p->id);
          $as_delete->delete();
        }  
      }

      if(count($question) > 0){
        $question->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
