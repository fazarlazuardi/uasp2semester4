<?php
    namespace App\Controllers;
    use App\Models\Modelmata_pelajaran;

    class mata_pelajaran extends BaseController
    {
        function __construct(){
            $this->Modelmata_pelajaran = new Modelmata_pelajaran();
            //$this->typemata_pelajaran = new ModelTypemata_pelajaran();
        }

        public function index()
        {
            $data['mata_pelajaran'] = $this->Modelmata_pelajaran->getData();

            return view('mata_pelajaran', $data);
        }
       

    }
    

?>