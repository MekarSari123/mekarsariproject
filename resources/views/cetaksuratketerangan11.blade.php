<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Contoh</title>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>

    <style>
        @media print {
            body {
                font-family: arial;
                margin: 20px;
                padding: 20px;
                background-color: blue;
            }

            header,
            footer {
                display: none;
                /* Sembunyikan header dan footer saat cetak */
            }

            .content {
                margin-top: 20px;
            }

            .no-print {
                display: none;
                /* Sembunyikan elemen yang tidak perlu dicetak */
            }

            @page {
                size: 21cm 29, 7cm;
                /* Ukuran kertas F4 */
                margin: 5mm;
                /* Margin 2cm */
            }
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 13px;
        }

        td {
            height: 20px;
        }



        .garis-ganda {
            border-bottom: 1px;
            border-style: double;
        }
    </style>

</head>

<body>
    <div id="exportContent" style="font-family: arial;">

        <table align="center" border="0" cellpadding="1" style="width: 700px;">


            <tr>
                <td style="border-bottom:2px solid black;"><img src="{{ asset('img/logo pemkot.jpg') }}"
                        alt="Teks Alternatif" width="90" height="110">
                </td>

                <td colspan="2" style="border-bottom:2px solid black;">

                    <div align="center"> <span style="font-family: arial; font-size: x-large;">PEMERINTAH KOTA
                            BALIKPAPAN <br>
                            <b>KECAMATAN BALIKPAPAN TENGAH<br>KELURAHAN MEKAR SARI<br></b></span>
                        <span style="font-family: arial; ">Jl. Jend. A. Yani RT. 33 No.16 Balikpapan, No Telp.
                            082154305322, mekarsari.balikpapan.go.id

                        </span>
                    </div>
                </td>

            </tr>

            <tr>
                <td colspan="3">
                    <br>
                    <div align="center" style="font-size: medium; font-family: arial;">
                        <span><u><b>SURAT KETERANGAN </b></u></span><br><span style=" font-size: small;">Nomor: </span>
                    </div>

                </td>
            </tr>

            <tr>
                <td><br></td>
                <td></td>
            </tr>
        </table>
        <table align="center" border="0" cellpadding="1" style="width: 700px;">
            <tr>

                <td colspan="4">
                    Yang bertanda tangan di bawah ini :</td>


            </tr>

            <tr>
                <td style="width:3%">
                    1.</td>
                <td style="width:20%">
                    Nama</td>
                <td style="width:5%">:</td>
                <td style="width:70%"></td>
            </tr>
            <tr>
                <td style="width:3%">
                    2.</td>
                <td style="width:20%">
                    Jabatan</td>
                <td style="width:5%">:</td>
                <td style="width:70%"></td>
            </tr>
            <tr>
                <td colspan="4">Dengan ini menerangkan bahwa :</td>


            </tr>

            <tr>
                <td style="width:3%">
                    1.</td>
                <td style="width:20%">
                    Nama</td>
                <td style="width:5%">:</td>
                <td style="width:70%">{{ $surat->nama }}</td>
            </tr>
            <tr>
                <td>
                    2.</td>
                <td>Tempat/ Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $surat->tempatlahir }}, {{ $surat->tanggallahir }}</td>
            </tr>
            <tr>
                <td>
                    3.</td>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $surat->nik }}</td>
            </tr>
            <tr>
                <td>
                    4.</td>
                <td>Kebangsaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    5.</td>
                <td>Agama</td>
                <td>:</td>
                <td>{{ $surat->agama }}</td>
            </tr>
            <tr>
                <td>
                    6.</td>
                <td>Pekerjaan</td>
                <td>:</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    7.</td>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $surat->nomorhp }}</td>
            </tr>
            <tr>
                <td>
                    8.</td>
                <td>Nomor HP</td>
                <td>:</td>
                <td>{{ $surat->nomorhp }}</td>
            </tr>

            <tr>
                <td>9.
                </td>
                <td>Maksud tujuan</td>
                <td>:</td>
                <td>{{ $surat->jenissurat }}</td>
            </tr>

            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td colspan="3">
                    Demikian pengantar ini diberikan sebagai bahan proses selanjutnya</td>

            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td>
                </td>
                <td></td>
                <td></td>
                <td style="padding-left: 150px;">
                    <center>an. Lurah Mekar Sari</center>
                </td>

            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td><br></td>
                <td></td>
            </tr>
            <tr>
                <td>
                </td>
                <td></td>
                <td></td>
                <td style="padding-left: 150px;">
                    <center>BAMBANG WIDIYANTO</center>
                </td>
            </tr>

        </table>
    </div>


    <center>
        <button class="no-print" onclick="window.print()">Cetak Surat PDF</button>

    </center>


</body>

</html>
