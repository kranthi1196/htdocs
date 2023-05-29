<?php
namespace App\Controllers; 
use CodeIgniter\Controller;
class Welcome extends Controller{ 
    public function hello()
    {
        echo 'Welcome to the CI_4 Sessions <br> Developed By Prof. Brillie Z';
    }
    public function test($name){
        echo 'The entered name is :'.$name;
    }
}
?>