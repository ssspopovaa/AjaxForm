<?php

function getCategoriesList()
    {
        // Устанавливаем соединение
        $dsn = "mysql:host=localhost;dbname=form";
        $db = new PDO($dsn, 'root','');

        // Задаем кодировку
        $db->exec("set names utf8");
        // Запрос к БД
        $result = $db->query('SELECT id, name FROM `cc_callcenters`');
        
        // Получение и возврат результатов
        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
function getTeamsList()
    {
        // Устанавливаем соединение
        $dsn = "mysql:host=localhost;dbname=form";
        $db = new PDO($dsn, 'root','');

        // Задаем кодировку
        $db->exec("set names utf8");
        // Запрос к БД
        $result = $db->query('SELECT id, name FROM `cc_teams`');
        
        // Получение и возврат результатов
        $i = 0;
        $teamsList = array();
        while ($row = $result->fetch()) {
            $teamsList[$i]['id'] = $row['id'];
            $teamsList[$i]['name'] = $row['name'];
            $i++;
        }
        return $teamsList;
    }