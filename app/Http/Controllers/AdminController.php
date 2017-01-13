<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Vtype;
use App\User;
use App\Vname;
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


    // ============================== Users ===================

    public function userIndex(Request $request) {
        $users = User::all();
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
        $vtypes = Vtype::all();
        return view('admin.vtype.index')->withVtypes($vtypes);
    }

    public function vtypeCreate() {
        return view('admin.vtype.create');
    }

    public function vtypeStore(Request $request) {
        $this->validate($request, ['name' => 'required']);
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

        Session::flash('success', 'Vazhipad type was successfully edited');
        return redirect()->route('vtype.show', [$vtype->id]);
    }

    public function vtypeDelete($id) {
        $vtype = Vtype::find($id);
        return view('admin.vtype.delete')->withVtype($vtype);
    }

    public function vtypeDestroy($id) {
        $vtype = Vtype::find($id);
        $vtype->vname()->delete();
        $vtype->delete();

        Session::flash('success', 'Vazhipad type was successfully deleted');
        return redirect('/admin/vtypes');
    }




        // ======================= Vazhipad names ===================

        public function vnameIndex(Request $request) {
            $vnames = Vname::all();
            return view('admin.vname.index')->withVnames($vnames);
        }

        public function vnameCreate() {
            $vtypes = Vtype::all();
            return view('admin.vname.create')->withVtypes($vtypes);
        }

        public function vnameStore(Request $request) {
            $this->validate($request, ['name' => 'required', 'price'    => 'required|numeric']);
            $vname = new Vname;
            $vname->name = $request->name;
            $vname->vtypes_id = $request->vtypes_id;
            $vname->price = $request->price;

            $vname->save();
            Session::flash('success', 'New Vazhipad name was successfully created');
            return redirect()->route('vname.show', [$vname->id]);
        }

        public function vnameShow($id) {
            $vname = Vname::find($id);
            return view('admin.vname.show')->withVname($vname);
        }

        public function vnameEdit($id) {
            $vname = Vname::find($id);
            $vtypes = Vtype::all();
            return view('admin.vname.edit')->withVname($vname)->withVtypes($vtypes);
        }

        public function vnameUpdate(Request $request, $id) {
            $this->validate($request, [
                'name'     => 'required|max:255',
                'price'    => 'required|numeric'
            ]);

            $vname = Vname::find($id);
            $vname->name = $request->name;
            $vname->vtypes_id = $request->vtypes_id;
            $vname->price = $request->price;
            $vname->save();

            Session::flash('success', 'Vazhipad name was successfully edited');
            return redirect()->route('vname.show', [$vname->id]);
        }

        public function vnameDelete($id) {
            $vname = Vname::find($id);
            return view('admin.vname.delete')->withVname($vname);
        }

        public function vnameDestroy($id) {
            $vname = Vname::find($id);
            $vname->delete();

            Session::flash('success', 'Vazhipad name was successfully deleted');
            return redirect('/admin/vnames');
        }
}
