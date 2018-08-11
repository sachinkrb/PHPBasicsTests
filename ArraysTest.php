<?php
list($a, $b) =array('lisa','tiger');
echo "her name is $a his name is $b";
//Multidimesional arrays
$produce = array(

    'fruits'=> array(
        'apple' => "Fuji apple",
        'orange' => "Navel orange",
        'necatarines' => "White nectarines"),
        
    'vegetables' => array(
        'mushroom' => "crown mushroom",
        'potato' => "red potato",
        'tomato' => "cherry tomatoes")
        
        );

        echo "<pre>";
        foreach($produce as $types => $items)
        foreach($items as $key => $value)
        echo "$types:\t$key\t($value)<br>";
        echo "</pre>";
        echo $produce['fruits']['apple'];

        $chessboard = array(
            array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
            array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
            array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
            array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
            array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
            array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
            array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
            array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
          );
          echo "<pre>";
          foreach($chessboard as $row)
          {
            foreach ($row as $piece)
              echo "$piece ";
            echo "<br>";
          }
          echo "</pre>";
          echo $chessboard[7][4]."<br>";
          echo(is_array($chessboard))? "Is an array": "Is not an array";
          echo "<br>" . "Counting total number of rows: " . count($chessboard);
          echo "<br>"."Counting total number of squares: " . count($chessboard, 1);
          if(sort($chessboard))
          {
              echo "<br>"."Sorted";
          }
          $temp = explode(' ', "This sentence is gonna break up into arrays as its ordered to be seperated by spaces");
          print_r($temp);
          //USING COMPACT TO CREATE ARRAYS FROM VARIABLES
          $fname ='Sachin';
          $lname='Shrestha';
          $planet='Neptune';
          $system= 'Linux';
          $department= 'Advisor';
          $full_contact_info = compact('fname', 'lname', 'planet', 'system', 'department');
          echo "<br>";
          print_r($full_contact_info);
          print_r(compact(explode(' ', 'fname lname planet system department')));
          
?>