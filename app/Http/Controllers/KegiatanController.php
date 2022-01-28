<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Auth;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'Kesiswaan') {
            $items = Kegiatan::orderBy('id', 'DESC')->paginate(5);
        }else{
            $items = Kegiatan::where('ekskul', Auth::user()->profile->ekskul)->orderBy('id', 'DESC')->paginate(5);
        }
        return view('pages.kesiswaan.kegiatan.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.kesiswaan.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ekskul' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['mimes:jpeg,png,jpg,webp'],
            'description' => ['required']
        ]);
        $ekskul = $request->ekskul;
        $title = $request->title;
        $description = $request->description;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image', $image);
        }
        // dd($request);
        Kegiatan::create([
            'ekskul' => $ekskul,
            'title' => $title,
            'description' => $description,
            'image' => $image

        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Tambah data sukses.');
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
        $item = Kegiatan::findOrFail($id);
        return view('pages.kesiswaan.kegiatan.edit', compact('item'));
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
        $kegiatan = Kegiatan::findOrFail($id);
        $request->validate([
            'ekskul' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'image' => ['mimes:jpeg,png,jpg,webp'],
            'description' => ['required']
        ]);
        $kegiatan->ekskul = $request->ekskul;
        $kegiatan->title = $request->title;
        $kegiatan->description = $request->description;
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $file->move('./image', $image);
            $kegiatan['image'] = "$image";
        }

        if($kegiatan->save()){
            return redirect()->route('kegiatan.index')
            ->with('success', 'edit data successfully.');
        }else{
            return redirect()->route('kegiatan.index')
            ->with('danger', 'gagal edit data.');
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
        $item = Kegiatan::findOrFail($id);
        $item->delete();
        return redirect()->route('kegiatan.index')
                        ->with('success','berhasil menghapus kegiatan.');
    }

}
