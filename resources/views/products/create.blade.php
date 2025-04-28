@extends('layouts.app')

@section('title', isset($product) ? 'Edit Product' : 'Create Product')
@section('content')
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">{{ isset($product) ? 'Edit' : 'Create' }} Product</h2>

        <form method="POST"
            action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}"
            class="bg-white rounded-lg shadow p-6">
            @csrf
            @if(isset($product))
                @method('PUT')
            @endif

            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Product Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name ?? '') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description', $product->description ?? '') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-md transition duration-200">
                        {{ isset($product) ? 'Update' : 'Create' }} Product
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection