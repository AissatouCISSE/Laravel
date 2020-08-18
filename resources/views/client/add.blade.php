@extends('layouts.admin')

@section('content')


    <div class="col-md-6 col-xs-12 " >
		<div class="panel panel-info">
			<div class="panel-heading">Formulaires de gestion des Clients</div>
                <div class="panel-body">
                    <form action=""  method="post" accept-charset="utf-8">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nom</label>
                            <input type="text" name="nom" class="form-control" id="formGroupExampleInput" placeholder="Please enter your name">
                        </div> 

                        <div class="form-group">
                            <label for="formGroupExampleInput">Prenom</label>
                            <input type="text" name="prenom" class="form-control" id="formGroupExampleInput" placeholder="Please enter prenom">
                        </div>  
    
                        <div class="form-group">
                            <label for="formGroupExampleInput">Email</label>
                            <input type="text" name="email" class="form-control" id="formGroupExampleInput" placeholder="Please enter your email">  
                        </div>  

                        <div class="form-group">
                            <label for="formGroupExampleInput">Telephone</label>
                            <input type="text" name="telephone" class="form-control" id="formGroupExampleInput" placeholder="Please enter number">
                                
                        </div>

                        <div >
                            <button class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger">Annuler</button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

