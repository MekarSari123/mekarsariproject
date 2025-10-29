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
     <!-- Button trigger modal -->
    <div class="card-body">
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    
        <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
        </span>
        <span class="text">Buat Surat</span>
       
    </button>

     
        
    </div> 


    

    <!-- Modal -->
    <form method="post" action="Suratpengantar"> </form>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-3">
            <label for="nomorsurat" class="form-label">Nomor surat</label>
             <input type="number" class="form-control" id="nomorsurat" placeholder="">
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
             <input type="number" class="form-control" id="nik" placeholder="6450XXXXX">
        </div>
        <div class="mb-3">
            <label for="nokk" class="form-label">No KK</label>
             <input type="number" class="form-control" id="nokk" placeholder="6450XXXXX">
        </div>
        <div class="mb-3">
            <label for="namalengkap" class="form-label">Nama Lengkap</label>
             <input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap">
        </div>
        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
             <input type="text" class="form-control" id="jeniskelamin" placeholder="Pria/Wanita">
        </div>
        <div class="mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
             <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir">
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
            <label for="kebangsaan" class="form-label">Kebangsaan</label>
             <input type="text" class="form-control" id="kebangsaan" placeholder="Indonesia">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
             <input type="text" class="form-control" id="alamat" placeholder="Indonesia" value="Jl. . No. Kelurahan Mekar Sari Kecamatan Balikpapan Tengah.
">
        </div>
        <div class="mb-3">
            <label for="rt" class="form-label">RT</label>
             <input type="number" class="form-control" id="rt" placeholder="1 - 37">
        </div>
        <div class="mb-3">
            <label for="NomorHP" class="form-label">Nomor HP</label>
             <input type="number" class="form-control" id="NomorHP" placeholder="08xxxxx">
        </div>
        <div class="mb-3">
            <label for="Maksud" class="form-label">Maksud</label>
            <textarea class="form-control" id="Maksud" rows="9" cols="60" 
></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggalsurat" class="form-label">Tanggal Surat</label>
             <input type="date" class="form-control" id="tanggalsurat" placeholder="hariini" disabled>
        </div>


        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary"><a href="cetak" style="text-decoration: none;">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Cetak Surat</span>
                                    </a></button>
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
                        <th>Nama Lengkap</th>
                        <th>Maksud</th>
                        <th>Tempat tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Nomor HP</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                         <th>Aksi</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Maksud</th>
                        <th>Tempat tanggal Lahir</th>
                        <th>Agama</th>
                        <th>Nomor HP</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ( $suratpengantar as $surat )
                    <tr>
                        <td><a href="cetaksuratketerangan/{{ $surat->id}}" class="btn btn-info btn-circle btn-sm">
                                        <i class="fas fa-print"></i>
                                    </a>
                                    <a href="#" class="btn btn-warning btn-circle btn-sm">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                        </td>
                        <td>{{ $surat->nik}}</td>
                        <td>{{ $surat->nama}}</td>
                        <td>{{ $surat->jenissurat}}</td>
                        <td>{{ $surat->tempatlahir}}, {{ $surat->tanggallahir}}</td>
                        <td>{{ $surat->agama}}</td>
                        <td>{{ $surat->nomorhp}}</td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

             