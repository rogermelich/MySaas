<?php

namespace App\Http\Controllers;

use App\User;
use Cache;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index(){
        //Cachejo el Usuaris durant 10 minuts, si passen aquests 10 minuts retornar User::all()
        $users = Cache::remember('users',10,function(){
            return User::all();
        });

        return $users;
    }

    public function store()
    {
        User::create(['name' => 'Pepito','email' => 'pepito@pepito.com']);

        //Amb el flush o cacheja tot, nosaltres sols volem el de usuers per la qual cosa farem el forget
        //Cache::flush();
        Cache::forget('query.users');
    }

    public function update()
    {
        $user = User::first();

        $user->name='Pepito';

        $user->save();

        //Cache::flush();
        Cache::forget('query.users');
    }

    public function destroy($id)
    {
        User::destroy($id);

        //Cache::flush();
        Cache::forget('query.users');

    }
}
