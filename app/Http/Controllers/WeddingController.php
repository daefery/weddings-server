<?php

namespace App\Http\Controllers;

use App\Guests;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Image;
use Mail;

class WeddingController extends Controller
{

    // public function uploadImage(){
    //   $file = Input::file('file');
    // 	if ($file!=null) {
    // 		$ext = $file->getClientOriginalExtension();
    // 		$image_name = str_random(15).'.'.$ext;
    // 	}
    // 	if (!file_exists('public/images/uploads')) {
    //     mkdir('public/images/uploads', 0777, true);
    //     // mkdir(public_path().'/images/uploads', 0777, true);
    //
    // 	}
    // 	Image::make(Input::file('file'))->save('public/images/uploads/'.$image_name);
    // 	return response()->json([ 'success' => true, 'filename'=>$image_name ]);
    // }
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
      $te = Guests::orderBy('id', 'desc')->get();
      print_r($te);
      // if ($id == null) {
      //       return Guests::orderBy('id', 'desc')->get();
      //   } else {
      //       return $this->show($id);
      //   }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
      $status = false;
      $message = '';
      $guest = new Guests;
      // $imgname = $request->input('image');
      try {
        $guestCheck = Guests::where('email', '=', $request->input('email'))
        ->orWhere('phone','=', $request->input('phone'))
        ->get();
        if(count($guestCheck) <= 0){
          $guest->name = $request->input('name');
          $guest->email = $request->input('email');
          $guest->phone = $request->input('phone');
          $guest->relation = $request->input('relation');
          $guest->message = $request->input('message');
          // if($imgname != ""){
          //   $guest->image = url('/public/images/uploads').'/'.$imgname;
          // }
          $guest->attend = $request->input('attend');

          $guest->save();
          $status = true;
   //       $dataEmail = Guests::where('email','=', $request->input('email'))->get();
     //     $isSent = $this->send_email($dataEmail[0]);
        }else{
          $message = 'email or phone already exist in system, please try with another one.';
        }

      } catch (Exception $e) {
        $message = $e;
      }
      return response()->json(['success' => $status, 'message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
      $status = false;
      $message = '';
      $guest = new Guests;
      try {
        $guest = Guests::find($id);
        if(count($guest) > 0){
          $status = true;
        }
      } catch (Exception $e) {
        $message = $e;
      }
      return response()->json(['data'=>$guest, 'success'=>$status, 'message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
      $status = false;
      $message = '';
      $guest = Guests::find($id);

      try {
        $guest->name = $request->input('name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->relation = $request->input('relation');
        $guest->message = $request->input('message');
        $guest->attend = $request->input('attend');
        $guest->save();
        $status = true;
      } catch (Exception $e) {
        $message = $e;
      }
      return response()
          ->json(['success' => $status, 'message' => $message]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
      $status = false;
      $message = '';
      $guest = Guests::find($request->input('id'));
      if(count($guest) > 0){
        $guest->delete();
        $status = true;
      }else{
        $message = 'failed to delete, no data found.';
      }
      return response()->json(['success'=>$status, 'message'=> $message]);
    }

    public function send_email($param)
    {
      $email = $param->email;
      $data=['attend'=>$param->attend, 'name'=>$param->name];
      try {
        Mail::send(['html'=>'mail'], $data, function($message) use ($email){
          $message->to($email, 'test')->subject('Thank you for your wish!.');
          $message->from('ferde.inc@gmail.com', 'ferde');
        });
        return true;
      } catch (Exception $e) {
        return false;
      }
    }
}
