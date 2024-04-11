@extends('layout.app')
	@section('content')

	<div class="mt-2">
		<h2>Modifier un produit</h2>
	</div>
	<div class="container-fluid mt-3">
		<!-- Edit Product Form -->
		<form method="POST" action="/product/update/{{ $ProductType->id }}">
		    @csrf
		    @method('PUT')

		    <div class="mb-3">
		        <label for="name" class="form-label">Nom du produit</label>
		        <input type="text" class="form-control" id="name" name="name" value="{{ $ProductType->name }}" required>
		    </div>
		    <div class="mb-3">
		        <label for="prix" class="form-label">Prix du produit</label>
		        <input type="number" class="form-control" id="prix" name="prix" value="{{ $ProductType->priceHt }}" required>
		    </div>
		    
		    <button type="submit" class="btn btn-primary">Mettre à jour</button>
		</form>

	</div>

	@endsection




	 