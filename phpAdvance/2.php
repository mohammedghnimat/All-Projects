<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
      <form action="" method="POST">
        <input type="text" name="number1" placeholder="enter number1">
        <input type="text" name="number2" placeholder="enter number2"> 
        <select name="operator" >
          <option value="Add">Addition</option>
          <option value="Substract">Substraction</option>
          <option value="Multiply">Multiply</option>
          <option value="Divide">Division</option>
        </select>
        <input type="submit" name="calculate" value="calculate">
      </form>
      <?php
      
              if(isset($_POST['calculate'])){
                $number1 = $_POST['number1'];
                $number2 = $_POST['number2'];
                $operator = $_POST['operator'];
                
                switch($operator){
                    case 'Add':
                    $Answer =  $number1+ $number2;
                    break;

                    case 'Substract':
                    $Answer = $number1-$number2;
                    break;

                    case 'Multiply':
                    $Answer = $number1*$number2;
                    break;

                    case 'Divide':
                    $Answer = $number1/$number2;
                    break;

                    default: 
                    echo "no operator";
                    break;
                }
              } echo "Answer is".$Answer;
      
  
            
      ?>
  </body>
</html>
