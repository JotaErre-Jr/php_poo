<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class Caracteristica{
      private $nome;
      private $valor;

      public function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
      }

      public function getNome(){
        return $this->nome;
      }

      public function getValor(){
        return $this->valor;
      }
    }
     ?>
  </body>
</html>
