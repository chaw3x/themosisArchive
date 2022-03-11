<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            height: 90vh;
        }

        #app{
            width: 100%;
            height: 100%;
            padding: 6em 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .head{
            text-align: center;
            margin-bottom: 3em;
        }

        #logo{
            width: 100px;
            height: 100px;
            margin: 0 auto;
        }

        .themosis {
            color: #253143;
            font-size: 48px;
            font-size: 3em;
            font-weight: 600;
            line-height: 100%;
            margin: 16px 0 0;
        }

        .baseline {
            color: #666666;
            font-size: 13px;
            font-size: 0.8125em;
            line-height: 100%;
            margin: 0;
            text-transform: uppercase;
        }

        .links {
            text-align: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .links li {
            display: inline;
            margin: 0 16px;
        }

        .links li a, .links li a:active, .links li a:visited {
            color: #666666;
            font-size: 16px;
            font-size: 1em;
            transition: color .1s ease-in-out;
            text-transform: uppercase;
            text-decoration: none;
        }

        .links li a:hover {
            color: #1FBDA2;
        }
    </style>
    <?php wp_head(); ?>
</head>
<body>
<div id="app">
    <div class="content">
        <div class="head">            
            <h1 class="themosis">Listado</h1>            
        </div>
        <div>   
            @isset($listado)         
            <ul>
            @foreach($listado as $value)
            <li>
                {{$value["rut"]}}
                {{$value["nombre"]}}
                {{$value["correo"]}}
                {{$value["latitud"]}}
                {{$value["longitud"]}}
            </li>            
            @endforeach
            </ul>
            @endisset
        </div>
        <ul class="links">            
            <li><a href="{{url('/')}}" title="Welcome">Regresar</a></li>
        </ul>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>