<?php

class Controller
{
    protected $db;

    /**
     * Controller constructor.
     * @param array $config
     */
    public function __construct($config)
    {
        $this->db = new PDO('mysql:host=' . $config['db_host'] . ';dbname=' . $config['db_name'],
            $config['db_user'],
            $config['db_pass']
        );

        $this->db->exec('set names utf8');
    }

    public function indexAction()
    {
        $sth = $this->db->prepare('SELECT * FROM `cc_callcenters`');
        $sth->execute();
        $categories = $sth->fetchAll(PDO::FETCH_ASSOC);

        ob_start();
        require_once 'templates/index.phtml';
        return ob_get_clean();
    }

    public function userListAction()
    {
        $sth = $this->db->prepare('SELECT * FROM `cc_users` WHERE team_id = :team_id');
        $sth->bindParam(':team_id', $_REQUEST['id_team']);
        $sth->execute();

        header('Content-Type: application/json');
        return json_encode($sth->fetchAll(PDO::FETCH_ASSOC));
    }

    public function deskListAction()
    {
        $sth = $this->db->prepare('SELECT * FROM `cc_desks` WHERE id_callcenter = :id_callcenter');
        $sth->bindParam(':id_callcenter', $_REQUEST['id_callcenter']);
        $sth->execute();

        header('Content-Type: application/json');
        return json_encode($sth->fetchAll(PDO::FETCH_ASSOC));
    }

    public function teamListAction()
    {
        $sth = $this->db->prepare('SELECT * FROM `cc_teams` WHERE id_desk = :id_desk');
        $sth->bindParam(':id_desk', $_REQUEST['id_desk']);
        $sth->execute();

        header('Content-Type: application/json');
        return json_encode($sth->fetchAll(PDO::FETCH_ASSOC));
    }
}