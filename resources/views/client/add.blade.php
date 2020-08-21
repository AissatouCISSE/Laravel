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
                    <form action="{{route('persistclient')}}"  method="post" accept-charset="utf-8">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">Nom</label>
                            <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Please enter your name">
                        </div> 

                        <div class="form-group">
                            <label for="formGroupExampleInput">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="formGroupExampleInput" placeholder="Please enter prenom">
                        </div>  
    
                        <div class="form-group">
                            <label class="control-label" for="formGroupExampleInput">Email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Please enter your email">  
                        </div>  

                        <div class="form-group">
                            <label for="formGroupExampleInput">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="formGroupExampleInput" placeholder="Please enter number">
                                
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

