<?php

namespace App\Repositories;

use App\Database\DB;
//use App\Interfaces\DBInterface (???)
class BaseRepository extends DB // implements
{
    protected string $tableName;

    public function getAlll(): array
    {
        $query = $this->select() . "ORDER BY name";

        return $this->mysqli->query($query)->fetch_all(MYSQLI_ASSOC);
    }
    
    public function select()
    {
        return "SELECT * FROM `{$this->tableName}` " ;
    }


}

