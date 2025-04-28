@extends('layouts.app')

@section('title', isset($product) ? 'Edit Product' : 'Create Product')
@section('content')
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow mt-10">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">{{ isset($product) ? 'Edit' : 'Create' }} Product</h2>
        <form method="POST"
            action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Product Name</label>
                <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Price</label>
                <input type="number" name="price" step="0.01" value="{{ old('price', $product->price ?? '') }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" rows="4"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                    required>{{ old('description', $product->description ?? '') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-5 py-2 rounded">
                    {{ isset($product) ? 'Update' : 'Create' }} Product
                </button>
            </div>
        </form>
    </div>
@endsection