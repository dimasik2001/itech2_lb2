<!DOCTYPE HTML>
<html>
<head>
    <title>Чемпионат</title>
</head>
<body>
    <?php
    include "conn.php";
    $league = $_GET['league'];
    $key = $league;
    $cursor = $game->find(['league'=>$league]);
    $value =  "<table border =1><tr><th>Date</th><th>League</th><th>Team1</th><th>Score</th><th>Team2</th></tr>";
    foreach ($cursor as $document){
        $date = $document['date'];
        $teams = $document['teams'];
        $team1 = $teams[0];
        $team2 = $teams[1];
        $score = $document['score'];
       $value .= "<tr><td>$date</td><td>$league</td><td>$team1</td><td>$score</td><td>$team2</td></tr>";
    }
    echo $value;
    echo "<script> localStorage.setItem('$key', '$value'); </script>"
    ?>
    

</body>
<html>