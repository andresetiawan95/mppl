<!DOCTYPE html>
<html>
    <head>
        <title>Sistem Informasi Asisten Dosen - Login</title>

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
            .title {
                font-size: 96px;
            }
            p{
                color:red;
                font-size: 20px;
                font-family: serif,sans-serif;
            }
        </style>-->
    </head>
    <body>
        <nav>
            
        </nav>
        <h1>Selamat Datang di SI Asisten Dosen</h1><br>
                <div id="login">
                <p>{{ ($message != '' ? $message : '') }}</p>
                <form name="login" method="post" action="">
                {{ csrf_field() }}
                <h3>NRP/NIP</h3><br>
                <input type="text" name="username"><br><br>
                <h3>Password</h3><br>
                <input type="password" name="password"><br><br>
                <input type="submit" value="LOGIN">
                </form>
                </div>
            
    </body>
</html>