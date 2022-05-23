
<html>
<head>
	<title> SK_Based_Checker </title>
	<link href="style.css" rel="stylesheet" id="bootstrap-css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
body {
  background-image: url('jackool.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</head>
<body text=red>
<center>
  <h5 class="card-body h6">
      <!--LOGO-->
  </h5>
<!-- INPUT/TEXTAREAS -->
      <center>
<div class="row col-md-12">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<div class="card col-sm-12">
 <h6 class="page-title-heading mr-0 mr-r-5"><strong><span style="color:silver; text-shadow:#FF00F7 1px 1px 20px; background-image:url(https://i.imgur.com/WVAqCxp.gif); font-weight:bold; font-size:42px;"> SK_Based </span></strong></h6>
  <div class="card-body">
<div class="md-form">
  <div class="col-md-11">
     <!--DITO ILAGAY ANG SK-->
  <h5><font color="#FFFFFF" ;="" style="color:white; text-shadow:#21DF78 1px 1px 20px;  font-size:20px;">SECRET KEY</font></h5>
  <textarea type="text" style="color: #21DF78; text-align: center; border-color: white; background-color: rgba(1,1,1,0);" id="sec" class="md-textarea form-control" rows="1" placeholder="sk_live_XXxxxxxxxxxxx"></textarea>
     
      
      <br>
      <text style="font-size: 15;"> </text>
      <br>
    <textarea type="text" style="color: #21DF78; border-color: white; text-align: center;  background-color: rgba(1,1,1,0);" id="lista" class="md-textarea form-control" rows="8" placeholder="FORMAT: xxxxxxxxxxxxxxxx|mm|year|cvv"></textarea>
</div>
</div>

&nbsp;<br>
<center>
 <button class="btn btn-danger waves-effect waves-light" style="width: 200px; outline: none; font-weight:bold; border-color: #21DF78;" id="testar" onclick="enviar()" ><span style="color:#21DF78; text-shadow:#21DF78 1px 1px 20px; background-image:url(https://i.imgur.com/WVAqCxp.gif); font-weight:bold; font-size:18px;">START</span></button>
  <br>
  <br>
  <text style="font-size: 20">
    <span>CVV:</span>&nbsp<span id="cLive" class="badge badge-success">0</span>
    <span>CCN:</span>&nbsp<span id="cWarn" class="badge badge-warning">0</span>
    <span>Declined:</span>&nbsp<span id="cDie" class="badge badge-danger"> 0</span>
    <span>Checked:</span>&nbsp<span id="total" class="badge badge-info">0</span>
    <span>Total:</span>&nbsp<span id="carregadas" class="badge badge-dark">0</span>
    <br>
    <div>
        <div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    </div>
  </text>
</center>
</div>


</div>
</div>
</div>
<br>
</center>
</div>
<center>
<!--BUTTONS-->
<div>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra" class="btn btn-danger">Show</button>
  <button data-clipboard-action="copy" data-clipboard-target=".aprovadas" class="btn btn-danger">Copy</button>
</div>

  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">CVV - <span  id="cLive2" class="badge badge-success">0</span></h6>
    <div id="bode"><span id=".aprovadas" class="aprovadas"></span>
</div>
  </div>
</div>
</div>

<br>
<br>
<br>

<div>
<div class="col-md-12">
<div class="card">
<div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra3" class="btn btn-danger">Show</button>
  <button data-clipboard-action="copy" data-clipboard-target=".edrovadas" class="btn btn-danger">Copy</button>
</div>
  <div class="card-body">
    <h6 style="font-weight: bold;" class="card-title">CCN - <span  id="cWarn2" class="badge badge-warning">0</span></h6>
    <div id="bode3"><span id=".edrovadas" class="edrovadas"></span>
</div>
  </div>
</div>
</div>
</div>

<br>
<br>
<br>

<div class="col-md-12" style="text-overflow: ellipsis; overflow: hidden;">
<div class="card">
  <div style="position: absolute;
        top: 0;
        right: 0;">
      <button id="mostra2" class="btn btn-danger">Show</button>
  <button onclick="document.getElementById('.reprovadas').innerHTML = ''" id="stop" class="btn btn-danger">Clear</button>
</div>
  <div class="card-body" style="text-overflow: ellipsis; overflow: hidden;">
    <h6 style="font-weight: bold;" class="card-title"> Declined - <span id="cDie2" class="badge badge-danger">0</span></h6>
    <div id="bode2" style="text-overflow: ellipsis; overflow: hidden;"><span id=".reprovadas" class="reprovadas"></span>
    </div>
  </div>
</div>
</div>
  </div>
</div>

</center>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
 
$(document).ready(function(){


    $("#bode").hide();
  $("#esconde").show();
  
  $('#mostra').click(function(){
  $("#bode").slideToggle();
  });

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode2").hide();
  $("#esconde2").show();
  
  $('#mostra2').click(function(){
  $("#bode2").slideToggle();
  });

});

</script>

<script type="text/javascript">

$(document).ready(function(){


    $("#bode3").hide();
  $("#esconde3").show();
  
  $('#mostra3').click(function(){
  $("#bode3").slideToggle();
  });

});

</script>

<script src="clipboard.min.js"></script>

        <script>
    var clipboard = new ClipboardJS('.slideright');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  
      <script src="clipboard.min.js"></script>

        <script>
    var clipboard = new ClipboardJS('.slideright2');

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });
    </script>
  



<script title="ajax do checker">
    function enviar() {
        var linha = $("#lista").val();
        var linhaenviar = linha.split("\n");
        var total = linhaenviar.length;
        var ap = 0;
    var ed = 0;
        var rp = 0;
        linhaenviar.forEach(function(value, index) {
            setTimeout(
                function() {
        var sec = $("#sec").val();
                    $.ajax({
                        url: 'api.php?lista=' + value + '&sec=' + sec,
                        type: 'GET',
                        async: true,
                        success: function(resultado) {
                            if (resultado.match("#CVV")) {
                                removelinha();
                                ap++;
                                aprovadas(resultado + "");
                            }else if(resultado.match("#CCN")) {
                                removelinha();
                                ed++;
                                edrovadas(resultado + "");
                            }else {
                                removelinha();
                                rp++;
                                reprovadas(resultado + "");
                            }
              
                            $('#carregadas').html(total);
                var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            var fila = parseInt(ap) + parseInt(ed) + parseInt(rp);
                            $('#cLive').html(ap);
                $('#cWarn').html(ed);
              $('#cDie').html(rp);
              $('#total').html(fila);
              $('#cLive2').html(ap);
              $('#cWarn2').html(ed);
              $('#cDie2').html(rp);
                        }
                    });
                }, 200 * index);
        });
    }
    function aprovadas(str) {
        $(".aprovadas").append(str + "<br>");
    }
    function edrovadas(str) {
      $(".edrovadas").append(str + "<br>");
    }
    function reprovadas(str) {
        $(".reprovadas").append(str + "<br>");
    }
    function removelinha() {
        var lines = $("#lista").val().split('\n');
        lines.splice(0, 1);
        $("#lista").val(lines.join("\n"));
    }
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/js/mdb.min.js"></script>
<br>
<footer>
    <center><span style="color:silver; text-shadow:#FF00F7 1px 1px 20px; background-image:url(https://i.imgur.com/WVAqCxp.gif); font-weight:bold; font-size:20px;"> Thanks for dropping by </span></center>
</body>
</html>
    
    
