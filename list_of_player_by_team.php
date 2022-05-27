<!DOCTYPE HTML>
<html>
<head>
    <title>Чемпионат</title>
</head>
<body>
<?php
    include "conn.php";
    $player = $_GET['player']; 
    $key = $player . " 1";
    $cursor = $team->find(['title'=>$player]);
    $value = "<table border =1><tr><th>Title</th><th>Coach</th><th>Players</th></tr>";
    foreach ($cursor as $document){
        $title = $document['title'];
        $coach = $document['coach'];
        $players = $document['players'];
        if(is_object($players)){
          $players = (array)$players;
          $players = (implode(", ", $players));
        }
         $value = $value . "<tr><td>$title</td><td>$coach</td><td>$players</td></tr>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
?>
</body>
</html>
