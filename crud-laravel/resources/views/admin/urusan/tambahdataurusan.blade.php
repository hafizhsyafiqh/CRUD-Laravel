@extends('layouts.layoutadmin2')
@section('content')
    <h1>Tambah Data Urusan</h1>
    <form action="/urusanadmin" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Kode Urusan</label>
            <input type="text" class="form-control" name="kode_urusan">
        </div>
        <div class="form-group">
            <label for="title">Nama Urusan</label>
            <input type="text" class="form-control" name="nama_urusan">
        </div>
        <div class="form-group">
            <label for="title">File</label>
            <input type="file" class="form-control" name="dokumen">
        </div>

        <a href="/urusanadmin"><button type="button" class="btn btn-warning">Kembali</button></a>
        <button class="btn btn-primary" type="submit"><i class="ace-icon fa fa-save"></i>Save</button>
    </form>
@endsection
