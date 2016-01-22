<?php

namespace Application\Models;

use Application\Core\Model;

class HomeModel extends Model
{
    public function getAllHome()
    {
        $query = $this->db()->prepare('select * from test');
        $query->execute();
        return $query->fetchAll();
    }
}
