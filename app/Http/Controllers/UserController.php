<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
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
    public function show()
    {
        if (\Auth::user()) {
            // dd(\Auth::user());
            $user = User::where('id',\Auth::user()->id)->first();
            // dd($user);
            return view('pages.pageUser', compact('user'));
        }
        else {
            return redirect()->route('showHome');
        }
    }

    public function showOther($id) {
        if (\Auth::user() && \Auth::user()->admin == 1) {
            // dd(\Auth::user());
            $user = User::where('id',$id)->first();
            // dd($user);
            return view('pages.pageUser', compact('user'));
        }
        else {
            return redirect()->route('showHome');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if (\Auth::user()) {
            return view('pages.editUser');
        }
        else {
            return redirect()->route('showHome');
            return route('showCoffes');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        
        $this->validate($request, [
            'name' => 'max:50',
            'mail' => 'email',
            'street' => 'max:75|min:3|nullable',
            'dom' => 'numeric|nullable',
            'mieszkanie' => 'numeric|nullable'
            ]);
        $auth = \Auth::user();
        $user = User::find($auth->id);
        
        $user->name = $request->name;
        $user->email = $request->mail;
        $user->street = $request->street;
        $user->apartament = $request->dom;
        $user->suite = $request->mieszkanie;
        
        if($user->save()) {
            return redirect()->route('editUserForm');
        }
    }

    public function adminShow() {
        if(\Auth::user()->admin != 1){
            return redirect()->route('home');
        }

        $users = User::all();
        return view('pages.admin.users', compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(\Auth::user()->admin != 1) {
            return redirect()->route('home');
        }
        $user = User::find($id);
        $user->delete();
        return redirect()->route('adminShowUser');
    }
}
