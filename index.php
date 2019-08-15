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
  <link href="src/fontawesome/css/all.css" rel="stylesheet">
  <style>
    body, html {
      padding: 0;
      margin: 0;
    }
    body {
      overflow: hidden;
      /*background-color: #333333;*/
    }

    .fork {
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
      overflow: hidden;
    }

    #S {
      z-index: 1;
      font-size: 5em;
      color: #ffffff;
    }

    #N {
      z-index: 0;
    }

    #N li > div {
      height: 100%;
      width: 100%;
    }
  </style>
</head>
<body class="d-flex flex-column">
  <div id="page-content"> 
    <div class="container text-center fork" id="S">
    </div> 
  </div>
  <footer id="sticky-footer" class="text-white-50">
   <div class="TickerNews default_theme" id="T2">
    <div class="ti_wrapper">
      <div class="ti_slide">
        <div class="ti_content">
          <?php include_once("newsticker.php");
          ?>

        </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="src/bootstrap-4.3.1/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="src/bootstrap-4.3.1/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="src/bootstrap-4.3.1/popper.min.js"></script>
<script type="text/javascript" src="src/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="src/js/iSlider.js"></script>
<script type="text/javascript" src="src/js/ext/animate.js"></script>
<script type="text/javascript" src="src/js/jquery.tickerNews.min.js"></script>
<script type="text/javascript">
  $(function(){
    _Ticker = $(".TickerNews").newsTicker();
  });
</script>
<script id="show-code">
  var $S = new iSlider(document.getElementById('S'), [
  {
    content: `       
    <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="font-weight-light mt-4 text-white">KAMAR TERSEDIA</h1>
    <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    <i class="fa fa-bed" style="font-size:48px"></i> 
    </div>
    </div> 
    `,
    type: 'dom'
  }, {
    content: `       
    <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="font-weight-light mt-4 text-white">DAFTAR PASIEN</h1>
    <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    <i class="fa fa-bed" style="font-size:48px"></i> 
    </div>
    </div> 
    `,
    type: 'dom'
  }, {
    content: `       
    <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="font-weight-light mt-4 text-white">PROGRAM HARAPAN BUNDA</h1>
    <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    <i class="fa fa-bed" style="font-size:48px"></i> 
    </div>
    </div> 
    `,
    type: 'dom'
  }, {
    content: `       
    <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="font-weight-light mt-4 text-white">KERJASAMA</h1>
    <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    <i class="fa fa-bed" style="font-size:48px"></i> 
    </div>
    </div> 
    `,
    type: 'dom'
  }, {
    content: `       
    <div class="row justify-content-center">
    <div class="col-md-7">
    <h1 class="font-weight-light mt-4 text-white">JADWAL DOKTER</h1>
    <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
    <i class="fa fa-bed" style="font-size:48px"></i> 
    </div>
    </div> 
    `,
    type: 'dom'
  }
  ], {
    animateType: 'card',
    isAutoplay: 1,
    isLooping: 1,
    isOverspread: 1,
    animateTime: 8000,
    duration: 15000
  });


var $N = new iSlider(document.getElementById('N'), [
{
  content: '<div style="background-color: #006600"></div>'
}, {
  content: '<div style="background-color: #ae7a43"></div>'
}, {
  content: '<div style="background-color: #386c87"></div>'
}, {
  content: '<div style="background-color: #891b17"></div>'
}, {
  content: '<div style="background-color: #3a7dac"></div>'
}
], {
  animateType: 'fade',
  isAutoplay: 1,
  isLooping: 1,
  isOverspread: 1,
  animateTime: 1000

});

$N.subjectTo($S);

window.addEventListener('keydown', function (evt) {
  switch (evt.keyCode) {
    case 37:
    $S.slidePrev();
    break;
    case 39:
    $S.slideNext();
    break;
  }
});
</script>
</body>
</html>
