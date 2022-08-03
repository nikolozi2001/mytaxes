<?php 
  include "config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo $lang['title'] ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" type="image/png" href="https://www.geostat.ge/img/favicon.ico" />
  <!-- for Facebook share -->
<?php  

if (isset($_GET['lang']) && $_GET['lang']=='en' ){
  echo "<meta property='og:title' content='Tax Calculator' />";
  echo "<meta property='og:description' content='National Statistic Office Of Georgia' />";
}
else{
  echo "<meta property='og:title' content='გადასახადების კალკულატორი' />";
  echo "<meta property='og:description' content='საქართველოს სტატისტიკის ეროვნული სამსახური' />";
}
    echo "<meta property='og:url' content='http://mytaxes.geostat.ge/mytaxes' />";
    echo "<meta property='og:type' content='website' />";
    echo "<meta property='og:image' content='http://mytaxes.geostat.ge/mytaxes/pic/facebook.jpg' />";
    echo "<meta property='og:image:secure_url' content='http://mytaxes.geostat.ge/mytaxes/pic/facebook.jpg' />";
    echo "<meta property='og:image:width' content='1200' />";
    echo "<meta property='og:image:height' content='628' />";
?>

 <link rel="shortcut icon" href="pic/favicon.png">
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- site css -->
<link href="css/style.css" rel="stylesheet">
<!-- range sliders css -->
<link href="css/slider.css" rel="stylesheet">
<!-- for responsive screen -->
<link href="css/responsive.css" rel="stylesheet">

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript">
  window.html2canvas = html2canvas;
  window.jsPDF = window.jspdf.jsPDF;

  function makePDF() {
    html2canvas(document.querySelector("#testok"),{
      allowTaint:true,
      useCORS: true,
      sacle: 1
    }).then(canvas => {
      document.body.appendChild(canvas)
      var img = canvas.toDataURL("image/png");
      var doc = new jsPDF();
      doc.setFont('Arial');
      doc.getFontSize(11);
      doc.addImage(img,'PNG',7,13,195,105);
      // doc.text("HTML to PDF", 10, 10);
      doc.save();
    })
    
    
  }
</script>


<style>
.btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active, .btn-outline-dark:active:focus, .btn-outline-dark.active {
    color: #f8f9fa !important;
    background-color: #212121 !important;
    border-color: #212121 !important;
}
.btn-orange {
    color: #fff;
    background-color: #f4511e !important;
}
	#f4511e
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q58BL2LR5L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q58BL2LR5L');
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<div class="container-fluid " >
  <nav class="navbar navbar-default fixed-top ">
    <div class="d-flex flex-row container-fluid pt-0 pb-0 mt-0 navbar-brand">
      <a class="d-flex justify-content-start navbar-brand mainLogoRep" href="/mytaxes">
        <img src="<?php echo $lang['geostat'] ?>" class="img-fluid logo" style="margin: -10px;     max-width: 400px;" />
      </a>
      <div class="d-flex justify-content-center text-uppercase mainClacNameResp" style="font-size: 1.2vw;" >
        <?php echo $lang['name']; ?>
      </div>
      <div class=" lang d-flex justify-content-end langChooseResp" style="color: white; font-size: 1.2vw; width: 400px;" >
        <a id="lang_en" href="index.php?lang=en" style="color: white">EN</a>
        &nbsp;|&nbsp;
        <a id="lang_ka" href="index.php?lang=ka" style="color: white">GE</a>
      </div>
    </div>
  </nav>
</div>


<?php isset($_GET["action"])? require($_GET["action"].'.php'):require('main.php');?> 

  
<footer class="container-fluid mt-0 footerResp">
    <div class=" d-flex justify-content-between">
    <div class="footer-social ">
        
        </div>
    
         <div class="contacit">
         <img class="pdfDWND" src="pic/pdf.png" onclick="makePDF()">
            <h4><?php echo $lang['contactInfo']; ?></h4>
            <h5><?php echo $lang['address']; ?></h5>
            <p><?php echo $lang['addressInfo']; ?></p>
            <h5><?php echo $lang['phone']; ?></h5>
            <p><?php echo $lang['phoneInfo']; ?></p>
            <h5><?php echo $lang['mail']; ?></h5>
            <p>info@geostat.ge</p>
        </div>
    </div>
    <div class="geostat text-center">
        <div class="footer-text ">
            <p>2021, <?php echo $lang['saqstati']; ?></p>
			<p>
			     <?php if($language == "ka") { ?>
					<a href="https://www.geostat.ge/ka/page/monacemta-gamoyenebis-pirobebi"><?php echo $lang['saqstati2']; ?></a>
				 <?php } else { ?>
					<a href="https://www.geostat.ge/en/page/monacemta-gamoyenebis-pirobebi"><?php echo $lang['saqstati2']; ?></a>
				 <?php } ?>
			</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="js/down.js" ></script>
<script type="text/javascript" src="js/calc.js" ></script>
<script type="text/javascript" src="js/data.json" ></script>
<script type="text/javascript" src="js/result.js" ></script>
<script>
$(document).ready(function(){
  //tooltip
  $('[data-toggle="tooltip"]').tooltip(
    
  );   
  //nitialize the script for animations when scrolling.
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  


})

</script>

<script>(function(d, s, id) {

var js, fjs = d.getElementsByTagName(s)[0];

if (d.getElementById(id)) return;

js = d.createElement(s); js.id = id;

js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";

fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));

</script>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="top:10%">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['modalTitle']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php echo $lang['modalBody']; ?>
      </div>
    </div>
  </div>
</div>
</body>


</html>
