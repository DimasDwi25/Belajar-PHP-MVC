<?php 

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller;
use ProgrammerZamanNow\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index():void
    {
        $model = [
            'title' => 'Belajar PHP MVC',
            'content' => 'selamat belajar PHP MVC di channel programmer zaman now'
        ];
        
        View::render('index', $model);
    }

    function hello():void
    {
        echo "HomeController.hello()";
    }

    function world():void
    {
        echo "HomeController.world()";
    }

    function about():void
    {
        echo "Author : Dimas Dwi Susanto";
    }

    function login():void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message" => "login sukses"
        ];
    }
}

?>