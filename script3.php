<?php

getTeamsListById($_POST['id']);
function getTeamsListById($id)
    {
            // Устанавливаем соединение
        $dsn = "mysql:host=localhost;dbname=form";
        $db = new PDO($dsn, 'root','');

        // Задаем кодировку
        $db->exec("set names utf8");
        // Запрос к БД
        $result = $db->query('SELECT `id`,`team_name` FROM `cc_teams` WHERE `id_desk` = '.$id);
        
        // Получение и возврат результатов
        $i = 0;
        $teamsList = array();
        while ($row = $result->fetch()) {
            $teamsList[$i]['id'] = ($row['id']);
            $teamsList[$i]['name'] = ($row['team_name']);
            $i++;
        }
        echo json_encode($teamsList);
    }
  