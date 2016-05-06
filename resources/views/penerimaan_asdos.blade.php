<!DOCTYPE html>
<html>
    <head>
        <title>Terima Pendaftaran Asisten Dosen</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://creaflare.com/asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--<style>
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            .title {
                font-size: 96px;
            }
            p{
                color:red;
                font-size: 20px;
                font-family: serif,sans-serif;
            }
            table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
        </style>-->
    </head>
    <body>
        <nav>
        </nav>
        <?php 
        $nama = Session::get('name');
        $role = Session::get('role');
        if ($role == 2) {
            $jabatan = "Mahasiswa";
        }
        else {
            $jabatan = "Dosen";
        }
        ?>
        <div id="header">
                <div id="navigation">
                <ul>
                    <li><a href="{{url('admin')}}">KEMBALI KE LAMAN ADMIN</a></li>
                    <li><a href="{{url('logout')}}">LOGOUT</a></li>
                    <li><h3>Selamat Datang, <?php echo $nama; ?></h3></li>
                </ul>
                </div>
            </div>
                <table id="keywords" cellpadding="0" cellspacing="0">
                @if(count($ans)==0)
                <center><h1>{{"Tidak terdapat permohonan masuk"}}</h1></center><br>
                @else
                <center><h1>{{"Ada permohonan masuk"}}</h1></center><br>
                @endif
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Mata kuliah</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Periode</th>
                        <th>Persetujuan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ans as $hasil1)
                    <tr>
                        <td>{{$hasil1->nama}}</td>
                        <td>{{$hasil1->nama_mk}}</td>
                        <td>{{$hasil1->kelas}}</td>
                        <td>{{$hasil1->nilai}}</td>
                        <td>{{$hasil1->periode}}</td>
                        <td><a href="{{url('admin/set_asdos/'.$hasil1->id)}}">Setujui</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            @if (session('flag')=="sukses")
                <h1>Persetujuan berhasil dilakukan</h1>
            @elseif (session('flag')=="failed")
                <h1>Persetujuan gagal dilakukan</h1>
            @endif
    </body>
</html>