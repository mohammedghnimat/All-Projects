
<!-- question 9 -->
<!-- <html>
    <body>
        <table align="left" border="1" cellpadding="3" cellspacing="0">
            <?php
            
            //    for($i=1;$i<=6;$i++){
            //     echo "<tr>";
            //     for($j=1;$j<=5;$j++){
            //         echo "<td> $i*$j=" .$i*$j."<td>";
            //     } echo "<tr/>";
            //    }
            ?>
        </table>
    </body>
</html> -->

<?php
    //   Question 1
    //  for($i=1;$i<=10;$i++){
    //     if($i<10){
    //         echo "$i-";
    //     }else{
    //         echo $i;
    //     }
    //  }
    //    Question 2
    //   $total =0;
    //  for($i=0;$i<=30;$i++){
    //      $total+=$i;
    //  }
    //  echo "The total sum numbers between 0 and 30 is $total "

     
     
        // for($x=1;$x<=5;$x++){
        //     for($j=1;$j<=5;$j++){
        //         if()
        //         echo "1";
        //     }
        //      echo "<br>";
        // }

        //  Question 6
        // $num = 7;
        // $fact = 1;
        // for($i=1;$i<=$num;$i++){
        //     $fact = $fact*$i;
        // }
        //   echo $fact;

        //    Question 7
        // $a = 0;
        // $b = 1;
        // $c;
        // echo $a."," .$b;
        // for($i=1;$i<7;$i++){
        //     $c = $a+$b;
        //     $a=$b;
        //     $b=$c;
        //     echo ",".$c;
        // }
            // Question 8
        //   $str= "Orange coding Academy";
        //   $count=0;
        //   for($i=0;$i<strlen($str);$i++){
        //     if($str[$i]=="c"){
        //          $count++;
        //     }  
        //   }
        //     echo $count;


            //    Question 11


        //   $rows = 5;
        //   $n = 1;
        //  for($i=1;$i<=$rows;$i++){
        //     for($j=1;$j<=$i;$j++){
        //          echo $n ,"&nbsp;&nbsp;";
        //          $n++;
        //     } 
        //     echo "<br>";
        //  }   

            //  Question 5

            // $rows = 5;
            // $columns= 5;
            // $n=1;
            // for($i=1;$i<=$rows;$i++){
            //     for($j=1;$j<=$columns;$j++){
            //        if($i==$j){
            //            echo $n;
            //            $n++;
            //        }else{
            //          echo "0";
            //        }
            //     } echo "<br>";
            // }

            // Question 4

            //     $rows = 5;
            //    for($i=1;$i<=$rows;$i++){
            //     for($j=1;$j<=$rows;$j++){
            //         if($i>=$j){
            //             echo $j;
            //         }else{
            //             echo $i;
            //         }
            //     }
            //       echo "<br>";
            //    }

            //    Question 5
             
            // $rows = 5;
            // for($i=1;$i<=$rows;$i++){
            //     for($j=1;$j<=$rows;$j++){
            //         if($i<=$j){
            //             echo "a";
            //         }else{
            //             echo "b";
            //         }
            //     }
            //     echo "<br>";
            // }

                //    Question 3   

            //  for ($i = 0; $i < 5; $i++) {
            //     for ($j = 0; $j < 4 - $i; $j++) {
            //         echo 'A&nbsp;&nbsp;';
            //      }
            //      for ($k = 0; $k <= $i; $k++) {
            //          echo chr(ord('A') + $i) . '&nbsp;&nbsp;';
            //     }
            //      echo '<br>';
            // }

                    
               
                    // $num = '1';
                    // $next_num = $num;
                    //    for ($i = 1; $i <= 5; $i++) { // rows
                    //        for ($j = 1; $j <= 5; $j++) { // cloms
                    //            if ($j <= (5 - $i)) {
                    //                echo "1"," " ;
                    //            } else {
                    //                 echo $next_num . "  ";
                    //               }
                    //            }
                    //            $next_num = ++$num;
                    //            echo "<br>";
                    //              }




            //   Question 4


            //  for ($i = 0; $i < 5; $i++) {
            //     for ($j = 0; $j < 4 - $i; $j++) {
            //         echo '1&nbsp;&nbsp;';
            //      }
            //    for ($k = 0; $k <= $i; $k++) {
            //         echo chr(ord('1') + $i) . '&nbsp;&nbsp;';
            //      }
            //      echo '<br>';
            //  }



                    // $char = 'A';
                    // $next_char = $char;
                    //    for ($i = 1; $i <= 5; $i++) { // rows
                    //        for ($j = 1; $j <= 5; $j++) { // cloms
                    //            if ($j <= (5 - $i)) {
                    //                echo "A"," " ;
                    //            } else {
                    //                 echo $next_char . "  ";
                    //               }
                    //            }
                    //            $next_char = ++$char;
                    //            echo "<br>";
                    //              }


            //   Question 10


            // for($i=1;$i<=50;$i++){
            //     if($i%3==0 && $i%5==0){
            //         echo $i. "FizzBuzz";
            //     }elseif($i%3==0){
            //         echo $i. "Fizz";
            //     }elseif($i%5==0){
            //         echo $i. "Buzz";
            //     }else{
            //          echo $i;
            //     } echo "<br>";

            // }




                    // Question 12



                    // $a = range('A', 'E');
                    //     $b = 'A';  
                    //     $c = 0;
                    //     for ($i=0; $i < 5; $i++) { 
                    //         for ($j=8-$i; $j >=1 ; $j--) { 
                    //             echo "&nbsp;&nbsp;";
                    //         }
                    //         if ($i == 0){
                    //             echo'A';
                    //         }
                    //         for ($k=0; $k <= $i; $k++) { 
                    //             echo $a[$c]."&nbsp;&nbsp;";
                    //             $c++;
                    //         }
                    //         $c = 0;
                    //         echo "<br>";
                    //     }
                    //     for ($i=0; $i < 3; $i++) { 
                    //         for ($j=0; $j<=$i+4 ; $j++) { 
                    //             echo "&nbsp;&nbsp;";
                    //         }
                    //         for ($k=3-$i; $k >= 0; $k--) { 
                    //             echo $a[$c]."&nbsp;&nbsp;";
                    //             $c++;
                    //         }
                    //         $c = 0;
                    //         echo "<br>";
                    //     }

?>



