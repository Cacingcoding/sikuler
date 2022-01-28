<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Profile::where('user_id', Auth::user()->id)->get();
        // dd($items);
        return view('pages.kesiswaan.profile.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Profile::findOrFail($id);
        return view('pages.kesiswaan.profile.edit', compact('item'));
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
        $profile = Profile::findOrFail($id);
        $user = User::findOrFail(Auth::user()->id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'ttl' => ['required', 'string', 'max:255'],
            'jk' => ['required', 'string', 'max:255'],
            'nt' => ['required', 'string', 'max:255'],
        ]);

        $user->name = $request->name;
        $profile->alamat = $request->alamat;
        $profile->ttl = $request->ttl;
        $profile->jk = $request->jk;
        $profile->nt = $request->nt;

        if ($avatar = $request->file('avatar')) {
            $destinationPath = 'avatar/';
            $profileavatar = date('YmdHis') . "." . $avatar->getClientOriginalExtension();
            $avatar->move($destinationPath, $profileavatar);
            $profile['avatar'] = "$profileavatar";
        }
        if($profile->save() && $user->save()){
            return redirect()->route('profile.index')
            ->with('success', 'edit data successfully.');
        }else{
            return redirect()->route('profile.index')
            ->with('success', 'gagal edit data.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

}
