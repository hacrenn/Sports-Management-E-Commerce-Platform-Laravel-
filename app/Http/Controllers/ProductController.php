<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Product as StripeProduct;
use Stripe\Price as StripePrice;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Artigo;

class ProductController extends Controller
{
    public function loja()
    {
        $products = Artigo::all();
        return view('loja', compact('products'));
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|min:0.01',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);







            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $path = $image->store('artigos', 'public');
            }

            $artigo = Artigo::create([
                        'nome' => $request->name,
                        'descricao' => $request->description,
                        'preco' => $request->price,
                        'imagem' => $path,
                    ]);



            return redirect()->back()->with('success', 'Produto adicionado com sucesso!');

    }

    public function showAddProductForm()
    {
        $products = Artigo::orderBy('created_at', 'desc')->take(10)->get();

        return view('add-product', compact('products'));
    }

    public function deleteProduct(Artigo $produto)
    {
           if ($produto->image) {
           Storage::disk('public')->delete($produto->image);
           }

           $produto->delete();


           return redirect()->back()->with('success', 'Produto eliminado com sucesso!');
    }
}
