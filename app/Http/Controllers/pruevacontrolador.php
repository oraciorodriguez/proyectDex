<?php

namespace proyectDex\Http\Controllers;

use proyectDex\Http\Controllers\Controller;

class pruevacontrolador extends Controller {

           public function prueba($param){
           	  return 'Estoy dentro de pruevacontrolador y recibi este parametro'. $param;
           }

}