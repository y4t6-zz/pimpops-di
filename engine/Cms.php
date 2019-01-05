<?php

namespace Engine;

class Cms
{
    private $di;
    private $db;

    public function __construct($di)
    {
        $this->di = $di;
        $this->db = $this->di->get('db');
    }

    public function run()
    {
        $sql = 'SELECT * FROM cats';

        $cats = $this->db->query($sql);

        echo '<h2>Cats from db:</h2>';

        foreach ($cats as $cat) {
            echo '<p>Name: ' . $cat->name . ', color: ' . $cat->color . '</p>';
        }
    }
}