<?php 
namespace DSW\Ifriend\Controllers;

require_once('../src/connection.php');

use Dsw\Ifriend\models\User;

class userController {

// Display a listing of the resource.
public function index() {
    //Obtener datos modelo
    $users = User::all();
    echo'<h1>Listado de Users</h1>';
    foreach ($users as $user) {
        echo"<p>".$user->name."</p>";
    }
}

// Show the form f  or creating a new resource.
public function create() {}

// Store a newly created resource in storage.
public function store() {}

// Display the specified resource.
public function show($param) {
    $id = $param['id'];
    $user = User::find($id);
    if ($user) {
        echo'<h1>El user es </h1>';
        echo $user->name;
    } else {
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