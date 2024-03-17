<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::where('age','>', 50)->orWhere('zip_code','=', 29640)->orderBy('age', 'asc')->limit(5)->get();
        /*
        //--- Directivas SQL ---
        $users = User::all(); // Trae todos los registros
        $users = User::find(1); // Trae el usuario con id = 1
        $users = User::where('age','>', 50)->where('zip_code','=', 29640)->get() // Indicas el AND en la búsqueda
        $users = User::where('age','>', 50)->orWhere('zip_code','=', 29640)->get() // Indicas el OR en la búsqueda
        $users = User::where('age','>', 50)->first(); // Trae solo el primer registro
        $users = User::where('age','>', 50)->orderBy('age', 'asc')->get(); // Trae los registros ordenados por la columna age
        $users = User::where('age','>', 50)->limit(5, 10)->get(); // Trae 5 registros empezando en el 10
        */
        /*
        //--- Consulta SQL cruda ---
        $users = DB::select("SELECT * FROM users WHERE age > 40");
        */

        //return view('user.index',['users' => $users]);
        return view('user.index', compact('users'));
    }

    public function create()
    {
        // metodo 1
        $user = new User();
        $user->name = 'Ivan';
        $user->email = 'ivan@demo.com';
        $user->password = Hash::make('lalala');
        $user->age = 49;
        $user->address = 'Aqui alli nº 7';
        $user->zip_code = 29640;
        $user->save();

        //metodo 2
        User::create([
            'name' => 'Pedro',
            'email' => 'pedro@demo.com',
            'password' => Hash::make('lalala'),
            'age' => 49,
            'address' => 'C\Las flores nº 23',
            'zip_code' => 29640
        ]);

        //metodo 3
        //$users = DB::insert("INSERT INTO users (name, email, password, age, address, zip_code) VALUES ('Luis', 'luis@demo.com', 'lalala', 37, 'ramon y Cajal nº 13', 29090) ");

        return redirect()->route('users.index');
    }
}
