<!DOCTYPE html>
<html>
    <head>
        <title>Mahasiswa</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://creaflare.com/asset/css/style.css" type="text/css" media="all" />
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
            .title2 {
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
        </style> -->
    </head>
    <body>
        <nav>
    <?php $koplak = Session::get('name'); 
        $role = Session::get('role');
        if ($role==2) {
            $roleword = "Mahasiswa";
        }
        else
        {
            $roleword = "Dosen";
        }
    ?>        
        </nav>
        <div id="header">
            <div id="navigation">
            <ul>

                <li><a href="{{url('mahasiswa/daftar')}}">LINK DAFTAR ASDOS</a></li>
                <li><a href="{{url('logout')}}">LOGOUT</a></li>
                <li><h3>Selamat Datang, <?php echo $koplak; ?></h3></li>
            </ul>
            </div>
        </div>
            <h1>Hi, <?php echo $koplak." sebagai ".$roleword; ?></h1><br>
                <h1>CARI PERIODE</h1><br>
                <form name="cari" method="post" action="">
                {{ csrf_field() }}
                
                <br>
                <center>
                <select name="periode">
                @if($res)
                @foreach($res as $hasil)
                    <option value="{{$hasil}}">{{$hasil}}</option>
                @endforeach
                @endif
                </select>
                <input type="submit" value="cari"></input>
                </center>
                </form>

                <center><h2>Daftar Asisten Dosen</h2></center><br>
                
                <table id="keywords" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Mata Kuliah</th>
                        <th>Kelas</th>
                        <th>Periode</th>
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