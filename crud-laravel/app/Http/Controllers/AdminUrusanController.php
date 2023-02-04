<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Urusan;
use Illuminate\Support\Facades\Gate;


class AdminUrusanController extends Controller
{

    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(gate::allows('admin')) return $next($request);
            abort(403, 'Anda Tidak memiliki akses ke menu ini');
        });
    }
    public function index()
    {
        $urusan = Urusan::all();
       return view('admin.urusan.tampildataurusan', ['data_urusan'=>$urusan]);
    }


    public function create()
    {
        $urusan = Urusan::all();
       return view('admin.urusan.tambahdataurusan', ['data_urusan'=>$urusan]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'kode_urusan'=>'required',
            'nama_urusan' =>'required'
        ]);

        $file = $request->file('dokumen');
                $name_file = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $ukuran_file = $file->getSize();
                if ($extension == 'png' or $extension=='jpg' or $extension =='pdf'){
                    if ($ukuran_file <= '2040303'){
                        $folder = 'gambar';
                        $file->move($folder, $name_file);
                    }
                }

        $urusan = new Urusan;
        $urusan->kode_urusan=$request->kode_urusan;
        $urusan->nama_urusan=$request->nama_urusan;
        $urusan->file = $name_file;
        $urusan->save();
        return redirect('/urusanadmin');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $urusan = Urusan::find($id);
        return view('/admin.urusan.editdataurusan', compact(('urusan')));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'kode_urusan'=>'required',
                'nama_urusan' =>'required'
                ]);

                $file = $request->file('dokumen');
                $name_file = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $ukuran_file = $file->getSize();
                if ($extension == 'png' or $extension=='jpg' or $extension =='pdf'){
                    if ($ukuran_file <= '2040303'){
                        $folder = 'gambar';
                        $file->move($folder, $name_file);
                    }
                }


                $urusan = Urusan::find($id);
                $urusan->kode_urusan=$request->kode_urusan;
                $urusan->nama_urusan=$request->nama_urusan;
                $urusan->file = $name_file;


                $urusan->save();
                return redirect('/urusanadmin');
    }


    public function destroy($id)
    {
        Urusan::find($id)->delete();
        return redirect('/urusanadmin');
    }

    public function download($id)
    {
        $urusan = Urusan::find($id);
        $name_file = public_path("gambar/$urusan->file");
        return response()->download($name_file);
    }
}
