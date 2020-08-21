@extends('layouts.admin')

@section('content')


    <div class="col-md-6 col-xs-12 " >
		<div class="panel panel-info">
			<div class="panel-heading">Formulaires de gestion des Clients</div>
                <div class="panel-body">
                    @if(isset($confirmation))
                        @if($confirmation==1)
                            <div class="alert alert-success">Client Ajouté</div> 
                        @else
                            <div class="alert alert-danger">Client non ajouté</div> 
                        @endif
                    @endif
                    <form action="{{route('updateclient')}}"  method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">Identifiant du client</label>
                            <input type="text" readonly name="id" class="form-control" id="formGroupExampleInput" value="{{$client->id  }}">
                        </div> 

                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">Nom</label>
                            <input type="text" name="nom" class="form-control" id="formGroupExampleInput" value="{{$client->nom  }}" >
                        </div> 

                        <div class="form-group">
                            <label for="formGroupExampleInput">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="formGroupExampleInput" value="{{$client->prenom  }}"  >
                        </div>  
    
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">Email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" value="{{$client->email  }}">  
                        </div>  

                        <div class="form-group">
                            <label for="formGroupExampleInput">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="formGroupExampleInput" value="{{$client->telephone  }}" >
                                
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">CNI</label>
                            <input type="text" name="cni" class="form-control" id="formGroupExampleInput" value="{{$client->cni  }}">
                                
                        </div>

                        <div class="form-group" >
                            <button class="btn btn-success" type="submit" name="valider" id="valider">Valider</button>
                            <a  class="btn btn-danger" href="{{route('getallclient')}}" >Annuler</a>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

