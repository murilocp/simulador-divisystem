<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
$is_mobile = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) ? true : false;
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Divisórias Sanitárias Sanisystem - Divisystem</title>
  
   
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome-4.6.2/css/font-awesome.min.css">
  <link href="css/slick.css" rel="stylesheet" type="text/css" />
  <link href="css/slippry.css" rel="stylesheet" type="text/css" />
 
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/img-sim.css" type="text/css" rel="stylesheet" media="screen,projection"/>


</head>

<body>


<div class="sections">


<section class="scrollme snap" data-section-name="simulador" id="simulador">
  
  <div id="main-container">
      
      <div class="simulador-wrap">
          <!-- <button type="button" onclick="captureCurrentDiv()">Current Div</button> --> 
        <div class="row">        
          <div class="col l10 s12"> <!-- RESULTADO SIMULADOR -->

                <div class="mainmaster1"><!-- PNGS AMBIENTES -->
                    <div class="pngs m-ambiente-1"></div>
                </div>


                <div class="mainmaster2"><!-- PNGS PAINEIS -->
                    <div class="pngs m-painel-1"></div>
                    <div class="pngs m-painel-2"></div>
                    <div class="pngs m-painel-3"></div>
                    <div class="pngs m-painel-4"></div>
                    <div class="pngs m-painel-5"></div>
                    <div class="pngs m-painel-6"></div>
                    <div class="pngs m-painel-7"></div>
                    <div class="pngs m-painel-8"></div>
                    <div class="pngs m-painel-9"></div>               
                </div> 

                <div class="mainmaster3"><!-- PNGS PORTAS -->
                    <div class="pngs m-porta-1"></div>
                    <div class="pngs m-porta-2"></div>
                    <div class="pngs m-porta-3"></div>
                    <div class="pngs m-porta-4"></div>
                    <div class="pngs m-porta-5"></div>
                    <div class="pngs m-porta-6"></div> 
                    <div class="pngs m-porta-7"></div>
                    <div class="pngs m-porta-8"></div>
                    <div class="pngs m-porta-9"></div>
                    <div class="pngs m-porta-10"></div>                
                </div> 


                <div class="mainmaster4"><!-- PNGS MICTORIOS -->
                    <div class="pngs m-mictorio-1"></div>
                    <div class="pngs m-mictorio-2"></div>
                    <div class="pngs m-mictorio-3"></div>
                    <div class="pngs m-mictorio-4"></div>
                    <div class="pngs m-mictorio-5"></div>
                    <div class="pngs m-mictorio-6"></div> 
                    <div class="pngs m-mictorio-7"></div>
                    <div class="pngs m-mictorio-8"></div>
                    <div class="pngs m-mictorio-9"></div>             
                </div>   

                <div class="mainmaster5"><!-- PNGS PEÇAS -->
                    <div class="pngs m-peca-1"></div>
                    <div class="pngs m-peca-2"></div>
                    <div class="pngs m-peca-3"></div>             
                </div> 


            
          </div>
          <div class="col l2 s12"><!-- MENU CORES -->
            <div class="wrapper-bot">

              <div class="col s12 ">
                <span class="sim-txt">Configure o ambiente com as opções abaixo:</span><hr>
              </div>
              
              <div class="col s12 paletas">
              <span class="sim-txt">Painéis</span>
              <ul id="menumaster2"><!-- CORES PAINEIS -->
                <li class="cores az-coral"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Coral">[1]</a></li>
                <li class="cores vermelho"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Vermelho">[2]</a></li>
                <li class="cores preto"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Preto">[3]</a></li> 
                <li class="cores az-bali"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Bali">[4]</a></li>
                <li class="cores laranja"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Laranja">[5]</a></li>
                <li class="cores grafite"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Grafite">[6]</a></li>
                <li class="cores marfim"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Marfim Claro">[7]</a></li>
                <li class="cores cinza"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Platina">[8]</a></li>
                <li class="cores branco"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Branco">[9]</a></li>
              </ul>
              </div>
              
              <div class="col s12 paletas">
              <span class="sim-txt">Portas</span>
              <ul id="menumaster3"><!-- CORES PORTAS -->
                <li class="cores az-coral"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Coral">[1]</a></li>
                <li class="cores vermelho"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Vermelho">[2]</a></li>
                <li class="cores preto"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Preto">[3]</a></li> 
                <li class="cores az-bali"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Bali">[4]</a></li>
                <li class="cores laranja"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Laranja">[5]</a></li>
                <li class="cores grafite"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Grafite">[6]</a></li>
                <li class="cores marfim"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Marfim Claro">[7]</a></li>
                <li class="cores cinza"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Platina">[8]</a></li>
                <li class="cores branco"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Branco">[9]</a></li>
                <li class="cores brilho"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Vidro Branco">[0]</a></li>              
              </ul>
              </div>
              
              <div class="col s12 paletas">
              <span class="sim-txt">Mictórios</span>
              <ul id="menumaster4"><!-- CORES MICTORIOS -->
                <li class="cores az-coral"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Coral">[1]</a></li>
                <li class="cores vermelho"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Vermelho">[2]</a></li>
                <li class="cores preto"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Preto">[3]</a></li> 
                <li class="cores az-bali"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Azul Bali">[4]</a></li>
                <li class="cores laranja"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Laranja">[5]</a></li>
                <li class="cores grafite"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Grafite">[6]</a></li>
                <li class="cores marfim"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Marfim Claro">[7]</a></li>
                <li class="cores cinza"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Platina">[8]</a></li>
                <li class="cores branco"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Branco">[9]</a></li>              
              </ul>
              </div>

              <div class="col s12 paletas">
              <span class="sim-txt">Colunas</span>
              <ul id="menumaster5"><!-- CORES PEÇAS -->
                <li class="cores branco"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Branco">[1]</a></li>
                <li class="cores grafite"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Anodizado Natural">[2]</a></li>
                <li class="cores preto"><a class="btn tooltipped" data-position="top" data-delay="10" data-tooltip="Preto">[3]</a></li>               
              </ul>
              </div>


            </div>
          </div>
        </div>

      </div>      
      
  </div><!-- main container-->

</section>

</div><!-- fim class="sections" -->

<script type="text/javascript">
      $(document).ready(function(){
        $("#form_contato button").click(function(){
          var form = $(this).closest("form");
          var nome = $(form).find("input[name=nome]").val();
          var email = $(form).find("input[name=email]").val();
          var telefone = $(form).find("input[name=telefone]").val();
          var mensagem = $(form).find("textarea[name=mensagem]").val();
          $(form).find(".error_val").removeClass("error_val");
          if (!nome){
            $(form).find("input[name=nome]").addClass("error_val");
          }
          if (!email){
            $(form).find("input[name=email]").addClass("error_val");
          }
          if (!telefone){
            $(form).find("input[name=telefone]").addClass("error_val");
          }
          if (!mensagem){
            $(form).find("textarea[name=mensagem]").addClass("error_val");
          }
          if ($(form).find(".error_val").length){
            alert("Preencha todos os campos");
            $(form).find(".error_val").first().focus();
            return false;
          } else {
            return true;
          }
        })
      })
 </script>



  <!--  Scripts-->
  
 <!--CDN link for  TweenMax-->
<?php if (!$is_mobile) { ?> <script src="js/TweenMax.min.js"></script> <?php } ?>  <!--desabilitar mobile-->
<script src="js/gsap.js"></script>

<script src="js/jquery-2.1.1.min.js"></script>
  
 <!--links para #secoes-->
   <script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1300);
          return false;
        }
      }
    });
  });
  </script>


 <script src="js/slippry.js"></script>

    <script>
      $(function() {
        var slider1 = 
        $("#slider1").slippry({ });
        $("#slider2").slippry({ });
        $("#slider3").slippry({ });
        $("#slider4").slippry({ });
        $("#slider5").slippry({ });
      
      });
    </script>

  <script src="js/simulador.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <?php if (!$is_mobile) { ?> <script src="js/jquery.scrollme.js" id="scrollme"></script> <?php } ?> <!--desabilitar mobile-->
  <?php if (!$is_mobile) { ?> <script src="js/jquery.scrollify.js" id="scrollify"></script> <?php } ?><!--desabilitar mobile-->
<script>
    $(function() {
        $.scrollify({
            section : ".snap",
            sectionName : "section-name"
        });
    });
</script>

  <?php if (!$is_mobile) { ?> <script src="js/jquery.stellar.js"></script> <?php } ?>  <!--desabilitar mobile-->

   <?php if (!$is_mobile) { ?> <script>                                     
    $(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });
    </script>  <?php } ?>                                 <!--desabilitar mobile-->

<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        arrows: false,
        infinite: false,
        rows: 3,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
           {
           breakpoint: 768,
           settings: {
              slidesToShow: 2,
              slidesToScroll: 2,           
           }
          }
        ]        
      });
     
      
    });
  </script>
  
<script type="text/javascript">
    var sections = $('section')
    , nav = $('nav')
    , nav_height = nav.outerHeight();

  $(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop();

    sections.each(function() {
      var top = $(this).offset().top - nav_height,
          bottom = top + $(this).outerHeight();
    
      if (cur_pos >= top && cur_pos <= bottom) {
        nav.find('a').removeClass('active');
        sections.removeClass('active');
      
        $(this).addClass('active');
        nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
      }
    });
  });

  nav.find('a').on('click', function () {
    var $el = $(this)
      , id = $el.attr('href');

    

    return false;
  });

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2579824-40', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>
