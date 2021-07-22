<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Royal Log</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


  <script src="https://use.fontawesome.com/0c4bf88f68.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,200,900' rel='stylesheet' type='text/css'>

  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  

  

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12">
          <h4 class="red-text text-darken-4">Tire suas dúvidas</h4>
          
          <p>Fique à vontade para tirar suas dúvidas, preenchendo o formulário abaixo, pelo teleofone <strong>(41) 3528-9620</strong> ou pelo e-mail: <a href="mailto:royallog@royallog.com.br">royallog@royallog.com.br</a> </p>






<?php
      if ($_POST['envio']){
        require("phpmailer/class.phpmailer.php");
        $nome = $_POST['nome'];
      $email = $_POST['email'];
      $telefone = $_POST['telefone'];
      $mensagem = $_POST['mensagem'];
      if (!$nome || !$email || !$telefone || !$mensagem){
        ?>
          <script type="text/javascript">
            alert("Preencha todos os campos");
          </script>
        <?php
      } else {
        $mail = new PHPMailer();
        $mail = new PHPMailer();
         $mail->isMail();
         $mail->CharSet = 'UTF-8';
         $mail->From = "r.deconto@gmail.com"; // Seu e-mail  
         $mail->FromName = "Site Royal Log"; // Seu nome 
         
         $mail->addReplyTo($email,$nome);
         
         $mail->AddAddress("rafael@umma.com.br");
        
         
         $mail->isHTML();
         
         $mail->Subject = "Contato via site - Dúvidas";
         
         $mail->Body = "Nova mensagem enviada pelo site<br/><br/>Nome: $nome<br/>E-mail: $email<br/>Telefone: $telefone<br/>Mensagem: $mensagem<br/><br/>Envio realizado em ".date('d/m/Y H:i:s');
        
         $mail->send();
         
         unset($nome,$email,$telefone,$mensagem);
         
         ?>
         
         <script type="text/javascript">
          window.alert("Mensagem enviada com sucesso")
         </script>
         
         <?php
      }
      }
?>



          <form action="duvidas.php" method="post" id="form_contato" class="col s12">
            <input type="hidden" name="envio" value="1">
     
    <div class="row">
        <div class="input-field col s12">
          <input name="nome" id="nome" type="text" class="validate" value="<?php echo isset($nome) ? $nome : ""?>">
          <label for="nome">Nome</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s6">
          <input name="email" id="email" type="text" class="validate" value="<?php echo isset($email) ? $email : ""?>">
          <label for="email">Email</label>
        </div>
        <div class="input-field col s6">
          <input  name="telefone" id="telefone" type="text" class="validate" value="<?php echo isset($telefone) ? $telefone : ""?>">
          <label for="telefone">Telefone</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <textarea name="mensagem" id="mensagem" class="materialize-textarea"><?php echo isset($mensagem) ? $mensagem : ""?></textarea>
          <label for="textarea1">Mensagem</label>
        </div>
    </div>
    
  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>
        
</form>
        

        </div>
      </div>

    </div>
  </div>

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
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
 


  </body>
</html>
