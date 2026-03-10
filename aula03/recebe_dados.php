<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>
    <?php
       $nome  =  htmlspecialchars($_POST['nome']);
       $email =  $_POST['email'];
       $idade =  $_POST['idade'];

       $ano_atual = date("Y");
         $ano_nascimento = $ano_atual - $idade;

         if ($idade < 18) {
            echo  "<span style=color:blue>Você é menor de idade. </p></span>" ;
         } else {
            echo "span style=color:red<p> Você é maior de idade. </p></span>";
         }
    ?>

    <p> O nome é: <?php echo $nome; ?> </p>
    <p> O nome é: <?php echo $email; ?> </p>
    <p> O nome é: <?php echo $idade; ?> </p>
    <p> O ano de nascimento é: <?php echo $ano_nascimento; ?> </p>
    
</body>
</html>