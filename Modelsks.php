<?php namespace App\Models;

use CodeIgniter\Model;

class Modelsks extends Model
{

    public function getData()
    {
        $query = "SELECT sks,mata_pelajaran FROM matkul";

        
        $query=$this->db->query($query);
            
        return $query->getResultArray();

    }
}
?>