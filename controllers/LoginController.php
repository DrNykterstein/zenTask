<?php

namespace Controllers;

use MVC\Router;

class LoginController{
    public static function login(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        //render a la vista
        $router->render('auth/login',[
            'titulo'=> 'Iniciar Sesion'
        ]);
    }


    public static function logout(){
        echo "cierro la sesion";
    }

    public static function crear(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        //render a la vista
        $router->render('auth/crear',[
            'titulo'=> 'Crea tu cuenta'
        ]);
    }

    public static function olvide(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        $router->render('auth/olvide',[
            'titulo'=> 'Recupera tu cuenta '
        ]);
    }

    public static function reestablecer(Router $router){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        $router->render('auth/reestablecer',[
            'titulo'=> 'Reestablecer contraseña '
        ]);
    }

    public static function mensaje(Router $router){
        $router->render('auth/mensaje',[
            'titulo'=> 'Cuenta creada exitosamente'
        ]);
    }

    public static function confirmar(Router $router){
        $router->render('auth/confirmar',[
            'titulo'=> 'Cuenta creada exitosamente'
        ]);
    }


}