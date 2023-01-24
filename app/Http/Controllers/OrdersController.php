<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/zestaw_forms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
            'kawa' => 'required',
            'cukier' => 'required',
            'phone' => 'required|regex:/^(?:\(?\?)?(?:[-\.\(\)\s]*(\d)){9}\)?$/',
            'mail' => 'email|required',
            'street' => 'required|min:3|max:70',
            'dom' => 'required|integer',
            'uwagi' => 'max:250'
            ]);
        
        $order = new Order();
        $order->coffe = $request->kawa;
        $order->sugar = $request->cukier;
        if($request->food) {
            $order->food = $request->food;
        }
        if (\Auth::user()) {
            $order->user_id = \Auth::user()->id;
        }
        
        $order->street = $request->street;
        $order->apartament = $request->dom;
        if($request->mieszkanie) {
            $order->suite = $request->mieszkanie;
        }

        if($request->uwagi) {
            $order->comments = $request->uwagi;
        }

        $order->status = "In progress";
        $order->price = $request->price;
        $order->save();
        return view('pages.kawy');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        if (\Auth::user()) {
            $auth = \Auth::user();
            $orders = Order::where('user_id', $auth->id)->get();
            // dd($orders);
            return view('pages.zestaw_show', compact('orders'));
        }
        else {
            return redirect()->route('showHome');
            return route('showCoffes');
        }
        
        
    }

    public function adminShow() {
        if(\Auth::user() && \Auth::user()->admin == 1) {
            // $orders = Order::all();

            $orders = Order::orderBY('user_id', 'asc')->get();
            // dd($orders);
            return view('pages.admin.orders', compact('orders'));
        }
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
}
