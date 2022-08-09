<html>
<head>
  <meta charset="utf-8" />
  <title>CONFIG PAGINA </title>
</head>

<body>
    <H1>COLOQUE INFORMAÇÃO DOS PRODUTOS: </H1>
    <form action="config_php.php" method="POST">
        <h5>VALOR:<h5>
        <input type="text" name="valor">
        <br>
        <h5>PRODUTO<h5>
        <input type="text" name="produto">
        
        <input type="submit" name="Pesquisar"/>
    </form>
    <?php
          $valor = $_POST["valor"];
          $att = "R$ $valor ";
          $abrir = fopen("valor.txt","w+");
          fwrite($abrir,$att);
          fclose($abrir);

          $produto1 = $_POST["produto"];
          $abrir2 = fopen("produto.txt","w+");
          fwrite($abrir2,$produto1);
          fclose($abrir2);
                           
    ?>
</body>
</html>