<?php

namespace App\Http\Controllers;
use App\Compte;
use App\Client;
use App\User;
use  Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        //
        //$liste_comptes = Compte::paginate(2);
        $liste_comptes = Compte::all();
        return view('compte.list',['liste_comptes' =>$liste_comptes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        $clients = Client::all();
        return view('compte.add', ['clients' =>$clients]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $compte = Compte::find($id);
        return view('compte.edit' ,  ['compte' =>$compte]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $compte = Compte::find($request->id);
        $compte->numcompte = $request->numcompte;
        $compte->numagence = $request->numagence;
        $compte->typecompte = $request->typecompte;
        $compte->clients_id = $request->clients_id;
        $compte->users_id = $request->Auth::id();
        $result = $compte->save();

        return redirect('/compte/getAll');
        //return $this->getAll();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $compte = Compte::find($id);
        if($compte!=null)
        { 
            $compte->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        //
        //echo $request->nom;
        //return $this->add();
        $compte = new Compte();
        $compte->numcompte = $request->numcompte;
        $compte->numagence = $request->numagence;
        $compte->typecompte = $request->typecompte;
        $compte->clients_id = $request->clients_id;
        $compte->users_id = Auth::id();
        $result = $compte->save();
        //echo $result;
        return $this->add();
        //return view('compte.add',  ['confirmation' =>$result]);
    }
}
