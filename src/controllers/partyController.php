<?php 
namespace DSW\Ifriend\Controllers;

require_once('../src/connection.php');

use Dsw\Ifriend\models\Assigment;
use Dsw\Ifriend\models\Party;
use Dsw\Ifriend\models\User;

class partyController {
    public function index(){
        //$parties = Party::all();
        $parties = Party::where('admin_id', $_SESSION['id'])->get();
        global $blade;
        echo $blade->view()->make('party.list',compact('parties'))->render();
    }
    public function store(){
        $party = new Party;
        $party->name = $_POST['name'];
        $party ->admin_id = $_SESSION['id'];
        $party->save();
        $participants = $_POST['participants'];
        shuffle($participants);
        for ($i=0; $i <count($participants) ; $i++) { 
          $assigment = new Assigment();
          $assigment -> party->id = $party->id;
          $assigment -> user_from = $participants[$i];
          $assigment -> user_to = $participants[($i+1) % count($participants)];
          $assigment->save();
        }
        header('Location: /party');
    }
    public function show($param) {
        $id = $param['id'];
        $party = Party::find($id);
        if ($party) {
            global $blade;
            echo $blade->view()->make('party.show',compact('party'))->render();
        } 
        else {
            echo 'Partida no encontrada anafabestia';
        }
    
    }
    //Show the form for editing the specified resource.
public function edit($param) {
    $id = $param['id'];
    $party = Party::find($id);
    global $blade;
    echo $blade->view()->make('party.edit', compact('party'))->render();
}

//Update the specified resource in storage.
public function update($param) {
    $id = $param['id'];
    $party = Party::find($id);
    $party->name=$_POST['name'];
    $party->save();
    header('Location: /party');
}
//Remove the specified resource from storage.
public function destroy($param) {
    $id = $param['id'];
    $party = Party::find($id);
    $party ->delete();
    header('Location: /party');
}

public function create(){
    $users = User::all();
    global $blade;
    echo $blade->view()->make('party.create', compact('users'))->render();
}
}
