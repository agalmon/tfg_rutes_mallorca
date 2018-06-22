<?php
  //phpinfo();
?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>

  </head>
  <body class="bg">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">TFG Rutes Mallorca</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="./">Inici</a></li>
            <li><a href="./aboutus.html">Sobre el TFG</a></li>
          </ul>
        </div>
      </div>
    </nav>



    <center>
    <div class="coordinates">
      <p>
        Origen: <?php $_POST['origen'];?><br>
        Destí: <?php $_POST['desti'];?><br>
      </p>
    </div>
    <div id="map" style="width: 75%; height: 400px;"></div><br><br>
    <div id="elevation_chart" style="width: 75%; height: 200px;"></div>
    </center>
    <script>
    google.load('visualization', '1', {packages: ['columnchart']});
      function initMap() {
        var path=[
          {lat: 39.490867,lng:2.891666},{lat: 39.490929,lng:2.891749},{lat: 39.491074,lng:2.891995},{lat: 39.491305,lng:2.892453},{lat: 39.491371,lng:2.892605},{lat: 39.491718,lng:2.892898},{lat: 39.492104,lng:2.893188},{lat: 39.492227,lng:2.893275},{lat: 39.492331,lng:2.893348},{lat: 39.492514,lng:2.893477},{lat: 39.492603,lng:2.893499},{lat: 39.492742,lng:2.893505},{lat: 39.492931,lng:2.893513},{lat: 39.493026,lng:2.893517},{lat: 39.492563,lng:2.894453},{lat: 39.493048,lng:2.895004},{lat: 39.493366,lng:2.895379},{lat: 39.493978,lng:2.896087},{lat: 39.494109,lng:2.896226},{lat: 39.494167,lng:2.896926},{lat: 39.494275,lng:2.897572},{lat: 39.494451,lng:2.898509},{lat: 39.494507,lng:2.898909},{lat: 39.494608,lng:2.899450},{lat: 39.494746,lng:2.899966},{lat: 39.494962,lng:2.900708},{lat: 39.495071,lng:2.901082},{lat: 39.495560,lng:2.902163},{lat: 39.495843,lng:2.902700},{lat: 39.496911,lng:2.904419},{lat: 39.497620,lng:2.905791},{lat: 39.498282,lng:2.907500},{lat: 39.498400,lng:2.907639},{lat: 39.500006,lng:2.911341},{lat: 39.500721,lng:2.912662},{lat: 39.501986,lng:2.916817},{lat: 39.502120,lng:2.917438},{lat: 39.502135,lng:2.917519},{lat: 39.502342,lng:2.918109},{lat: 39.502424,lng:2.918335},{lat: 39.502506,lng:2.918416},{lat: 39.502765,lng:2.918628},{lat: 39.502978,lng:2.918776},{lat: 39.503442,lng:2.919119},{lat: 39.503892,lng:2.919716},{lat: 39.504000,lng:2.919904},{lat: 39.504156,lng:2.920262},{lat: 39.504281,lng:2.920490},{lat: 39.504312,lng:2.920537},{lat: 39.504418,lng:2.920608},{lat: 39.504975,lng:2.920904},{lat: 39.505031,lng:2.920955},{lat: 39.505440,lng:2.922108},{lat: 39.505458,lng:2.922174},{lat: 39.505770,lng:2.922214},{lat: 39.506955,lng:2.922305},{lat: 39.508802,lng:2.922518},{lat: 39.508971,lng:2.922498},{lat: 39.509274,lng:2.922512},{lat: 39.509522,lng:2.922607},{lat: 39.509683,lng:2.922709},{lat: 39.510097,lng:2.923092},{lat: 39.510255,lng:2.923264},{lat: 39.510352,lng:2.923401},{lat: 39.510555,lng:2.923754},{lat: 39.510767,lng:2.924211},{lat: 39.510921,lng:2.924451},{lat: 39.511076,lng:2.924748},{lat: 39.511223,lng:2.924916},{lat: 39.511558,lng:2.925223},{lat: 39.511672,lng:2.925369},{lat: 39.511979,lng:2.926100},{lat: 39.512092,lng:2.926293},{lat: 39.512185,lng:2.926381},{lat: 39.512473,lng:2.926567},{lat: 39.512631,lng:2.926599},{lat: 39.513386,lng:2.926598},{lat: 39.513569,lng:2.926641},{lat: 39.513647,lng:2.926696},{lat: 39.513764,lng:2.926823},{lat: 39.514310,lng:2.927471},{lat: 39.514615,lng:2.927833},{lat: 39.514826,lng:2.928060},{lat: 39.514905,lng:2.928048},{lat: 39.515076,lng:2.927959},{lat: 39.515141,lng:2.927952},{lat: 39.515222,lng:2.928028},{lat: 39.515305,lng:2.928168},{lat: 39.515368,lng:2.928222},{lat: 39.515408,lng:2.928231},{lat: 39.515477,lng:2.928212},{lat: 39.516325,lng:2.927737},{lat: 39.516927,lng:2.927517},{lat: 39.517023,lng:2.927512},{lat: 39.517161,lng:2.927434},{lat: 39.517327,lng:2.927446},{lat: 39.517493,lng:2.927407},{lat: 39.517597,lng:2.927415},{lat: 39.517794,lng:2.927480},{lat: 39.518135,lng:2.927763},{lat: 39.518226,lng:2.927967},{lat: 39.518361,lng:2.928409},{lat: 39.518402,lng:2.928446},{lat: 39.518475,lng:2.928447},{lat: 39.518538,lng:2.928403},{lat: 39.518600,lng:2.928284},{lat: 39.518690,lng:2.927972},{lat: 39.518712,lng:2.927780},{lat: 39.518681,lng:2.927455},{lat: 39.518710,lng:2.927350},{lat: 39.518755,lng:2.927331},{lat: 39.518858,lng:2.927380},{lat: 39.518923,lng:2.927349},{lat: 39.519014,lng:2.927270},{lat: 39.518931,lng:2.926971},{lat: 39.518854,lng:2.926670},{lat: 39.518730,lng:2.926191},{lat: 39.518651,lng:2.925877},{lat: 39.518617,lng:2.925598},{lat: 39.518582,lng:2.925333},{lat: 39.518579,lng:2.925156},{lat: 39.518582,lng:2.925005},{lat: 39.518615,lng:2.924726},{lat: 39.518685,lng:2.924396},{lat: 39.518733,lng:2.924221},{lat: 39.518857,lng:2.924327},{lat: 39.518806,lng:2.924462},{lat: 39.518790,lng:2.924551},{lat: 39.518797,lng:2.924606},{lat: 39.518822,lng:2.924654},{lat: 39.518800,lng:2.924708},{lat: 39.518809,lng:2.924765},{lat: 39.518847,lng:2.924823},{lat: 39.518996,lng:2.924972},{lat: 39.519023,lng:2.925242},{lat: 39.519087,lng:2.925432},{lat: 39.519119,lng:2.925455},{lat: 39.519131,lng:2.925485},{lat: 39.519093,lng:2.925511},{lat: 39.519093,lng:2.925534},{lat: 39.519098,lng:2.925575},{lat: 39.519077,lng:2.925621},{lat: 39.519069,lng:2.925682},{lat: 39.519083,lng:2.925764},{lat: 39.519108,lng:2.925821},{lat: 39.519214,lng:2.926234},{lat: 39.519305,lng:2.926211},{lat: 39.519364,lng:2.926239},{lat: 39.519464,lng:2.926251},{lat: 39.519518,lng:2.926261},{lat: 39.519591,lng:2.926285},{lat: 39.519661,lng:2.926333},{lat: 39.520305,lng:2.926915},{lat: 39.520774,lng:2.927333},{lat: 39.520926,lng:2.927470},{lat: 39.521406,lng:2.927835},{lat: 39.521645,lng:2.928060},{lat: 39.521958,lng:2.928351},{lat: 39.522106,lng:2.928529},{lat: 39.522316,lng:2.928812},{lat: 39.522585,lng:2.929237},{lat: 39.522755,lng:2.929533},{lat: 39.522925,lng:2.929832},{lat: 39.523086,lng:2.930027},{lat: 39.523267,lng:2.930223},{lat: 39.523292,lng:2.930273},{lat: 39.523303,lng:2.930337},{lat: 39.523288,lng:2.930389},{lat: 39.523332,lng:2.930466},{lat: 39.523337,lng:2.930512},{lat: 39.523342,lng:2.930568},{lat: 39.523380,lng:2.930616},{lat: 39.523403,lng:2.930658},{lat: 39.523404,lng:2.930715},{lat: 39.523431,lng:2.930766},{lat: 39.523458,lng:2.930796},{lat: 39.523472,lng:2.930873},{lat: 39.523501,lng:2.930897},{lat: 39.523523,lng:2.930905},{lat: 39.523548,lng:2.930965},{lat: 39.523558,lng:2.931033},{lat: 39.523624,lng:2.931081},{lat: 39.523653,lng:2.931188},{lat: 39.523680,lng:2.931227},{lat: 39.523679,lng:2.931301},{lat: 39.523683,lng:2.931357},{lat: 39.523895,lng:2.931371},{lat: 39.524061,lng:2.931348},{lat: 39.524223,lng:2.931327},{lat: 39.524550,lng:2.931274},{lat: 39.524775,lng:2.931266},{lat: 39.525003,lng:2.931250},{lat: 39.525093,lng:2.931234},{lat: 39.525169,lng:2.931213},{lat: 39.525235,lng:2.931196},{lat: 39.525276,lng:2.931225},{lat: 39.525326,lng:2.931236},{lat: 39.525345,lng:2.931260},{lat: 39.525420,lng:2.931263},{lat: 39.525491,lng:2.931303},{lat: 39.525517,lng:2.931280},{lat: 39.525589,lng:2.931071},{lat: 39.525604,lng:2.930986},{lat: 39.525629,lng:2.930937},{lat: 39.525675,lng:2.930912},{lat: 39.525719,lng:2.930912},{lat: 39.525765,lng:2.930867},{lat: 39.525796,lng:2.930825},{lat: 39.525800,lng:2.930739},{lat: 39.525808,lng:2.930700},{lat: 39.525863,lng:2.930597},{lat: 39.525928,lng:2.930502},{lat: 39.525929,lng:2.930410},{lat: 39.526115,lng:2.930192},{lat: 39.526185,lng:2.930143},{lat: 39.526204,lng:2.930041},{lat: 39.526274,lng:2.929962},{lat: 39.526346,lng:2.929869},{lat: 39.526320,lng:2.929749},{lat: 39.526335,lng:2.929593},{lat: 39.526373,lng:2.929457},{lat: 39.526410,lng:2.929407},{lat: 39.526477,lng:2.929346},{lat: 39.526878,lng:2.929058},{lat: 39.526952,lng:2.928977},{lat: 39.527003,lng:2.928899},{lat: 39.527045,lng:2.928708},{lat: 39.527070,lng:2.928537},{lat: 39.527082,lng:2.928380},{lat: 39.527113,lng:2.928138},{lat: 39.527145,lng:2.927865},{lat: 39.527178,lng:2.927571},{lat: 39.527229,lng:2.927147}
        ];

        var primer = path[0];
        var darrer = path[path.length-1];

        var lat_mitj = (primer.lat + darrer.lat) /2;
        var lng_mitj = (primer.lng + darrer.lng) /2;

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: ({lat: lat_mitj, lng: lng_mitj}),
          mapTypeId: 'terrain'
        }
        );

        var dibuixRuta = new google.maps.Polyline({
          path: path,
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });
        dibuixRuta.setMap(map);

        var elevator = new google.maps.ElevationService;
        displayPathElevation(path, elevator, map);

      }
      function displayPathElevation(path, elevator, map) {
            // Display a polyline of the elevation path.
            new google.maps.Polyline({
              path: path,
              strokeColor: '#0000CC',
              strokeOpacity: 0.4,
              map: map
            });

            // Create a PathElevationRequest object using this array.
            // Ask for 256 samples along that path.
            // Initiate the path request.
            elevator.getElevationAlongPath({
              'path': path,
              'samples': 512
            }, plotElevation);
          }

          // Takes an array of ElevationResult objects, draws the path on the map
          // and plots the elevation profile on a Visualization API ColumnChart.
          function plotElevation(elevations, status) {
            var chartDiv = document.getElementById('elevation_chart');
            if (status !== 'OK') {
              // Show the error code inside the chartDiv.
              chartDiv.innerHTML = 'Cannot show elevation: request failed because ' +
                  status;
              return;
            }
            // Create a new chart in the elevation_chart DIV.
            var chart = new google.visualization.ColumnChart(chartDiv);

            // Extract the data from which to populate the chart.
            // Because the samples are equidistant, the 'Sample'
            // column here does double duty as distance along the
            // X axis.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Sample');
            data.addColumn('number', 'Elevation');
            for (var i = 0; i < elevations.length; i++) {
              data.addRow(['', elevations[i].elevation]);
            }

            // Draw the chart using the data within its DIV.
            chart.draw(data, {
              height: 150,
              legend: 'none',
              titleY: 'Elevation (m)'
            });
          }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPNfINwfd2eiD21hMFGDxItRLm6gR7Grc&callback=initMap"
    async defer></script>

  </body>
</html>
