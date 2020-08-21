@extends('layouts.admin')

@section('content')
@extends('layouts.admin')

@section('content')


    <div class="col-md-6 col-xs-12 " >
		<div class="panel panel-info">
			<div class="panel-heading">Formulaires de gestion des Comptes</div>
                <div class="panel-body">
                    @if(isset($confirmation))
                        @if($confirmation==1)
                            <div class="alert alert-success">Compte Ajouté</div> 
                        @else
                            <div class="alert alert-danger">Compte non ajouté</div> 
                        @endif
                    @endif
                    <form action="{{route('persistcompte')}}"  method="post" accept-charset="utf-8">
                        @csrf
                
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">numcompte</label>
                            <input type="text" name="numcompte" class="form-control" id="formGroupExampleInput" placeholder="Entrer le numero de compte">
                        </div> 

                        <div class="form-group">
                            <label for="formGroupExampleInput">numagence</label>
                            <input type="text" name="numagence" class="form-control" id="formGroupExampleInput" placeholder="Entrer le numero agence">
                        </div>  
    
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">typecompte</label>
                            <input type="text" name="typecompte" class="form-control" id="formGroupExampleInput" placeholder="Entrer le type de compte">  
                        </div>  

                        <div class="form-group">
                            <label for="formGroupExampleInput">Choisissez le client</label>
                            <select name="clients_id" class="form-control" id="formGroupExampleInput" >
                            <option value="0">Faites un choix</option>
                                @foreach($clients as $client)
                                    <option value="{{ $client->id }}">{{$client->prenom}} {{$client->nom}}</option>
                                @endforeach
                            </select>
                                
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">CNI</label>
                            <input type="text" name="cni" class="form-control" id="formGroupExampleInput" placeholder="Please enter number">
                                
                        </div>

                        <div class="form-group" >
                            <button class="btn btn-success" type="submit" name="valider" id="valider">Valider</button>
                            <button type="reset" class="btn btn-danger" name="annuler" id="annuler">Annuler</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



@endsection