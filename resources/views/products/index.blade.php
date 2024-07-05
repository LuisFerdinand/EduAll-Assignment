@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container">
    <h1 class="page-title">Products</h1>
    <form action="{{ url('/products') }}" method="GET" class="search-form">
        <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}" class="search-input">
        <button type="submit" class="search-button">Search</button>
    </form>
    <div class="products-list">
        @foreach($products as $product)
        <div class="card">
            <div class="card-header">
                <h2>{{ $product->brand }} {{ $product->model }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Screen Size:</strong> {{ $product->screen_size }}</p>
                <p><strong>Color:</strong> {{ $product->color }}</p>
                <p><strong>Hard Disk:</strong> {{ $product->harddisk }}</p>
                <p><strong>CPU:</strong> {{ $product->cpu }}</p>
                <p><strong>RAM:</strong> {{ $product->ram }}</p>
                <p><strong>OS:</strong> {{ $product->OS }}</p>
                <p><strong>Special Features:</strong> {{ $product->special_features }}</p>
                <p><strong>Graphics:</strong> {{ $product->graphics }}</p>
                <p><strong>Graphics Coprocessor:</strong> {{ $product->graphics_coprocessor }}</p>
                <p><strong>CPU Speed:</strong> {{ $product->cpu_speed }}</p>
                <p><strong>Rating:</strong> {{ $product->rating }}</p>
                <p><strong>Price:</strong> ${{ $product->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection