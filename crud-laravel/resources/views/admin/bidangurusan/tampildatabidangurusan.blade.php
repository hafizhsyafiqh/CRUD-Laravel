@extends('layouts.layoutadmin2')
@section('content')
<div class="col-lg-12">
    <div class="card">
    <div class="card-header">
        <h4>Daftar Bidang Urusan <a href="bidangurusanadmin/create"><button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Tambah Data"><i class="ace-icon fa fa-plus"></i></button></a></h4>
    </div>

    <div class="card-body">
    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>Urusan</th>
            <th>Kode</th>
            <th>Bidang Urusan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($bidang_urusan as $baris)
        <tr>
            <td>{{$baris->urusan->nama_urusan}}</td>
            <td>{{$baris->kode_bidang_urusan}}</td>
            <td>{{$baris->nama_bidang_urusan}}</td>
            <td>
                <a href="/bidangurusanadmin/{{$baris->id}}/edit" class="btn btn-warning waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Edit Data"><i class="fa fa-edit"></i></a>
                <form action="/bidangurusanadmin/{{$baris->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger waves-effect waves-light" type="submit" data-toggle="tooltip" data-placement="bottom" title="Hapus Data"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
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
