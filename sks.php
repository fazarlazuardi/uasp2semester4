<?php
    namespace App\Controllers;
    use App\Models\Modelsks;

    class sks extends BaseController
    {
        function __construct(){
            $this->Modelsks = new Modelsks();
            //$this->typesks = new ModelTypesks();
        }

        public function index()
        {
            $data['sks'] = $this->Modelsks->getData();

            return view('sks', $data);
        }
       

    }
    

?>