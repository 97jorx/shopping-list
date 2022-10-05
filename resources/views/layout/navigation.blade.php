
    {{-- NAV --}}
    <nav class='flex items-center flex-wrap mb-14 p-6 bg-blue-500 '>
        <div class='flex items-center flex-shrink-0 text-white px-10'>
            <img class='w-20' src="{{ asset('storage/logo2.png') }}" alt="logo azteca">
            <div class='logo-name text-2xl'>AZTECAS</div>
        </div>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="flex flex-col md:flex-row md:space-x-8 md:space-y-0 sm:space-y-2 space-y-3  md:text-sm md:font-medium md:border-0">
              <li>
                <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded hover:bg-gray-800">
                    <i class="fa fa-home pr-2 text-xl  "></i><span class='text-xl'>INICIO</span>
                </a>
              </li>
              <li>
                <a href="{{ route('products.index') }}" class="{{ Route::is('products.index') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded hover:bg-gray-800">
                    <i class="fa fa-box pr-2 text-xl  "></i><span class='text-xl'>PRODUCTOS</span>
                </a>
              </li>
              <li>
                <a href="{{ route('lists.index') }}" class="{{ Route::is('lists.index') ? 'bg-zinc-600' : '' }} text-white lg:inline-flex lg:w-auto px-3 py-2 ml-4 rounded hover:bg-gray-800">
                    <i class="fa fa-list pr-2 text-xl  "></i><span class='text-xl'>LISTA DE LA COMPRA</span>
                </a>
              </li>
            </ul>
          </div>



    </nav>




