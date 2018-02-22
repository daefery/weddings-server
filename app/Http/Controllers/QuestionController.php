<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class QuestionController extends Controller
{

    public function index($id = null) {
      if ($id == null) {
            return Question::orderBy('id', 'desc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function getbysection(Request $request){
        return Question::where('section_id', $request->input('section_id'))->orderBy('id', 'desc')->get();
    }

    public function add(Request $request) {
      $status = false;
      $message = 'success';
      $sec = new Question;
      try {
          $sec->name = $request->input('name');
          $sec->grade = $request->input('grade');
          $sec->section_id = $request->input('section_id');
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
      $guest = Question::find($id);

      try {
          $sec->name = $request->input('name');
          $sec->grade = $request->input('grade');
          $sec->section_id = $request->input('section_id');
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
      $guest = Question::find($id);
      if(count($guest) > 0){
        $guest->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }
}
