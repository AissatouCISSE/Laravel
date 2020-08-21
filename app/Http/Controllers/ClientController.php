<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;


class ClientController extends Controller
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
        $liste_clients = Client::paginate(2);
        //$liste_clients = Client::all();
        return view('client.list',['liste_clients' =>$liste_clients]);
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
        return view('client.add');
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
        $client = Client::find($id);
        return view('client.edit' ,  ['client' =>$client]);
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
        //
        $client = Client::find($request->id);
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->cni = $request->cni;
        $result = $client->save();

        return redirect('/client/getAll');
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
        $client = Client::find($id);
        if($client!=null)
        { 
            $client->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        //
        //echo $request->nom;
        //return $this->add();
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->telephone = $request->telephone;
        $client->email = $request->email;
        $client->cni = $request->cni;
        $result = $client->save();
        //echo $result;
        //return $this->add();
        return view('client.add',  ['confirmation' =>$result]);
    }
}
