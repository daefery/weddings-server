<?php

namespace App\Http\Controllers;

use App\Guests;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Wedding extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Guests::orderBy('id', 'desc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
        $guest = new Guests;

        $guest->name = $request->input('name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->relation = $request->input('relation');
        $guest->message = $request->input('message');
        $guest->attend = $request->input('attend');
        $guest->save();

        return 'Employee record successfully created with id ' . $guest->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Guests::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $guest = Guests::find($id);

        $guest->name = $request->input('name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->relation = $request->input('relation');
        $guest->message = $request->input('message');
        $guest->attend = $request->input('attend');
        $guest->save();

        return "Sucess updating user #" . $guest->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $guest = Guests::find($request->input('id'));

        $guest->delete();

        return "Employee record successfully deleted #" . $request->input('id');
    }
}
