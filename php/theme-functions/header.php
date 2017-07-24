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
                    <a href="TerMITesForElectronautes.php"><img src="img/TerMITeslogoname.png" alt="logo" /></a>
                </div>
                <!-- Navigation bar -->
                <label for="show-menu" class="show-menu"></label>
                <input type="checkbox" id="show-menu" role="button">
                <div id="nav">
                    <ul id="menu">
                        <li><a href="TerMITesForElectronautes.php">home</a></li>
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
                        <li><a href="./sensors.php">sensors</a></li>
                        <li><a href="./data.php">data</a></li>
                        <li><a target="_blank" href="http://miteaav.blogspot.com/">blog</a></li>
                    </ul>
                </div>
            </div>
         </header>
      