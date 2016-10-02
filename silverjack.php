<?php
    $names = array(
        "Misael Aguilar",
        "Doug Alexander",
        "Tristan Anderson",
        "Erica Au",
        "Sonali Bharat",
        "Lucas Childers",
        "Jack Cousineau",
        "Brandon Cruz",
        "Ediberto Cruz Cruz",
        "Luigi D'Antonio",
        "Ben Dagg",
        "Jessie Dowding",
        "Cristian Galvan",
        "Alan Garcia",
        "Meya Gorbea",
        "Bianca Jaramillo",
        "Matt Johnson",
        "Morgan Juran",
        "Monique La Croix",
        "Scott Ligon",
        "Adrian Martinez",
        "Sean McCarthy",
        "Hardesh Mohar",
        "Daniel Mora",
        "Luis Mora",
        "Bryant Ng",
        "Chris Ngo",
        "Tim Perry",
        "Anna Pomelov",
        "Bryan Rodriguez",
        "Alex Ruvalcaba",
        "Josh Shallow",
        "Mateo Sixtos",
        "Austin Thao",
        "Garrett Tibbetts",
        "Michael Vargas",
        "Ulysses Vega",
        "Edwin Yantis");
        
    $players = array();
    $scores = array();
        
    function getPlayers($num){
<<<<<<< HEAD
        global $names;
        $players = array_rand($names, $num);
        
        print_r($players);
=======
        global $names, $players;
        
        $players = array_rand($names, $num);
>>>>>>> ed0a0afa775f8f482c54306dfe22b0b62810f85f
    }
    
    function getHand(){
        global $names, $players, $scores;
        for($i = 0; $i < count($players); $i++){
            echo $names[$players[$i]];
            $total = 0;
            while($total < 42){
                $card = rand(1,52);
                if(($total+(($card%13 == 0 ? 13 : $card%13))) <= 42){
                    $total += $card % 13;
                    if($card < 14){
                        echo "<img src='img/cards/clubs/" . $card . ".png'>";
                    }
                    else if($card < 27){
                        echo "<img src='img/cards/diamonds/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                    else if($card < 40){
                        if($card%13 == 0){
                            $card = 13;
                        }
                        echo "<img src='img/cards/hearts/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                    else{
                        if($card%13 == 0){
                            $card = 13;
                        }
                        echo "<img src='img/cards/spades/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                }
                else{
                    break;
                }
            }
            $scores[] = $total;
            echo "<span>".$total."</span>";
            echo "<br>";
        }
    }
    
    function displayWinner()
    {
        global $names,$players,$winner,$scores;
        $max=0;
        for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]>$max)
            {
               $max=$scores[$i];
               
            }
        }
         for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]==$max)
            {
               echo $names[$players[$i]]." Wins!";
               echo "<br/>";
            }
            
        }
    }


?>


<!DOCTYPE html>

<html>
     <style>
      
      footer{
             text-align:center;
         }
       
         body{
             background-color:#c0c0c0;
             text-align: center;
         }
         
         .listitem{
             color:green;
             
         }
      
      </style>
        

<head>
     <header>
        <h1 style="blue; background:gray "> Silver Jack </h1>
        </header>
     <meta charset="utf-8">
     <title>Lab 3: Silverjack</title>
</head>

<body>
    
    <?php
        getPlayers(4);
        getHand();
        displayWinner();
    ?>
</body>

</html>
