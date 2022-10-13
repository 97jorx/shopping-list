<div id="extralarge-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-7xl h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow ">
            <div class="flex justify-between items-center p-5 rounded-t border-b ">
                <h3 class="text-xl font-medium text-gray-900 ">
                    Modificar lista
                </h3>
                <button id="close-model" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="extralarge-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-6 space-y-6">

			<div class="max-w-2xl mx-auto">
				<div class="relative overflow-x-auto xl:overflow-x-hidden lg:overflow-x-hidden shadow-md sm:rounded-lg">
					<div class="p-4">
						<label for="table-search" class="sr-only">Search</label>
						<div class="relative m-5">
							<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
								<svg class="w-5 h-5 text-gray-500 " fill="currentColor" viewBox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd"
									d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
									clip-rule="evenodd"></path>
								</svg>
							</div>
							<input name="search" autocomplete="off" type="text" id="input-search-product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Buscar producto...">
						</div>
						<div id="wrapper-search-box" class=" shadow-lg w-full relative z-10"></div>
					</div>
					<table id="table-list" class="overflow-y-scroll h-36 block z-10 w-full text-sm text-left text-gray-500 ">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
								<tr>
									<th scope="col" class="px-6 py-3">
										Nombre
									</th>
									<th scope="col" class="px-6 py-3">
										Categoría
									</th>
									<th scope="col" class="px-6 py-3">
										Acciones
									</th>
								</tr>
						</thead>
						<tbody id="body-items">
						</tbody>
					</table>
					@include('component.modalshow')
					@include('component.search')
			</div>
		</div>
            </div>
            <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 ">
                <button id="toggle-modal" data-modal-toggle="extralarge-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar</button>
            </div>
        </div>

    </div>

</div>


