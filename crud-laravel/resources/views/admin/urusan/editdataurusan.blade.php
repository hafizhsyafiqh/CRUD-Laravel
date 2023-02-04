@extends('layouts.layoutadmin2')
@section('content')
<h1>Edit Data Urusan</h1>
<form action="/urusanadmin/{{$urusan->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Kode Urusan</label>
        <input type="text" class="form-control" name="kode_urusan" value="{{ old('kode_jabatan') ? old('kode_jabatan') : $urusan->kode_urusan}}">
    </div>
    <div class="form-group">
        <label for="title">Nama Urusan</label>
        <input type="text" class="form-control" name="nama_urusan" value="{{ old('nama_urusan') ? old('nama_urusan') : $urusan->nama_urusan}}">
    </div>
    <div class="form-group">
        <label for="title">File</label>
        <input type="file" class="form-control" name="dokumen">
        <img src="{{ asset('gambar/'.$urusan->file)}}">
    </div>
    <a href="/urusanadmin"><button type="button" class="btn btn-warning">Kembali</button></a>
    <button class="btn btn-primary" type="submit"><i class="ace-icon fa fa-plus"></i>Save</button>
</form>
@endsection
