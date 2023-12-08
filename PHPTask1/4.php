<?php
    //    Question 1

    //   $color = array("white","red","green","black","grey");
    //   echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[1] carpet, the $color[2] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon" ;


        //   Question 2

        // $color = array('white', 'green', 'red');
        // sort($color);
        // echo "<ul>";
        // foreach($color as $y){
        //     echo "<li>$y</li>";
        // } echo "</ul>";

        //   Question 3

        //   $countries = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels");
        //   asort($countries);
        //   foreach($countries as $country=>$capital){
        //     echo "The capital of $country is $capital";
        //     echo "<br>";
        //   }
          
        //   Question 4


          	// $color = array (4 => 'white', 6 => 'green', 11=> 'red');
            // echo reset($color);


            // Question 5

            //   $numbers = array(1,2,3,4,5);
            //   $numbers[2]="$";
            //   $numbers[3]=3;
            //   $numbers[1]="@";
            //   $numbers[]=6;
            //   print_r($numbers);


            // Question 6


            //   $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
            //    ksort($fruits);
            //   foreach($fruits as $char=>$frui){
            //     print_r("$char=$frui");
            //     echo "<pre>";
            //   }
            
          
            //  Question 7


            // $numbs = array( 78, 60, 62, 68, 71, 68, 73, 85, 66);

            // $average = array_sum($numbs)/count($numbs);
            // echo "The average is $average";

            // asort($numbs);
            // // print_r($numbs);
            // for($i=0;$i<6;$i++){
            //     sort($numbs);
            //     echo $numbs[$i].",";
            // }

            //  for($i=0;$i<6;$i++){
            //     rsort($numbs);
            //     echo $numbs[$i].",";
            //  }


            //   Question 8


            // $array1 = array("color" => "red", 2, 4);
            // $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
            // echo "<pre>"; 
            // print_r(array_merge($array1,$array2));
            // echo "<br>";


            //    Question 9

                // $colors = array("red","blue", "white","yellow");
                // $colors = array_flip($colors);
                // $colors = array_change_key_case($colors,CASE_UPPER);
                // print_r($colors);


                // Question 10


                // $colors = array("RED","BLUE", "WHITE","YELLOW");
                // $colors = array_flip($colors);
                // $colors = array_change_key_case($colors,CASE_LOWER);
                // print_r($colors);


                //    Question 11

                // echo implode(",",range(200,250,4));

               //  Question 12
                    
                //   $words =  array("abcd","abc","de","hjjj","g","wer");
                //   $newarray = array_map('strlen',$words);
                // //   print_r($newarray);
                // echo "The shortest array length is " . min($newarray) .
                //      ".The longest array length is " . max($newarray).'.';

                 
                //    Question 13

                //   $x = range(11,20);
                //   shuffle($x);
                // //   print_r($x);
                // for($i=0;$i<10;$i++){
                //     echo $x[$i].",";
                // }
                    
                
                //   Question 14

                  
                //   $array1 = array( 2, 0, 10, 12, 6);
                //   $min = $array1[0];
                //   for($i=1;$i<count($array1);$i++){
                //     if($array1[$i]<$min && $array1[$i]!==0){
                //         $array1 = $min;
                //     }
                //   }   echo $min;

                //  Question 15
 

                //  $numbers = array(1,3,2,8,4,6,9,5,7,11,10);
                //  sort($numbers);
                //  print_r($numbers);


                //    Question 16


                        //                         function floorDecimal($number, $precision, $separator) 
                        // {
                        //     $factor = pow(10, $precision); //100
                        //     $multiplied = $number * $factor;//115.5
                        //     $floored = floor($multiplied);//115
                        //     $result = $floored / $factor;//1.15
                        //     return number_format($result, $precision, $separator, "");
                        // }
                        // echo floorDecimal(1.155, 2, ".") ."<br>";
                        // //1.15


                //    Question 17

                   
                        //    $a1 = array(4, 5, 6, 7);
                        //    $a2 = array(4, 5, 7, 8);
                        //    $array = array_merge($a1,$a2);
                        // //    print_r($array);
                        //    echo "<pre>";
                        //    print_r(array_unique($array));
                        //    echo "<pre>";


                    //   Question 18

                        // $array = array( 4, 5, 6, 7, 4, 7, 8);
                        // echo "<pre>";
                        // print_r(array_unique($array));
                        // echo "<pre>";
                                   

                    //  Question 19

                    //  $Array1 = [1, 2, 3, 4, 5,7,8,9];
                    //  $Array2 = [2, 4, 5];
                     
                    //  $array = array_intersect($Array2,$Array1);
                    // //  print_r($array);
                    //  if($array==$Array2){
                    //     echo "Array2 is a subset array from array1";
                    //  }     
                
?>