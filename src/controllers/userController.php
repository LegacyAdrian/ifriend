<?php 
namespace DSW\Ifriend\Controllers;

require_once('../src/connection.php');

use Dsw\Ifriend\models\User;

class userController {

// Display a listing of the resource.
public function index() {
    //Obtener datos modelo
    $users = User::all();
        global $blade;
     echo $blade->view()->make('list',compact('users'))->render();
}

// Show the form f  or creating a new resource.
/* public function create() {
    global $blade;
    echo $blade->view()->make('create')->render();;
} */

// Store a newly created resource in storage.
public function store() {
    var_dump($_POST);
}

// Display the specified resource.
public function show($param) {
    $id = $param['id'];
    $user = User::find($id);
    if ($user) {
        global $blade;
        echo $blade->view()->make('show',compact('user'))->render();
    } 
    else {
        echo 'Usuario no encontrado anafabestia';
    }

}

//Show the form for editing the specified resource.
public function edit($id) {}

//Update the specified resource in storage.
public function update($id) {}

//Remove the specified resource from storage.
public function destroy($id) {}

}
?>