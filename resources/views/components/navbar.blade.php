<nav class="navbar bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="navbar-brand">
            <a href="{{ url('/') }}" class="text-2xl font-bold text-gray-800">E-Commerce</a>
        </div>
        <div class="navbar-menu">
            <ul class="navbar-links flex space-x-6">
                <li><a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900">Home</a></li>
                <li><a href="{{ url('/products') }}" class="text-gray-600 hover:text-gray-900">Products</a></li>
            </ul>
        </div>
    </div>
</nav>