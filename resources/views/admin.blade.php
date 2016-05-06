<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Dosen</title>

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

                    <li><a href="{{url('admin/get_asdos')}}">PENERIMAAN ASDOS</a></li>
                    <li><a href="{{url('logout')}}">LOGOUT</a></li>
                    <li><h3>Selamat Datang, <?php echo $nama; ?></h3></li>
                </ul>
                </div>
            </div>
                <h1>Cari Periode</h1>
                <center>
                <form name="cari" method="post" action="">
                {{ csrf_field() }}
                <select name="periode">
                @if($res)
                @foreach($res as $hasil)
                    <option value="{{$hasil}}">{{$hasil}}</option>
                @endforeach
                @endif
                </select>
                <input type="submit" value="cari"></input>
                </form>
                </center>
                <h1>List Asisten Dosen</h1>
                <table id="keywords" cellspacing="0" cellpadding="0">
                    <thead>
                    <tr>
                        <th>nama</th>
                        <th>mata kuliah</th>
                        <th>kelas</th>
                        <th>periode</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tmp1 as $hasil1)
                    <tr>
                        <td>{{$hasil1->nama}}</td>
                        <td>{{$hasil1->nama_mk}}</td>
                        <td>{{$hasil1->kelas}}</td>
                        <td>{{$hasil1->periode}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            
    </body>
</html>