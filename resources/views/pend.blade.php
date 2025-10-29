@extends('layouts.main')
@section('container')


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>NIK</th>
                        <th>Nomor KK</th>
                        <th>Nama Lengkap</th>
                        <th>Hubungan Keluarga</th>
                        <th>Tempat tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Nomor RT</th>
                        <th>Nomor HP</th>
                        
                        <th>Status Pendidikan</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Aksi</th>
                        <th>NIK</th>
                        <th>Nomor KK</th>
                        <th>Nama Lengkap</th>
                        <th>Hubungan Keluarga</th>
                        <th>Tempat tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Pekerjaan</th>
                        <th>Alamat</th>
                        <th>Nomor RT</th>
                        <th>Nomor HP</th>
                        
                        <th>Status Pendidikan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $penduduk as $p )
                                        
                    <tr>
                        <td><a href="penduduk/{{ $p["id"]}}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                        </td>
                        <td>{{ $p["nik"]}}</td>
                        <td>{{ $p["nokk"]}}</td>
                        <td>{{ $p["nama"]}}</td>
                        <td>{{ $p["hubungankeluarga"]}}</td>
                        <td>{{ $p["tempatlahir"]}} {{ $p["tanggallahir"]}}</td>
                        <td>{{ $p["agama"]}}</td>
                        <td>{{ $p["pekerjaan"]}}</td>
                        <td>{{ $p["alamat"]}}</td>
                        <td>{{ $p["nomorrt"]}}</td>
                        <td>{{ $p["nomorhp"]}}</td>
                        
                        <td>{{ $p["pendidikan"]}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

             