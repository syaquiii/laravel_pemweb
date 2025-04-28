@extends('layouts.app')

@section('title', 'Product Details')
@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">Product Details</h2>

        <div class="mb-4">
            <h3 class="text-lg font-medium text-gray-700">Product Name:</h3>
            <p class="text-gray-600">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-medium text-gray-700">Price:</h3>
            <p class="text-gray-600">Rp {{ number_format($product->price, 2) }}</p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-medium text-gray-700">Description:</h3>
            <p class="text-gray-600">{{ $product->description }}</p>
        </div>

        <div class="flex space-x-4 mt-6">
            <a href="{{ route('products.edit', $product->id) }}"
                class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded">
                Edit Product
            </a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this product?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">
                    Delete Product
                </button>
            </form>
            <a href="{{ route('products.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                Back to Products
            </a>
        </div>
    </div>
@endsection