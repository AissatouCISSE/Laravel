@extends('layouts.admin')

@section('content')

<div class="container" style="margin-top:80px;">
    <a href="{{ route('addclient') }}" class="btn btn-success mb-2">Create Client</a>
		<div class="col-md-6 col-xs-12 " >
			<div class="panel panel-info">
				<div class="panel-heading">Liste des Clients</div>
				<div class="panel-body">
					<table class="table table-bordered">
					<thead>
					<tr>
						<th scope="col">Identifiant</th>
						<th scope="col">Nom</th>
						<th scope="col">Prenom</th>
						<th scope="col">Email</th>
                        <th scope="col">Telephone</th>
						<th scope="col">CNI</th>
						<th scope="col">Action</th>
                        <th scope="col">Action</th>
					</tr>
					</thead>
					 <tbody>
              @foreach($liste_clients as $client)
                <tr>
                  <td>{{$client->id}}</td>
                  <td>{{$client->nom}}</td>
				   <td>{{$client->prenom}}</td>
				    <td>{{$client->email}}</td>
                  <td>{{$client->telephone}}</td>
                  <td>{{$client->cni}}</td>
                  <td>
                      <a href="{{ route('editclient',['id' =>$client->id]) }}" class="btn btn-dark">Editer</a>
                  </td>
                  <td>
                      <a href="{{ route('deleteclient',['id' =>$client->id]) }}" class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ce client?')">Supprimer</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
						
					</table>
                    {{ $liste_clients->links() }}
				</div>
			</div>
		</div>	
	</div>
@endsection