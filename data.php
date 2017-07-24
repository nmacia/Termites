<!--
 Project:       terMITes
 Authors:       Nuria Macia
                Juanita Devis
 Version:       1.1
 Date:          March 2017
 Last modified: April 2017
 -->

<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TerMITes</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">  

        <link href="img/TerMITes27x32.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="./style/bootstrap.min.css">
        <!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700,800,900"-->
        <!--link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300"-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Amatic+SC">
        
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style/style.css">

        <!-- JS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.rawgit.com/monkeecreate/jquery.simpleWeather/master/jquery.simpleWeather.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/date.js"></script>
        <script src="https://www.gstatic.com/firebasejs/3.7.8/firebase.js"></script>
        <script>
            var bleep = new Audio();
            bleep.src = "audio/Silly_Snoring-Snore_Man-618028931.mp3"
        </script>

        <!--script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"</script> 
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.simpleWeather/3.1.0/jquery.simpleWeather.min.js"></script-->        
    </head>
    
    <body class="no-scrolling">

        <!-- HEADER -->

        <header>
            <div class="container">
                <!-- Logo -->
                <div class="brand">
                    <a href="TerMITesForElectronautes.html"><img src="img/TerMITeslogoname.png" alt="logo" /></a>
                </div>
                <!-- Navigation bar -->
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div id="nav">
                    <ul id="menu">
                        <li><a href="TerMITesForElectronautes.html">home</a></li>
                        <li><a href="#">fun fact of the week</a></li>
                        <li><a href="#">classrooms</a>
                            <ul class="hidden-nav">
                                <li><a href="#">ESFINX</a></li>
                                <li><a href="">KREMLIN</a></li>
                                <li><a href="">BIG BEN</a></li>
                                <li><a href="">MOAIS</a></li>
                                <li><a href="">ATONIUM</a></li>
                                <li><a href="">KHEOPS</a></li>
                            </ul>
                        </li>
                        <li><a href="./sensors.html">sensors</a></li>
                        <li><a href="./data.html">data</a></li>
                        <li><a target="_blank" href="http://miteaav.blogspot.com/">blog</a></li>
                    </ul>
                </div>
            </div>
         </header>
      
        <!-- MAIN -->

        <main>  
            <div class="container no-padding">
                <div class="block no-margin clearfix">
                    <div class="col-xs-12 col-md-7 no-padding">
                        <iframe src="http://replace.media.mit.edu/marmites/index.html" width="100%" height="600">
                             <p>Your browser does not support iframes.</p>
                        </iframe>
                    </div>
                    <div class="col-xs-12 col-md-5 no-padding">
                        <div>
                            <div class="welcome-weather-date">      
                                <span id="getDayOfWeek"></span>
                                <span id="getDate"></span>
                                <div id="weather" class="weather"></div>
                            </div>
                        
                            <div class="boxbuttonssurvey  boxsensors">
                                   
                                <!-- ROW 1 -->   
                                <div class="row-sensor"> 
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="presence" value="presence" onclick="showSensorValue('sensor-presence');" />
                                            <figure>
                                                <img src="./img/sensors/presence.png" alt="Presence" />
                                                <figcaption>Presence</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="motion" value="motion" onclick="showSensorValue('sensor-motion');" />
                                            <figure>
                                                <img src="./img/sensors/motion.png" alt="Motion" />
                                                <figcaption>Motion</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="window" value="window" onclick="showSensorValue('sensor-window');" />
                                            <figure>
                                                <img class='img-window-sensor' src="./img/sensors/window.png" alt="Window" />
                                                <figcaption>Window</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                </div>

                                <!-- ROW 2 -->   
                               <div class="row-sensor">
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="door" value="door" onclick="showSensorValue('sensor-door');" />
                                            <figure>
                                                <img src="./img/sensors/door.png" alt="I feel awesome." />
                                                <figcaption>Door</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="light" value="light" onclick="showSensorValue('sensor-light');" />
                                            <figure>
                                                <img src="./img/sensors/light.png" alt="I feel energetic." />
                                                <figcaption>Light</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="curtains" value="curtains" onclick="showSensorValue('sensor-curtains');" />
                                            <figure>
                                                <img src="./img/sensors/curtains.png" alt="I feel normal." />
                                                <figcaption>Curtains</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                </div>

                                <!-- ROW 3 -->                           
                                <div class="row-sensor">
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="temparature" value="temperature" onclick="showSensorValue('sensor-temperature');" />
                                            <figure>
                                                <img src="./img/sensors/temperature.png" alt="Temperature" />
                                                <figcaption>Temperature</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="co2" value="co2" onclick="showSensorValue('sensor-co2');" />
                                            <figure>
                                                <img src="./img/sensors/co2.png" alt="CO2" />
                                                <figcaption>CO2</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                    <div class="button-sensor">
                                        <label>
                                            <input type="radio" name="sensor" id="humidity" value="humidity" onclick="showSensorValue('sensor-humidity');" />
                                            <figure>
                                                <img src="./img/sensors/humidity-2.png" alt="Humidity" />
                                                <figcaption>Humidity</figcaption>
                                            </figure>
                                        </label>
                                    </div>
                                </div>
                                
                            </div>       
                        </div>   
                    </div>
                </div>
            </div>       
        </main>

        <?php include './php/theme-functions/footer.php';?>
        
    </body>    