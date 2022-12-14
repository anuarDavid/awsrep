
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

    <link rel="stylesheet" href="estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <title>Página Web DE</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        #map { height: 300px; }
    </style>

    


                 <script type="text/javascript">


                function tiempoReal()
                {
                        var tabla = $.ajax({
                                url:'consulta.php',
                                dataType:'text',
                                async:false
                        }).responseText;

                        document.getElementById("miTabla").innerHTML = tabla;
                        
                        console.log(document.getElementById("miTabla").innerHTML);
                        
                        var lat=parseFloat(document.getElementById("lat").innerHTML);
                        var lon=parseFloat(document.getElementById("lon").innerHTML);
                        

                }
                setInterval(tiempoReal, 5000);







                </script>
</head>
<body>

  <div id="lienzo">
    <header >
      <h1 id= titulo >Cosulta GPS Sitema de Rastreo</h1>

    </header>
    <nav>
        <section id="miTabla">

            <table style = "width: 500px;" >

            </table>
          </section>
          <aside>
          <h2>Cartografía para monitoreo</h2>
            <div id="map"></div>

            <script>

               var map = L.map('map').setView([lat, lon], 13);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '© OpenStreetMap'
                }).addTo(map);

            var polylinePoints = [
                [11.016550, -74.849849],
                [11.017007, -74.851782],
                [11.017154, -74.853788],
                [11.016949, -74.855703],
                [11.016638, -74.858026]
            ];            
      
            var polyline = L.polyline(polylinePoints).addTo(map);  



              </script>

          </aside>

    </nav>


  </div>
  


<footer>
    <h3>Universidad del norte</h3>
    <h4>
        David A. Arrieta Ricardo,
        Jhonatan A. Chasoy Vasquez,
        Sebastian Duque Mantilla,
        Anuar D. Moreno Navarro
    </h4>
</footer>
</html>