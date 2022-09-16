
    {{-- NAV --}}
    <nav class='flex items-center flex-wrap mb-6 p-6 bg-blue-500'>
        <div class='flex items-center flex-shrink-0 text-white px-10'>
            <img class='w-20' src="{{ asset('storage/logo2.png') }}" alt="logo azteca">
            <div class='logo-name text-2xl'>AZTECAS</div>
        </div>
        <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded  hover:bg-gray-800">
            <i class="fa fa-home pr-2 text-xl leading-2 align-middle"></i><span class='text-xl'>INICIO</span>
        </a>
        <a href="{{ route('products.index') }}" class="{{ Route::is('products.index') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded  hover:bg-gray-800">
            <i class="fa fa-box pr-2 text-xl leading-2 align-middle"></i><span class='text-xl'>PRODUCTOS</span>
        </a>
        <a href="{{ route('lists.index') }}" class="{{ Route::is('lists.index') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded  hover:bg-gray-800">
            <i class="fa fa-list pr-2 text-xl leading-2 align-middle"></i><span class='text-xl'>LISTA DE LA COMPRA</span>
        </a>
    </nav>




