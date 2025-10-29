@extends('layouts.main')
@section('container')
    <h1 class="h3 mb-2 text-gray-800">Buat Surat Pengantar</h1>
    <p class="mb-4">--- <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pemohon</h6>
        </div>
        <div class="card-body">
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
                <input type="text" class="form-control" id="alamat" placeholder="Indonesia"
                    value="Jl. . No. Kelurahan Mekar Sari Kecamatan Balikpapan Tengah.
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
                <textarea class="form-control" id="Maksud" rows="9" cols="60"></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggalsurat" class="form-label">Tanggal Surat</label>
                <input type="date" class="form-control" id="tanggalsurat" placeholder="hariini" disabled>
            </div>
        </div>

    </div>
    <div class="my-2"></div>
    <a href="cetak" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Cetak Surat</span>
    </a>
@endsection
