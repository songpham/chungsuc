<!DOCTYPE HTML>
<html lang="vn">
<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Chung sức vòng 2</title>
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
    <script src="scripts/index.js?version=1"></script>
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h1 style="color: white">VÒNG MẤT SỨC (x 2)</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="number">1</div>
                <div class="answer">
                    <div class="text">Vệ sinh cá nhân</div>
                    <div class="point">36</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="number">2</div>
                <div class="answer">
                    <div class="text">Tập thể dục</div>
                    <div class="point">28</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="number">3</div>
                <div class="answer">
                    <div class="text">Tranh thủ ngủ</div>
                    <div class="point">20</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="number">4</div>
                <div class="answer">
                    <div class="text">888</div>
                    <div class="point">12</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="margin-left: 0;">
                <div class="number">5</div>
                <div class="answer">
                    <div class="text">Làm việc</div>
                    <div class="point">4</div>
                </div>
            </div>
            <div class="col-md-6 score">Score: <span>0</span> x 2 = <label>0</label></div>
        </div>
        <div class="row countdown">
            <div class="clock" style="margin:2em;"></div>
            <button type="button" class="start-countdown" style="margin: 25px 10px 0 25px; font-size: 20px; padding: 15px;">COUNT</button>
            <button type="button" class="end-countdown" style="margin: 25px 10px; font-size: 20px; padding: 15px;">STOP</button>
        </div>
        <div class="error an">
            <img src="images/error.png" alt="error.png" height="128" class="an" />
            <img src="images/error.png" alt="error.png" height="128" class="an" />
            <img src="images/error.png" alt="error.png" height="128" class="an" />
        </div>
    </div>
    <audio id="sound-wrong" src="media/wrong.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-error" src="media/error.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-open" src="media/open.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-lost" src="media/lost.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-welcome" src="media/welcome.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-countdown" src="media/countdown.mp3" type="audio/mp3" preload="auto"></audio>
    <audio id="sound-human-countdown" src="media/human-countdown.mp3" type="audio/mp3" preload="auto"></audio>
</body>
</html>