<!DOCTYPE HTML>
<html lang="vn">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Vòng kiệt sức</title>
    <script>
        document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';
    </script>
    <link rel="stylesheet" media="screen" href="bootstrap3.0.0/css/bootstrap.min.css?version=1" />
    <script src="scripts/jquery-1.10.2.min.js?version=1"></script>
    <script src="bootstrap3.0.0/js/bootstrap.min.js?version=1"></script>
    <!-- count down -->
    <link rel="stylesheet" href="FlipClock/css/flipclock.css">
    <script src="FlipClock/js/flipclock/libs/base.js"></script>
    <script src="FlipClock/js/flipclock/flipclock.js"></script>
    <script src="FlipClock/js/flipclock/faces/counter.js"></script>
    <!-- my scripts -->
    <link rel="stylesheet" media="screen" href="css/style.css" />
    <script src="scripts/final.js?version=1"></script>
    </head>
<body class="final">
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1>VÒNG KIỆT SỨC</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="left" tabindex="1"></textarea>
                <textarea class="right" tabindex="6"></textarea>
            </div>
            <div class="col-md-6">
                <textarea class="left" tabindex="11"></textarea>
                <textarea class="right" tabindex="16"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="left" tabindex="2"></textarea>
                <textarea class="right" tabindex="7"></textarea>
            </div>
            <div class="col-md-6">
                <textarea class="left" tabindex="12"></textarea>
                <textarea class="right" tabindex="17"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="left" tabindex="3"></textarea>
                <textarea class="right" tabindex="8"></textarea>
            </div>
            <div class="col-md-6">
                <textarea class="left" tabindex="13"></textarea>
                <textarea class="right" tabindex="18"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="left" tabindex="4"></textarea>
                <textarea class="right" tabindex="9"></textarea>
            </div>
            <div class="col-md-6">
                <textarea class="left" tabindex="14"></textarea>
                <textarea class="right" tabindex="19"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <textarea class="left" tabindex="5"></textarea>
                <textarea class="right" tabindex="10"></textarea>
            </div>
            <div class="col-md-6">
                <textarea class="left" tabindex="15"></textarea>
                <textarea class="right" tabindex="20"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="clock" style="margin:5px 10px;"></div>
            </div>
            <div class="col-md-8" align="center" style="padding-top: 15px;">
                <button type="button" data-min="40" data-type="start" style="margin: 5px 10px; font-size: 20px; padding: 15px;">
                    <span class="glyphicon glyphicon-fast-forward" style="color: green"></span> START 40M
                </button>
                <button type="button" data-min="40" data-type="stop" style="margin: 5px 10px; font-size: 20px; padding: 15px;">
                    <span class="glyphicon glyphicon-stop" style="color: red"></span> STOP 40M
                </button>
                <button type="button" data-min="50" data-type="start" style="margin: 5px 10px; font-size: 20px; padding: 15px;">
                    <span class="glyphicon glyphicon-fast-forward" style="color: green"></span>  START 50M
                </button>
                <button type="button" data-min="50" data-type="stop" style="margin: 5px 10px; font-size: 20px; padding: 15px;">
                    <span class="glyphicon glyphicon-stop" style="color: red"></span> STOP 50M
                </button>
            </div>
            <div class="col-md-6" style="margin-left: 0; width: 16.666666666666664%; padding-top: 15px;">
                <textarea class="total" style="width: 100%" tabindex="21"></textarea>
            </div>
        </div>
        <div class="error an">
            <img src="images/error.png" alt="error.png" height="128" class="an" />
            <img src="images/error.png" alt="error.png" height="128" class="an" />
            <img src="images/error.png" alt="error.png" height="128" class="an" />
        </div>
        <img src="images/congratulation.png" alt="congratulation.png" class="congratulation" />
    </div>
    <audio id="sound-open" src="media/open.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-countdown" src="media/countdown.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-match" src="media/match.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-welcome" src="media/welcome.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-silent-1" src="media/silent-1.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-silent-2" src="media/silent-2.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-silent-3" src="media/silent-3.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-votay" src="media/votay.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-wrong" src="media/wrong.mp3" type="audio/mp3" preload="auto"></audio>
    <div class="background-congratulation"></div>
</body>
</html>