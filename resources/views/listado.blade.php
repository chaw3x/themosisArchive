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
            overflow: auto;
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
    <style>
        /* Set the size of the div element that contains the map */
        #map {
          height: 400px;
          /* The height is 400 pixels */
          width: 100%;
          /* The width is the width of the web page */
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body>
<div id="app">
    <div class="content">
        <div class="head">            
            <h1 class="themosis">Listado</h1>            
        </div>
        <div style="margin-top:300px">               
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar_dato">
                Agregar
            </button>
            @isset($listado)         
            <!-- <ul> -->
                <table>
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Latitud</th>
                            <th>Longitud</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
            @foreach($listado as $value)
            <!-- <li>
                {{$value["rut"]}}
                {{$value["nombre"]}}
                {{$value["correo"]}}
                {{$value["latitud"]}}
                {{$value["longitud"]}}                
            </li>            
            <li>
                <button onclick=clickaction(this) id="{{$value['latitud']}}, {{$value['longitud']}}" >Ver Mapa</button>
            </li> -->
                    <tr>
                        <td>
                            {{$value["rut"]}}
                        </td>
                        <td>
                            {{$value["nombre"]}}
                        </td>
                        <td>
                            {{$value["correo"]}}
                        </td>
                        <td>
                            {{$value["latitud"]}}
                        </td>
                        <td>
                            {{$value["longitud"]}}
                        </td>
                        <td>
                            <button onclick=clickaction(this) id="{{$value['latitud']}}, {{$value['longitud']}}" >Ver Mapa</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- </ul> -->
            @endisset
        </div>
        <div id="map"></div>             
        <!-- Modal -->
        <div class="modal fade" id="agregar_dato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <div class="run-information">
                  <ul>                  
                    <li><strong>rut:</strong> <?php the_field('rut'); ?></li>
                    <li><strong>nombre:</strong> <?php the_field('nombre'); ?></li>
                    <li><strong>correo:</strong> <?php the_field('correo'); ?></li>
                    <li><strong>latitud:</strong> <?php the_field('latitud'); ?></li>
                    <li><strong>longitud:</strong> <?php the_field('longitud'); ?></li>
                  </ul>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
              </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIl2Yzk7kT1ZAIgwpR6GTksvq2RdbdrwI&callback=initMap&libraries=&v=weekly" 
        async></script>
        <script>
            let k=[];
            let lat='-25.344';
            let lon='131.036';
            function clickaction(b){
                 k=b.id.split(', ');                        
                if (k.length==2) {                    
                    lat=k[0];                
                    lon=k[1];                
                    initMap(lat,lon);
                }
            }            
                        
            // Initialize and add the map
            let lat2;
            let lon2;
            function initMap(lat2='',lon2='') {
                // The location of Uluru                
                 lat=-25.344;
                 if (lat2!='') {
                    lat=parseFloat(lat2);
                 }
                 lon=131.036;
                 if (lon2!='') {
                    // alert(lon2);
                    lon=parseFloat(lon2);
                    // alert(lon);
                 }
                // const uluru = { lat: -25.344, lng: 131.036 };         
                const uluru = { lat: lat, lng: lon };            
                // The map, centered at Uluru            
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 7,
                    center: uluru,
                });
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
            
        </script>
        
        <ul class="links">            
            <li><a href="{{url('/')}}" title="Welcome">Regresar</a></li>
        </ul>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>