@extends('layout.app')

@section('content')

<div class="mt-2">
    <h2>Liste des produits</h2>
</div>

<div class="mt-2">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Date de création</th>
                <th scope="col">Date de mise à jour</th>
                <th scope="col">Opérations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->priceHt }}</td>
                <td>{{ $product->creationDate }}</td>
                <td>{{ $product->dateUpdate }}</td>
                <td>
                	<ul class="nav">
                      <li class="nav-item">
                        <a class="btn btn-info" href="/product/edit/{{ $product->id }}">Modifier <i class="bi bi-pen-fill"></i></a>
                      </li>
                      <li class="nav-item">
                        <form method="POST" action="/product/delete/{{$product->id}}" onsubmit="return confirm('Voulez-vous supprimez ce produit ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                      </li>
                  </ul>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
