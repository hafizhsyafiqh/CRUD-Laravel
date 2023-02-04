@extends('layouts.layoutadmin2')
@section('content')
<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
        <h4>Daftar Urusan <a href="/urusanadmin/create">  <button class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Tambah Data"><i class="fa fa-plus"></i></button></a></h4>
    </div>

    <div class="card-body">
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Urusan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($data_urusan as $baris)
        <tr>
            <td>{{$baris->kode_urusan}}</td>
            <td>{{$baris->nama_urusan}}</td>
            <td><img src="{{ asset('gambar/'.$baris->file)}}"></td>
            <td>
                <a href="/urusanadmin/{{$baris->id}}/edit" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="fa fa-edit"></i></a>
                <a href="/urusanadmin/{{$baris->id}}/download" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Download Data"><i class="fa fa-download"></i></a>
                <form action="/urusanadmin/{{$baris->id}}" method="post">
                   @csrf
                   @method('delete')
                    <button class="btn btn-danger waves-effect waves-light" type="submit" data-toggle="tooltip" data-placement="bottom" title="Hapus Data"><i class="fa fa-trash"></i></button>

                </form>
            </td>
        </tr>
        @endforeach
        </thead>
    </table>
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
        } );
    </script>

    </div>
</div>
</div>
@endsection

