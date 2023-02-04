@extends('layouts.layoutadmin2')
@section('content')
<h1>Edit Data Bidang Urusan</h1>
<form action="/bidangurusanadmin/{{$bidang_urusan->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Urusan</label>
        <select name="urusan" class="form-control">
            @foreach ($urusan as $baris)
                <option value="{{$baris->id}}" selected>{{$baris->nama_urusan}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title">Kode Bidang Urusan</label>
        <input type="text" class="form-control" name="kode_bidang_urusan" value="{{ old('kode_bidang_urusan') ? old('kode_bidang_urusan') : $bidang_urusan->kode_bidang_urusan}}">
    </div>
    <div class="form-group">
        <label for="title">Nama Bidang Urusan</label>
        <input type="text" class="form-control" name="nama_bidang_urusan" value="{{ old('nama_bidang_urusan') ? old('nama_bidang_urusan') : $bidang_urusan->nama_bidang_urusan}}">
    </div>
    <a href="/bidangurusanadmin"><button class="btn btn-warning" type="button">Kembali</button></a>
    <button type="submit" class="btn btn-primary"><i class="ace-icon fa fa-save"></i>Save</button>
</form>
@endsection
