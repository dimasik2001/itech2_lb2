<!DOCTYPE HTML>
<html>

<head>
    <title>ЛБ2</title>
    <style>
        div {
            background-color: lightblue;
        }
        
    </style>
    <script src="localStorage.js">
    </script>
</head>
<div id="task">
    <p><b>Вариант 7.</b>
    Создать и заполнить БД футбольного чемпионата. В базе представлены две коллекции - коллекция документов,
    описывающая команды (название, тренер, состав команды (массив футболистов)), и коллекция, содержащая документы, 
    которые описывают игры чемпионата (лига, дата и место проведения, команды-участницы игры, победитель и т.д.).
        <br>Предоставить пользователю возможность получения следующей информации:
    </p>
    <ul>
        <li>таблица чемпионата для выбранной лиги;</li>
        <li>список футболистов указанной команды;</li>
        <li>список игр, в которых участвовала выбранная команда.</li>
    </ul>
</div>
<form method="get" action="table.php">
Таблица чемпионата лиги <select name="league" id="league" onchange="leagueFunction()">
            <?php
                include 'conn.php';
                $table = $game->distinct("league");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button>
</form>

<form method="get" action="list_of_player_by_team.php">
<p>Список футболистов указанной команды <select name="player" id="player" onchange="playerFunction()">
            <?php
                include 'conn.php';
                $table = $team->distinct("title");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button></p>
</form>
<form method="get" action="list_of_game_by_team.php">
<p>Список игр, в которых участвовала выбранная команда <select name="team" id="team" onchange="teamFunction()">
            <?php
                include 'conn.php';
                $table = $game->distinct("teams");
                foreach ($table as $document) {
                    echo "<option>";
                    echo($document);
                    echo "</option>";
                }
                echo '</select>';
            ?>
    </select>
    <button> ОК </button> </p>
</form>
<div id="res"></div>
</body>

</html>