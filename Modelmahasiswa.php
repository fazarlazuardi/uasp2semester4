<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{

    public function getData()
    {
        $query = "SELECT mahasiswa.jk, count(*) as jumlah, matkul.mata_pelajaran FROM mahasiswa LEFT JOIN matkul on mahasiswa.id_matkul = matkul.id_matkul group by mahasiswa.jk, matkul.mata_pelajaran order by mahasiswa.jk asc, matkul.mata_pelajaran desc";

        
        $query=$this->db->query($query);
            
        return $query->getResultArray();

    }
}
?>