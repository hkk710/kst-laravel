<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Vtype;
use App\User;
use Response;

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

    public function userIndex(Request $request) {
        $users = User::paginate(15);
        return view('admin.user.index')->withUsers($users);
    }

    public function userSearch(Request $request) {
        $search = $request->search;
        $users = User::where($request->search_by, '=', $search)->get();
        return Response::json($users);
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
            'password' => 'sometimes|max:255|confirmed'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null || $request->password != "") {
            $user->password = bcrypt($request->password);
        }
        $user->admin = $request->admin;
        $user->save();

        Session::flash('success', 'User have been successfully edited');
        return redirect()->route('user.show', [$user->id]);
    }

    public function userDelete($id) {
        $user = User::find($id);
        return view('admin.user.delete')->withUser($user);
    }

    public function userDestroy($id) {
        $user = User::find($id);
        $user->delete();

        Session::flash('success', 'The user was successfully deleted');
        return redirect('/admin/users');
    }




    // ======================= Vazhipad types ===================

    public function vtypeIndex(Request $request) {
        $vtypes = Vtype::paginate(15);
        return view('admin.vtype.index')->withVtypes($vtypes);
    }

    public function vtypeSearch(Request $request) {
        $search = $request->search;
        $vtypes = Vtype::where($request->search_by, '=', $search)->get();
        return Response::json($vtypes);
    }

    public function vtypeCreate() {
        return view('admin.vtype.create');
    }

    public function vtypeStore(Request $request) {
        $vtype = new Vtype;
        $vtype->name = $request->name;

        $vtype->save();
        Session::flash('success', 'New Vazhipad Type was successfully created');
        return redirect()->route('vtype.show', [$vtype->id]);
    }

    public function vtypeShow($id) {
        $vtype = Vtype::find($id);
        return view('admin.vtype.show')->withVtype($vtype);
    }

    public function vtypeEdit($id) {
        $vtype = Vtype::find($id);
        return view('admin.vtype.edit')->withVtype($vtype);
    }

    public function vtypeUpdate(Request $request, $id) {
        $this->validate($request, [
            'name'     => 'required|max:255'
        ]);

        $vtype = Vtype::find($id);
        $vtype->name = $request->name;
        $vtype->save();

        Session::flash('success', 'Vazhipad type have been successfully edited');
        return redirect()->route('vtype.show', [$vtype->id]);
    }

    public function vtypeDelete($id) {
        $vtype = Vtype::find($id);
        return view('admin.vtype.delete')->withVtype($vtype);
    }

    public function vtypeDestroy($id) {
        $vtype = Vtype::find($id);
        $vtype->delete();

        Session::flash('success', 'The vazhipad type was successfully deleted');
        return redirect('/admin/vtypes');
    }
}
