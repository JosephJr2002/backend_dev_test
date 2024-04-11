@extends('layout.app')
	@section('content')

	<div class="container-fluid mt-3">
		<form class="form-control" method="Post" action="{{'/product/new'}}">
			@csrf
			<div class="mb-3">
			  <label for="name" class="form-label">Nom du produit</label>
			  <input type="text" name="name" class="form-control" id="name" placeholder="Nom du produit">
			</div>
			<div class="mb-3">
			  <label for="prix" class="form-label">Prix du produit</label>
			  <input type="number" name="prix" class="form-control" id="prix" placeholder="2000">
			</div>
			<div class="mb-3 d-flex justify-content-around">
				<button type="submit" class="btn btn-info">Ajouter</button>
				<button type="reset" class="btn btn-secondary">Annuler</button>
			</div>
		</form>
	</div>

	@endsection




	 