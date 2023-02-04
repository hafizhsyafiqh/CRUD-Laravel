<?php

namespace App\Http\Controllers;

use App\Models\BidangUrusan;
use App\Models\Urusan;
use Illuminate\Http\Request;


class AdminBidangUrusanController extends Controller
{

    public function index()
    {

        $bidang_urusan = BidangUrusan::all();
        return view('admin.bidangurusan.tampildatabidangurusan', ['bidang_urusan' => $bidang_urusan]);
    }


    public function create()
    {
        $urusan = Urusan::all();
        return view('admin.bidangurusan.tambahdatabidangurusan', ['urusan' => $urusan]);

    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'urusan' => 'required',
                'kode_bidang_urusan' => 'required',
                'nama_bidang_urusan' => 'required'
            ]);
            $bidang_urusan = new BidangUrusan;
            $bidang_urusan->urusan_id=$request->urusan;
            $bidang_urusan->kode_bidang_urusan=$request->kode_bidang_urusan;
            $bidang_urusan->nama_bidang_urusan=$request->nama_bidang_urusan;

            $bidang_urusan->save();
            return redirect('/bidangurusanadmin');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $bidang_urusan = BidangUrusan::find($id);
        $urusan = Urusan::all();
        return view('/admin.bidangurusan.editdatabidangurusan', compact(('bidang_urusan'), ('urusan')));
    }


    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'urusan' => 'required',
                'kode_bidang_urusan' => 'required',
                'nama_bidang_urusan' => 'required'
            ]);
            $bidang_urusan = BidangUrusan::find($id);
            $bidang_urusan->urusan_id=$request->urusan;
            $bidang_urusan->kode_bidang_urusan=$request->kode_bidang_urusan;
            $bidang_urusan->nama_bidang_urusan=$request->nama_bidang_urusan;

            $bidang_urusan->save();
            return redirect('/bidangurusanadmin');
    }


    public function destroy($id)
    {
        BidangUrusan::find($id)->delete();
        return redirect('/bidangurusanadmin');
    }
}
