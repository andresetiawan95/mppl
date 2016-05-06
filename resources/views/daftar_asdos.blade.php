<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Asdos</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://creaflare.com/asset/css/style.css" type="text/css" media="all" />
        <style>
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
        </style>
    </head>
    <body>
        <nav>
            
        </nav>
        <?php 
        $manusia = Session::get('name');
        $role = Session::get('role');
        $flag = Session::get('result');
        if ($role==2) {
            $jabatan = "Mahasiswa";
        }
        else
        {
            $jabatan = "Dosen";
        }
        ?>
            
            <div id="header">
                <div id="navigation">
                <ul>

                    <li><a href="{{url('mahasiswa')}}">KEMBALI</a></li>
                    <li><a href="{{url('logout')}}">LOGOUT</a></li>
                    <li><h3>Selamat Datang, <?php echo $manusia; ?></h3></li>
                </ul>
                </div>
            </div>
                  
            <h1>List Asdos Yang tersedia</h1>
                <center>
                <form name="cari" method="post" action="">
                {{ csrf_field() }}
                @if(count($tmp1)==0)
                <p>{{"Not Found"}}</p>
                @endif
                <select name="id">
                @foreach($tmp1 as $hasil)
                    <option value="{{$hasil->id}}">{{$hasil->nama_mk."  (".$hasil->kelas.")"}}</option>
                @endforeach
                </select>
                <input type="submit" value="Apply"></input>
                </form>
                </center>
                <br>
            @if(Session::has('result'))
                    @if(Session::get('result')=="sukses")
                    
                    <div class="alert alert-success">
                    <center>
                        <h2>Wohoo! {{Session::get('name')}} telah mendaftar sebagai calon asisten dosen!</h2>
                        <h2>Kelas yang dituju: {{Session::get('nama_makul')}} {{Session::get('kelas_makul')}}</h2>
                        <h2>Silahkan menunggu pengumuman di halaman Mahasiswa</h2>
                    </center>
                    </div>
                    <script type="text/javascript">
                        window.alert('Yey! Kamu telah mendaftar sebagai asisten dosen');
                    </script>
                    @elseif(Session::get('result')=="terdaftar")
                    
                    <div class="alert alert-success">
                    <center>
                    <br>
                        <h2>Maaf. Kamu, {{Session::get('name')}}, sudah terdaftar sebagai calon asisten pada mata kuliah</h2>
                        <h2>{{Session::get('nama_makul')}} ({{Session::get('kelas_makul')}})</h2>
                    </center>
                    </div>
                    <script type="text/javascript">
                        window.alert('Kamu telah terdaftar sebagai calon asisten dosen. Silahkan menunggu pengumuman :)');
                    </script>
                    @else
                    <div class="alert alert-success">
                        <h1>Status Pendaftaran : Gagal</h1><br>
                    </div>
                    @endif
                @endif
    </body>
</html>