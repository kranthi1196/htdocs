<?php
namespace App\Controllers;

class AssociativeArray extends \CodeIgniter\Controller{
    public function index(){
      
        $data = ["page_title" => "Ci4 Associative Array",
                 "page_body" => "This is an Example for Associative Array inside Main Associative Data Array",
                 "subjects" => ["HTML","CSS","JAVASCRIPT","PHP","MYSQL","ORACLE","JSON","CODEIGNITER","LARAVEL"],         
                ];
    echo view("Associative/index",$data);
    }
}
?>