<?php namespace App\Models;

use CodeIgniter\Model;

class Modelmata_pelajaran extends Model
{

    public function getData()
    {
        $query = "SELECT mahasiswa.jk ,count(*) as jumlah, matkul.mata_pelajaran,mahasiswa.status FROM mahasiswa LEFT JOIN matkul ON mahasiswa.id_matkul = matkul.id_matkul GROUP BY mahasiswa.jk,matkul.mata_pelajaran,mahasiswa.status; ";

        
        $query=$this->db->query($query);
            
        return $query->getResultArray();

    }
}
?>