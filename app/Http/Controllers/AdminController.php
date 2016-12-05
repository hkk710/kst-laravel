<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // ============================== Users ===================

    public function userIndex() {
        $users = User::paginate(15);
        return view('admin.user.index')->withUsers($users);
    }

    public function userShow($id) {
        $user = User::find($id);
        return view('admin.user.show')->withUser($user);
    }

    public function userEdit($id) {
        $user = User::find($id);
        return view('admin.user.edit')->withUser($user);
    }

    public function userUpdate(Request $request, $id) {
        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => "required|unique:users,email,$id",
            'password' => 'required|max:255|confirmed'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->admin = $request->admin;
        $user->save();

        Session::flash('success', 'User have been successfully edited');
        return redirect()->route('user.show', [$user->id]);
    }
}
