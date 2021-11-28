<?php

namespace AlfianKhusnul\PHP\MVC\Controller;

use AlfianKhusnul\PHP\MVC\App\View;

class HomeController
{
    function index() : void
    {
        $model = [
            'title' => 'PHP MVC',
            'content' => 'Anda sedang menggunakan PHP MVC dari Alfian Khusnul Amar'
        ];

        View::render('Home/index', $model);
    }

    function hello() : void
    {
        echo "HomeController.hello()";
    }

    function world() : void
    {
        echo "HomeController.world()";
    }
}