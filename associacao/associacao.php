<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'Fabricante.php';
      require_once 'Produto.php';

      //criação dos objetos
      $p1 = new Produto('Chocolate', 10, 7);
      $f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '123854624');

      //associação
      $p1->setFabricante($f1);

      print 'A descrição é '. $p1->getDescricao().'<br>';
      print 'O fabricante é '.$p1->getFabricante()->getNome();
     ?>
  </body>
</html>
