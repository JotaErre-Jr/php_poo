<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'produto.php';
      require_once 'caracteristicas.php';

      //criação do objeto
      $p1 = new Produto('Chocolate', 10, 7);

      //composição
      $p1->addCaracteristica('Cor', 'Branco');
      $p1->addCaracteristica('Peso', '2.6 kg');
      $p1->addCaracteristica('Potência', '20 watts RMS');

      $p1->addCaracteristica('Cor', 'Preta');
      $p1->addCaracteristica('Peso', '3.8 kg');
      $p1->addCaracteristica('Potência', '40 watts RMS');

      print 'Produto: '.$p1->getDescricao().'<br>';
      foreach ($p1->getCaracteristicas() as $c) {
          print '-----------------------------------<br>';
          print 'Caracteristicas: '.$c->getNome(). ' - '.$c->getValor().'<br>';
      }
     ?>
  </body>
</html>
