<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tarea;
class Tareas extends Controller{

    public function index() {

        return view('tareas/mostrar');

    }

}