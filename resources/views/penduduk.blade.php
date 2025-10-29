@extends('layouts.main')
@section('container')
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>

        <!-- Button trigger modal -->
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">

                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Penduduk</span>

            </button>



        </div>




        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" class="form-control" id="nik" placeholder="6450XXXXX">
                        </div>
                        <div class="mb-3">
                            <label for="nokk" class="form-label">No KK</label>
                            <input type="number" class="form-control" id="nokk" placeholder="6450XXXXX">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="hubungankeluarga" class="form-label">hubungan keluarga</label>
                            <input type="text" class="form-control" id="hubungankeluarga"
                                placeholder="Hubungan Keluarga">
                        </div>
                        <div class="mb-3">
                            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatlahir" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="ttl" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="ttl" placeholder="tanggal bulan tahun">
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="form-label">agama</label>
                            <input type="text" class="form-control" id="agama" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">pekerjaan</label>
                            <input type="text" class="form-control" id="pekerjaan" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" placeholder=""
                                value="Jl. . No. Kelurahan Mekar Sari Kecamatan Balikpapan Tengah.
">
                        </div>
                        <div class="mb-3">
                            <label for="nomorrt" class="form-label">RT</label>
                            <input type="number" class="form-control" id="nomorrt" placeholder="1 - 37">
                        </div>
                        <div class="mb-3">
                            <label for="nomorhp" class="form-label">Nomor HP</label>
                            <input type="number" class="form-control" id="nomorhp" placeholder="08xxxxx">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Foto</label>
                            <input type="date" class="form-control" id="foto" placeholder="" disabled>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary"> simpan data</button>
                    </div>
                </div>
            </div>
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
                        @foreach ($penduduk as $p)
                            <tr>
                                <td><a href="penduduk/{{ $p->id }}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nokk }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->hubungankeluarga }}</td>
                                <td>{{ $p->tempatlahir }} {{ $p->tanggallahir }}</td>
                                <td>{{ $p->agama }}</td>
                                <td>{{ $p->pekerjaan }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->nomorrt }}</td>
                                <td>{{ $p->nomorhp }}</td>

                                <td>{{ $p->pendidikan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
