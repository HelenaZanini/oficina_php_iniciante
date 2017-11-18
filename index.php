<!DOCTYPE html>  
<html lang="pt-br"> 
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
      
        <?php

            // Coloque seu código aqui!
        echo "<form action=index.php method=POST> 
          <input type=number name=a value=submit>
          <input type=number name=b value=submit>
          <input type=submit name=submit text=soma>
        </form>";
        
               
        
        $a = $_POST["a"];
        $b = $_POST["b"];
        
        echo "Variavel a: ". $a; echo "<br>";
        echo "Variavel b: ". $b; echo "<br>";
      
        $sum = $a + $b;
        $sub = $a - $b;
        $mult = $a * $b;
        $div = $a / $b;
        $mod = $a % $b;
        $exp = $a ** $b;
      
//         $compare = $a === $b;
         
        
        echo "Soma a + b: ". $sum; echo "<br>";
        echo "Subtração a - b: ". $sub; echo "<br>";
        echo "Multiplicação a * b: ". $mult; echo "<br>";
        echo "Divisão a / b: ". $div; echo "<br>";
        echo "Modulo a / b: ". $mod; echo "<br>";
        echo "Exponencial a e b: ". $exp; echo "<br>";
//         echo "Comparação de tipo a e b: ". $compare; echo "<br>";
        if ($a > $b) {
           print ("a é maior que b");
        } else if ($a == $b) {
           print ("a é igual a b"); 
        } else {
           print ("a é menor que b");
        }; echo "<br>";
      
        function par_ou_impar ($x) {
          if ($x % 2 == 0) {
            return "par";
          } else 
            return "impar";
        }
      
        while ($a <= 10) {
          print ($a. " é: ". par_ou_impar ($a)); echo "<br>";
          $a = $a + 1;
        }
        
        $comidas = ["Baião de 2", "Pudim", "Feijão Tropeiro", "Batata Assada"];
        
        foreach($comidas as $comida) {
          echo "Minha comida favorita é: " . $comida . "<br>";
        }
      
        array_push($comidas, "Sopa de cebola");
        echo $comidas[4] . "<br>";
         
        array_pop($comidas);
      
        foreach($comidas as $comida) {
          echo "Minha comida favorita é: " . $comida . "<br>";
        }
      
      
//         echo "<form action=index.php method=POST> 
//           <input type=text name=ta>
//           <input type=text name=tb>
//           <input type=submit name=submit text=soma>
//         </form>";
      
//         $ta = $_POST["ta"];
//         $tb = $_POST["tb"];
        
//         echo $ta. " ". $tb. "!";
        
        

        ?>

    </body>
</html>