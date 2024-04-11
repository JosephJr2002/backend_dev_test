<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view("templates.product.indexprod", compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function new()
    {
        return view("templates.product.newprod");
    }

    /**
        * Store a newly created product in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
    public function store(Request $request)
   {
       // validation des données du formulaire
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'prix' => 'required|numeric|min:0',
       ]);

       // Create a new product instance
       $product = new Product();
       $product->name = $validatedData['name'];
       $product->priceHt = $validatedData['prix'];
       $product->creationDate = now(); 
       $product->save();

        return redirect('/product')->with('success', 'Nouveau produit ajouté !');

   }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
       $ProductType = Product::findOrFail($id);

       return view("templates.product.editproduct", compact('ProductType'));
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
       // Validation des données du formulaire
       $validatedData = $request->validate([
           'name' => 'required|string|max:255',
           'prix' => 'required|numeric|min:0',
       ]);

       // Retrouver l'identifiant
       $ProductType = Product::findOrFail($id);
       
       // Mise à jour des données
       $ProductType->name = $validatedData['name'];
       $ProductType->priceHt = $validatedData['prix'];
       $ProductType->dateUpdate = now(); 
       $ProductType->save();

       return redirect('/product')->with('success', 'Produit mis à jour !');
   }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/product')->with('success', 'Produit supprimé !');
    }

}
