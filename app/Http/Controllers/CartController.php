<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use App\Vname;
use App\Vtype;
use App\Prathishta;
use App\Star;
use Session;

class CartController extends Controller
{
    public function index() {
        $carts = Cart::all()->where('user_id', '=', Auth::guard('web')->user()->id);
        return view('online_vazhipad.cart.index')->withCarts($carts);
    }
    public function edit($id) {
        $cart = Cart::find($id);
        if ($cart == null) {
            abort(404);
        }
        if ($cart->user_id == Auth::guard('web')->user()->id) {
            $vtypes = Vtype::all();
            $stars = Star::all();
            $prathishtas = Prathishta::all();
            return view('online_vazhipad.cart.edit')->withCart($cart)->withVtypes($vtypes)->withPrathishtas($prathishtas)->withStars($stars);
        }
        else {
            abort(404);
        }
    }
    public function update(Request $request, $id) {
        $cart = Cart::find($id);
        if ($cart == null) {
            abort(404);
        }
        if ($cart->user_id == Auth::guard('web')->user()->id) {
            $this->validate($request, [
                'vtype' => 'not_in:0',
                'prathishta' => 'not_in:0',
                'vname' => 'not_in:0',
                'star' => 'not_in:0',
                'name' => 'required',
                'date' => 'required|date|after:today',
                'phone' => 'required|numeric'
            ]);
            $cart->vtype = $request->vtype;
            $cart->vname = $request->vname;
            $cart->prathishta = $request->prathishta;
            $cart->star = $request->star;
            $cart->name = $request->name;
            $cart->phone = $request->phone;
            $cart->date = $request->date;
            $cart->price = Vname::find($request->vname)->price;
            $cart->save();
            Session::flash('success', 'Cart successfully updated');
            return redirect('online_vazhipad/cart');
        }
        else {
            abort(404);
        }
    }
    public function destroy($id) {
        $cart = Cart::find($id);
        if ($cart == null) {
            abort(404);
        }
        if ($cart->user_id == Auth::guard('web')->user()->id) {
            $cart->delete();
            Session::flash('success', 'Item was Successfully deleted from your cart');
            return redirect('online_vazhipad/cart');
        }
        else {
            abort(404);
        }
    }
}
