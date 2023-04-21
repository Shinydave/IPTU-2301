<?php
$score1=0;
$score2 =0;
$dicecache=0;
$whichplayer=1;  
$winpoints=100;
$showform = true;



if(isset($_POST["whichplayer"])){

    $whichplayer = $_POST["whichplayer"];

}

//spielstand player 1
if (!empty($_POST["score1"])){
    $score1 = $_POST["score1"];
    
}


//spielstand player 2
if (!empty($_POST["score2"])){
    $score2 = $_POST["score2"];
}

//temporärer gesamtwurf
if (!empty($_POST["dicecache"])){
    $dicecache = $_POST["dicecache"];
}


if(isset($_POST["dice"])){
   $dice = $_POST["dice"];
   $throw = rand (1,6); 
   //erhöhen des temporären wurfstandes
   echo "es wurde $throw gewürfelt<br>";
   if($throw<1){
    $throw = $throw + $dicecache;
    
    if($whichplayer==1){
     if($score1+$throw>=$winpoints){
        $showform = false;
       $win = 1;
     }   
    
    }else{
        if($score2+$throw>=$winpoints){
            $showform = false;
        $win = 2;
        }
    }

   } else {
    $dicecache=0;
    
    if($whichplayer==1){
        
        $whichplayer =2;
    }else { 
        $whichplayer = 1;
    }
   }
  

}

if(isset($_POST["stop"])){
//player wechseln, würfelergebnis addieren zum Gesamtergebnis
    //erhöhen des Spielstandes für Spieler 1     
     if($whichplayer==1){
        // wenn der bisherige Spieler 1 ist, dann ist jetzt Spieler 2 dran
        $score1 = $score1 + $dicecache;
        $whichplayer =2;
    } else { // d.h. es spielt gerade Spieler 2, wir wechseln zu Spieler 1
        
        $score2 = $score2 + $dicecache;
        $whichplayer = 1;
    }

    $dicecache =0;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schweinchen</title>
</head>
<body>

<?php
if($showform==true){
    ?>
<form action= "schweinchen.php" method="POST">
    <input type="submit" name="dice" Value="würfeln"> <br>
    <input type="hidden" name="dicecache" value= "<?php if (isset($dice)) echo $throw;?>"><br>
    <input type="submit" name="stop" value = "aufhören"><br>
    <input type="hidden"   name="score1" value="<?php echo $score1 ?>"><?php echo "Spieler 1 hat im Moment $score1 Punkte" ?><br>
    <input type="hidden"   name="score2" value="<?php echo $score2 ?>"><?php echo "Spieler 2 hat im Moment $score2 Punkte" ?><br>
    <input type="hidden"   name="whichplayer" value ="<?php echo $whichplayer;?>"><?php echo "Es spielt gerade Spieler $whichplayer" ?><br>
<?php
}else{
    if($win == 1){
    
    echo "Spieler1: ".$score1+$throw."<br>";
    echo "Spieler2: $score2";
    

    }else{

        echo "Spieler2: ".$score2+$throw."<br>";
        echo "Spieler1: $score1";

    }
    
    echo "Der Spieler$win hat gewonnen";

}
  ?>


    


    












</body>
</html>