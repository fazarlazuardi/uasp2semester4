<?php
    namespace App\Controllers;
    use App\Models\Modelmahasiswa;

    class mahasiswa extends BaseController
    {
        function __construct(){
            $this->Modelmahasiswa = new Modelmahasiswa();
            //$this->typeMahasiswa = new ModelTypeMahasiswa();
        }

        public function index()
        {
            $data['mahasiswa'] = $this->Modelmahasiswa->getData();

            return view('mahasiswa', $data);
        }
       

    }
    

?>