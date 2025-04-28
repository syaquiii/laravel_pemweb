@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-800 mb-4">Dashboard</h1>
            <p class="text-xl text-gray-600 mb-8">
                Selamat datang di aplikasi CRUD sederhana. Navigasikan menu di bawah ini untuk melihat berbagai opsi.
            </p>
            <div class="flex justify-center space-x-4">
                <a href="{{ route('products.index') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition ease-in-out duration-300">
                    Kelola Produk
                </a>
            </div>
        </div>
    </div>
@endsection