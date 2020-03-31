<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Tweet;
use App\Models\Follower;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $users = $user->getAllUsers(auth()->user()->id);
        return view('users.index', ['users' => $users]);
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
    
    //フォロー
    public function follow(User $user,$id)
    {
        $user = User::find($id); 
        //var_dump($user);
        $follower = auth()->user();
        //フォローしているか
        $is_following = $follower->isFollowing($user->id);
         if(!$is_following) {
            //フォローしていなければする
             $follower->follow($user->id);
             return back();
         }
        //return view('sample');
    }
    //フォロー解除
    public function unfollow(User $user,$id)
    {
        $user = User::find($id);
        $follower = auth()->user();
        //フォローしているか
        $is_following = $follower->isFollowing($user->id);
        if($is_following) {
            //フォローしていれば解除する
            $follower->unfollow($user->id);
            return back();
        }
    }
}
