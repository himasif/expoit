<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expo IT 2019 Mail</title>

    <style type="text/css">
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        body{
            color: #062639;
            font-size: 14px;
            line-height: 1.6em;
            background-color: #FAFAFA;
            padding: 3%;
            font-family:proxima_nova,'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';
        }
        button{
            padding: 18px 35px;
            background-color: #E7301C;
            border-radius: 3px;
            border: 0;
            color: #FFF;
            margin: 30px auto;
            font-family:proxima_nova,'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';
            font-size: 15px;
        }
        a{
            color: #062639;
            font-weight: 500;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
        table{
            width: 100%;
        }
        table td{
            font-family:proxima_nova,'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';
        }
        table td:first-child{
            font-weight: 600;
        }
        table td:nth-child(even){
            width: 30px;
            text-align: center;
        }
        hr{
            margin: 15px 0;
            opacity: .2;
        }
        .card{
            background-color: #FFF;
            width: 450px;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
            border-radius: 5px;
            color: #8696A7;
            border: 1px solid #e7e7e7;
            font-family:proxima_nova,'Open Sans','Lucida Grande','Segoe UI',Arial,Verdana,'Lucida Sans Unicode',Tahoma,'Sans Serif';
        }
        .icon{
            height: 10px;
            margin-right: 5px;
            position: relative;
            top: 1px;
            margin-top: 5px;
        }
        .separator{
            width: 15px;
            display: inline-block
        }
        .alert{
            margin-top: 13px;
            padding: 10px 12px;
            font-weight: 500;
            background-color: #f8f8f8;
            line-height: 1.5em;
            border: 1px solid #eee;
            color: #aaa;
            font-size: 10.5px;
            border-radius: 3px;
            -moz-border-radius: 3px;
            -webkit-border-radius: 3px;
        }
        .alert a{
            color: #aaa;
            font-weight: 700;
        }
        #content{
            padding: 40px;
        }
        #support{
            padding: 20px 40px;
            margin-top: 15px;
            font-size: 12px;
        }
        #support{
            padding: 20px 40px;
            margin-top: 15px;
            font-size: 12px;
        }
        #links{
            margin-top: 15px;
            font-size: 12px;
            background-color: transparent;
            border: 0;
            text-align: center;
        }

    </style>
</head>
<body>
<div id="content" class="card">
    <div style="text-align: center; margin-top: 20px; margin-bottom: 60px">
        <img src="{{ asset('/logo.png') }}" height="200px">
    </div>
    @yield('content')
    <hr>
    <p><b>Panitia Expo IT 2019</b></p>
</div>

</body>
</html>