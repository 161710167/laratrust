<?php

namespace App\Http\Controllers;

use App\Lamaran;
use App\Lowongan;
use App\User;
use Illuminate\Http\Request;
use Session;
class LamaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $r = Lamaran::with('Lowongan','User')->get();
        return view('lamaran.index',compact('r'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $o = User::all();
        return view('lamaran.create',compact('o'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'file_cv' => 'required|',
            'status' => 'required|',
            'low_id' => 'required|',
            'user_id' => 'required|'
        ]);
        $r = new Lamaran;
        $r->file_cv = $request->file_cv;
        $r->status = $request->status;
        $r->low_id = $request->low_id;
        $r->user_id = $request->user_id;
        $r->save();
        // attach fungsinya untuk melampirkan data,yang dilampirkan disini ialah data dari method Pesanan
        //  yang ada di model pengantin
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$p->file_cv</b>"
        ]);
        return redirect()->route('lamaran.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengantin  $pengantin
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $r = Lamaran::findOrFail($id);
        return view('lamaran.show',compact('r'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\perusahaan  $pengantin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Lamaran::findOrFail($id);
        $q= Lowongan::all();
        $o= User::all();
        $selectedo = Perusahaan::findOrFail($id)->user_id;
        // dd($selected);
        return view('perusahaan.edit',compact('r','p','q','selectedq','selectedo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengantin  $pengantin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this->validate($request,[
            'file_cv' => 'required|',
            'status' => 'required|',
            'low_id' => 'required|',
            'user_id' => 'required|'
        ]);
        $r = Lamaran::findOrFail($id);
        $r->file_cv = $request->file_cv;
        $r->status = $request->status;
        $r->low_id = $request->low_id;
        $r->user_id = $request->user_id;
        $r->save();
        // attach fungsinya untuk melampirkan data,yang dilampirkan disini ialah data dari method Pesanan
        //  yang ada di model 
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$p->file_cv</b>"
        ]);
        return redirect()->route('lamaran.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengantin  $pengantin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $r = Lamaran::findOrFail($id);
        $r->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('lamaran.index');
    }
}
