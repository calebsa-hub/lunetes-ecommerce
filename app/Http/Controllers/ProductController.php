<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductForm;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $model;

    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index(Request $request)
    {
        $products = $this->model->getProducts($request->search ?? '');

        return view('products.index', compact('products'));
    }

    public function storeIndex(Request $request)
    {
        $products = $this->model->getProducts($request->search ?? '');

        return view('layouts.store', compact('products'));
    }

    public function show($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        return view('products.edit', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreUpdateProductForm $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return redirect()->route('products.index');
    }

    public function update(StoreUpdateProductForm $request, $id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        $data = $request->only('name', 'description','price');

        $product->update($data);

        return redirect()->route('products.index');
    }

    public function delete($id)
    {
        if (!$product = $this->model->find($id)) {
            return redirect()->route('products.index');
        }

        $product->delete();

        return redirect()->route('products.index');
    }
}
