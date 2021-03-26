<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sat Mar 13 2021 20:57:05 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6046de8b3115c3b5e7d74c56" data-wf-site="5fb84b55d6eff209e92250ed">
<head>
  <meta charset="utf-8">
  <title>{{ $blog->name }}</title>
  <meta content="{{ $blog->description }}" name="description">
  <meta content="{{ $blog->name }}" property="og:title">
  <meta content="{{ $blog->description }}" property="og:description">
  <meta content="{{ $blog->name }}" property="twitter:title">
  <meta content="{{ $blog->description }}" property="twitter:description">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="VQN-I-G7lHoYSxWWxJCR_fbR2Xf_DJNwTpH-aj8Axpk" name="google-site-verification">
  <meta content="Webflow" name="generator">
  <link href="{{ asset('css/normalize.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/drsalvadoroctavio.webflow.css') }}" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Poppins:100,200,300,regular,500,600,700,800,900","DM Serif Display:regular","Yeseva One:regular"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-NZN7CD5KEV"></script>
  <script type="text/javascript">window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'G-NZN7CD5KEV', {'anonymize_ip': true});</script>
  <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script><!--  Privado Notice start  -->
  <script src="https://www.cdn.privado.ai/1b693c08d7344fd88492dea55189cf03.js" type="text/javascript"></script>
  <!--  Privado Notice end  -->
  <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
  <meta name="google-site-verification" content="VQN-I-G7lHoYSxWWxJCR_fbR2Xf_DJNwTpH-aj8Axpk">
</head>
<body>
  <section id="Hero" class="hero">
    <a href="{{ route('principal') }}" class="link-block-3 w-inline-block">
      <img src="images/LOGO-DR.png" loading="lazy" width="158" sizes="(max-width: 479px) 99vw, 158px" srcset="images/LOGO-DR-p-500.png 500w, images/LOGO-DR-p-800.png 800w, images/LOGO-DR-p-1080.png 1080w, images/LOGO-DR-p-1600.png 1600w, images/LOGO-DR-p-2000.png 2000w, images/LOGO-DR-p-2600.png 2600w, images/LOGO-DR-p-3200.png 3200w, images/LOGO-DR.png 5996w" alt="Dr. Octavio" class="logoback"></a>
    <div class="w-layout-grid grid">
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
      <div class="l-nea"></div>
    </div>
  </section>
  <div class="sectionextra">
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/post-bg.jpg')">
    <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="postimage">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="titulo-section">
            <h1>{{ $blog->name }}</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="mt-5 col-lg-8 col-md-10 mx-auto post-information">
          <p>{{ $blog->description }}</p>

          <h2 class="section-heading"">The Final Frontier</h2>

          <p></p>

          <blockquote class="blockquote"></blockquote>

          <h2 class="section-heading"" >Reaching for the Stars</h2>

          <p></p>

        </div>
      </div>
    </div>
  </article>

    <div class="w-layout-grid blog grid-2">
      <a href="#" class="blogcard w-inline-block">
        <img src="https://d3e54v103j8qbb.cloudfront.net/plugins/Basic/assets/placeholder.60f9b1840c.svg" loading="lazy" alt="" class="blogimage">
        <div class="bloginfocard">
          <h4 class="blogcardheader">Heading</h4>
          <p class="blogcardinfo">Prueba</p>
        </div>
      </a>
    </div>
  </div>
  <!--PRUEBA-->
  

  <!--PRUEBA-->
  <footer id="footer" class="footer section">
    <div class="footercontainer">
      <div class="div-block-2">
        <h4 class="footer-h4">Dr. Salvador Octavio Ramírez Valdivia</h4>
        <a href="https://hospitalesangeles.com/datos.php?ID=MO0462" target="_blank" class="hospital-link w-inline-block">
          <p class="paragraph-4">Hospital Angeles León, Gto.</p>
        </a>
      </div>
      <a href="#" class="btntop w-inline-block">
        <div class="btntop-txt">Volver arriba</div><img src="images/2.svg" loading="lazy" width="30" alt="" class="btntop-img">
      </a>
    </div>
    <div class="containerfooter">
      <div class="firmadoc">
        <div class="redessociales">
          <a href="https://www.linkedin.com/in/salvador-octavio-ram%C3%ADrez-valdivia-8a7b50205/" target="_blank" class="linkred w-inline-block"><img src="images/linkedin.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.facebook.com/DrOctavioRV" target="_blank" class="linkred w-inline-block"><img src="images/facebook.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://www.instagram.com/droctaviorv/" target="_blank" class="linkred w-inline-block"><img src="images/instagram.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://g.page/drsalvadoro?share" target="_blank" class="linkred w-inline-block"><img src="images/google.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://t.me/droctavio" target="_blank" class="linkred w-inline-block"><img src="images/telegram.png" loading="lazy" width="40" alt="" class="img-red"></a>
          <a href="https://wa.me/+524721208324" target="_blank" class="linkred w-inline-block"><img src="images/whatsapp.png" loading="lazy" width="40" alt="" class="img-red"></a>
        </div>
        <div class="derechos-pagina">
          <a href="aviso-reglamentario.html" class="link-block w-inline-block">
            <div class="text-block-3">Aviso reglamentario</div>
          </a>
          <div class="iniciodesesiondoc"> ©  </div>
          <div class="html-embed w-embed w-script">
            <script type="text/javascript">
  document.write(new Date().getFullYear());
</script>
          </div>
          <a href="#" class="iniciodesesiondoc">Dr. Octavio</a>
          <div class="text-block-4">  Derechos Reservados.</div>
        </div>
      </div>
    </div>
    <div class="derechos-pagina">
      <a href="https://www.linkedin.com/in/no%C3%A9-hassiel-monterrosas-bandala-b514291a1/" target="_blank" class="link-block-2 w-inline-block">
        <div class="text-block-5">Design by: Noé Hassiel</div>
      </a>
    </div>
  </footer>
  <a data-w-id="f7cb3604-db2d-b2c1-500e-b014b4645c40" href="{{ route('blogs.index') }}" class="backbutton w-inline-block"><img src="images/left-arrow.svg" loading="lazy" width="25" alt="" class="volverarrow">
    <div class="volvertext">Volver</div>
  </a>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=5fb84b55d6eff209e92250ed" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('js/webflow.js') }}" type="text/javascript"></script>
  <!--JAVA BOOTSTAP!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
    crossorigin="anonymous"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>