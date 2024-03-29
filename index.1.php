<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no"/>
    <title>Harbun NewsBoard</title>
    <link href="src/bootstrap-4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="src/main.css" rel="stylesheet">
    <link href="src/style/iSlider.css" rel="stylesheet">
    <link href="src/style/style.css" rel="stylesheet">
    <link href="src/style/theme.css" rel="stylesheet">
        <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: sans-serif, Helvetica;
        }

        #main {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .logo {
            height: 100%;
            width: 100%;
            background: #3399ff url("//be-fe.github.io/iSlider/thumbnails/iSlider-logo.png") no-repeat 50% 20%;
        }

        .data-plat {
            position: absolute;
            visibility: hidden;
            left: -1000%;
            top: -1000%
        }

        .content {
            position: relative;
            height: 100%;
            width: 100%;
        }

        #main > .islider-dot-wrap {
            position: absolute;
            right: 0;
            left: auto;
            margin: 0;
            margin-top: -40px;
            top: 50%;
            width: 30px;
            height: 56px;
            padding: 24px 0;
            color: rgba(255, 255, 255, .25);
        }

        #main > .islider-dot-wrap:before {
            content: '...';
            position: absolute;
            top: 0;
            transform: rotate(-90deg) translateY(4px);
            left: 0;
        }

        #main > .islider-dot-wrap:after {
            content: '...';
            position: absolute;
            bottom: 0;
            transform: rotate(-90deg) translateY(4px);
            left: 0;
        }

        #main > .islider-dot-wrap > .islider-dot {
            background-color: #ffffff;
            border: none;
            opacity: .9;
            height: 8px;
            width: 8px;
            display: block;
            margin: 8px auto;
        }

        #main > .islider-dot-wrap > .islider-dot.active {
            background-color: #ffb360;
            transition: all 0.5s;
            box-shadow: 0 0 1px #ffb360;
            transform: scale(1.5);
        }

        .next {
            position: absolute;
            width: 64px;
            height: 32px;
            padding-top: 32px;
            text-align: center;
            bottom: 0;
            left: 50%;
            margin-left: -32px;
            color: rgba(255, 255, 255, .4);
        }

        .next:before {
            height: 20px;
            width: 20px;
            position: absolute;
            margin: -10px 0 0 -10px;
            top: 50%;
            left: 50%;
            animation: nextPage 500ms ease infinite alternate;
        }

        @keyframes nextPage {
            from {
                transform: translateY(-5px);
            }
            to {
                transform: translateY(10px);
            }
        }

        .enternal {
            list-style: none;
            width: 570px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: 80px 0 0 -285px;
            padding: 0;
        }

        .enternal li {
            float: left;
            width: 190px;
            text-align: center;
        }

        .enternal li a {
            display: block;
            text-decoration: none;
            color: #a2ddff;
        }

        .enternal li i {
            font-size: 54px;
        }

        .enternal li p {
            font-size: 12px;
        }

        .review-wrap {
            position: relative;
            height: 100%;
            width: 100%;
            background-color: #5ac3b0;
        }

        .review {
            position: absolute;
            top: 50%;
            left: 50%;
            height: 240px;
            width: 240px;
            margin: -120px 0 0 -120px;
            text-align: center;
            overflow: visible;
        }

        .review p {
            position: absolute;
            width: 320px;
            top: 0;
            left: 50%;
            margin-left: -160px;
            margin-top: 0;
            text-align: center;
            color: #d1ffec;
            font-size: 16px;
        }

        .review img {
            border: 1px solid #ffffff;
            padding: 5px;
            width: 200px;
            margin: 20px auto 0;
        }

        .is-in-is-wrap {
            width: 100%;
            height: 100%;
            background-color: #4b135e;
        }

        .is-in-is {
            position: absolute;
            width: 640px;
            height: 400px;
            left: 50%;
            top: 50%;
            padding: 10px;
            background-color: rgba(0, 0, 0, .5);
            margin: -210px 0 0 -330px;
        }

        .is-in-is > em {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 4px;
            font-style: normal;
            font-size: 12px;
            text-align: right;
            color: rgba(255, 255, 255, .08);
        }

        .is-in-is > b {
            position: absolute;
            top: -20px;
            left: 0;
            font-style: normal;
            font-weight: 100;
            font-size: 12px;
            text-align: center;
            color: rgba(255, 255, 255, .4);
        }

        #is_in_is {
            position: relative;
            height: 100%;
            width: 100%;
        }

        #is_in_is > .islider-dot-wrap {
            width: 100%;
            border-top: 2px solid #000000;
            background-color: #000000;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            height: 12%;
        }

        #is_in_is > .islider-dot-wrap > .islider-dot {
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            height: 100%;
            margin: 0;
            border: 0 none;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0);
            background-repeat: no-repeat;
            background-position: 50% 50%;
            -webkit-background-size: cover;
            background-size: cover;
        }

        #is_in_is > .islider-dot-wrap > .islider-dot:before {
            content: '';
            transition: opacity 1.2s;
            position: absolute;
            height: 200%;
            width: 200%;
            left: 0;
            top: 0;
            background-color: #000000;
            opacity: .8;
        }

        #is_in_is > .islider-dot-wrap > .islider-dot.active:before {
            opacity: 0;
        }

        @media (max-width: 800px) {
            .enternal {
                width: 450px;
                margin: 90px 0 0 -225px;
            }

            .enternal li {
                width: 150px;
            }

            .enternal li i {
                font-size: 42px;
            }

            .enternal li p {
                font-size: 12px;
            }

            .is-in-is {
                width: 480px;
                height: 300px;
                margin: -160px 0 0 -250px;
            }
        }

        @media (max-width: 500px) {
            .enternal {
                width: 330px;
                margin: 100px 0 0 -165px;
            }

            .enternal li {
                width: 110px;
            }

            .enternal li i {
                font-size: 32px;
            }

            .enternal li p {
                font-size: 12px;
            }

            .is-in-is {
                width: 320px;
                height: 225px;
                margin: -122.5px 0 0 -170px;
            }
        }
    </style>
</head>
<body class="d-flex flex-column">
  <div id="page-content">
    <div class="content">
        <div class="logo">
            <ul class="enternal">
                <li>
                    <a href="https://github.com/be-fe/iSlider/blob/master/README.md" target="_blank">
                        <i class="fa fa-cogs"></i>

                        <p>INTRODUCTION</p>
                    </a>
                </li>
                <li>
                    <a href="http://be-fe.github.io/iSlider/demo/" target="_blank">
                        <i class="fa fa-th-list"></i>

                        <p>DEMO</p>
                    </a>
                </li>
                <li>
                    <a href="https://github.com/be-fe/iSlider" target="_blank">
                        <i class="fa fa-code"></i>

                        <p>CODE</p>
                    </a>
                </li>
            </ul>
            <i class="next fa fa-chevron-down"></i>
        </div>
    </div>
    <div class="content">
        <div class="review-wrap">
            <div class="review">
                <p>Review in Mobile</p>
                <img src="//be-fe.github.io/iSlider/thumbnails/qrcode-home.png">
            </div>
        </div>
        <i class="next fa fa-chevron-down"></i>
    </div>
    <div class="content">
        <div class="is-in-is-wrap">
            <div class="is-in-is">
                <div id="is_in_is"></div>
                <em>吾王美如画</em>
                <b>NESTED iSlider</b>
            </div>
        </div>
        <audio id="is_in_is_bgm" preload="auto" loop="loop">
            <source src="//be-fe.github.io/static/audios/knight.mp3" type="audio/mpeg"/>
        </audio>
    </div>
  </div> 
<script type="text/javascript" src="src/bootstrap-4.3.1/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="src/bootstrap-4.3.1/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="src/bootstrap-4.3.1/popper.min.js"></script>
<script type="text/javascript" src="src/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="src/js/iSlider.js"></script>
<script type="text/javascript" src="src/js/ext/animate.js"></script>
<script>

    function fstyle() {
        document.body.style.backgroundColor = window.getComputedStyle(this.data[this.slideIndex].content.querySelector(':first-child')).backgroundColor;
    }

    var wt = 0;
    var wft = 0;
    function mouseWheelHandle(evt) {
        var type = evt.type;
        if (type == 'DOMMouseScroll' || type == 'mousewheel') {
            evt.delta = (evt.wheelDelta) ? evt.wheelDelta / 120 : -(evt.detail || 0) / 3;
        }
        if (evt.timeStamp - wt < 100 && evt.timeStamp - wft < 2000) {
            wt = evt.timeStamp;
            return;
        }

        wt = evt.timeStamp;
        wft = evt.timeStamp;

        if (!this.isSliding) {
            if (evt.delta < 0) {
                this.slideNext();
            } else if (evt.delta > 0) {
                this.slidePrev();
            }
        }
    }

    var whellEvt = 'mozHidden' in document ? 'DOMMouseScroll' : 'mousewheel';

    var data = [];

    Array.prototype.slice.call(document.querySelectorAll('.content')).forEach(function (el) {
        data.push({content: el});
    });

    var IS_IN_IS = (function () {
        var data = [];
        for (var i = 0; i < 9; i++) {
            data.push({
                content: '//be-fe.github.io/static/images/saber/' + i + (i < 7 ? '.jpg' : '.gif')
            });
        }
        var h = new iSlider(document.getElementById('is_in_is'), data, {
            isAutoplay: 1,
            isLooping: 1,
            duration: 5000,
            animateTime: 2600,
            isOverspread: 1,
            animateType: 'fade',
            plugins: [['dot', {locate: 'relative'}]],
            onplugininitialized: function () {
                [].slice.call(this.wrap.querySelectorAll('.islider-dot')).forEach(function (el, i) {
                    el.style.backgroundImage = 'url(' + this.data[i].content + ')';
                }.bind(this));
            }
        });

        h.pause();

        return h;
    })();

    var lsn;
    function IS_IN_IS_Autoplay(i) {
        if (lsn) {
            window.clearInterval(lsn);
        }
        var volumeLsn = IS_IN_IS_BGM.volume;
        if (i === 2) {
            IS_IN_IS.play();
            IS_IN_IS_BGM.play();
            lsn = window.setInterval(function () {
                var volume = IS_IN_IS_BGM.volume;
                volume += 0.01;
                if (volumeLsn === volume || volume >= 1) {
                    volume = 1;
                    window.clearInterval(lsn);
                }
                volumeLsn = volume;
                IS_IN_IS_BGM.volume = volume;
            }, 10);
        } else {
            IS_IN_IS.pause();
            lsn = window.setInterval(function () {
                var volume = IS_IN_IS_BGM.volume;
                volume -= 0.01;
                if (volumeLsn === volume || volume <= 0) {
                    volume = 0;
                    window.clearInterval(lsn);
                    IS_IN_IS_BGM.pause();
                }
                volumeLsn = volume;
                IS_IN_IS_BGM.volume = volume;
            }, 10);
        }
    }

    var IS_IN_IS_BGM = document.getElementById('is_in_is_bgm');

    // var ISL = new iSlider(document.getElementById('main'), data, {
    //     isAutoplay: 1,
    //     isLooping: 1,
    //     isOverspread: 1,
    //     animateTime: 15000,
    //     duration: 15000,
    //     // isLooping: true,
    //     //isVertical: 0,
    //     // animateTime: 500,
    //     // plugins: [['dot', {locate: 'relative'}]],
    //     // oninitialized: function () {
    //     //     fstyle.call(this);
    //     //     this.wrap.addEventListener(whellEvt, mouseWheelHandle.bind(this), false);
    //     // }
    // });

    // ISL.bind(iSlider.DEVICE_EVENTS.hasTouch ? 'touchend' : 'click', '.next', function () {
    //     ISL.slideNext();
    // });

    // ISL.on('slideStart', function () {
    //     fstyle.call(this);
    // });

    // ISL.on('slideChange', function () {
    //     fstyle.call(this);
    // });

    // ISL.on('slideChanged', IS_IN_IS_Autoplay);
    // ISL.on('slideRestored', IS_IN_IS_Autoplay);

    //    ISL.on('slideChange', function () {
    //        this.wrap.removeEventListener(whellEvt, mouseWheelHandle.bind(this), false);
    //    });
    //
    //    ISL.on('slideChanged', function () {
    //        this.wrap.addEventListener(whellEvt, mouseWheelHandle.bind(this), false);
    //    });
</script>
</body>
</html>
