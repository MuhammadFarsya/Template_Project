<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tampil= Akun::all();
        return view('Akun.index',compact('tampil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tambah = Akun::all();
        return view('Akun.create',compact('tambah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Akun();
        $model->nama = $request->nama;
        $model->username = $request->username;
        $model->password = $request->password;
        $model->jabatan = $request->jabatan;
        $model->save();
        return redirect('Akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubah = Akun::all()->find($id);
        return view('Akun.edit',compact('ubah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Akun::find($id);

        $model->nama = $request->nama;
        $model->username = $request->username;
        $model->password = $request->password;
        $model->jabatan = $request->jabatan;
        $model->save();
        return redirect('Akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Akun::find($id);
        $hapus->delete();
        return redirect('Akun');
    }
}
