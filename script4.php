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
        $result = $db->query('SELECT `user_id`,`stage_name` FROM `cc_users` WHERE `team_id` = '.$id);
        
        // Получение и возврат результатов
        $i = 0;
        $teamsList = array();
        while ($row = $result->fetch()) {
            $teamsList[$i]['id'] = ($row['user_id']);
            $teamsList[$i]['name'] = ($row['stage_name']);
            $i++;
        }
        echo json_encode($teamsList);
    }
  