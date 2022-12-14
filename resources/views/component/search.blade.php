@section('searchjs')
    <script>
    $(document).ready(function() {

        // TOKEN CSRF DE LA ETIQUETA META
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // AL HACER SUBMIT SE RECOGE EL JSON A PARTIR DE UN AJAX
        $("#input-search-product").on("change", function(e) {

            e.preventDefault();

            var input = $('#input-search-product');
                $.ajax({
                    type: "POST",
                    url: "/product/search",
                    data: {'search': input.val()}, 
                    success: function(data) {
                        if(input.val().length >= 3) {

                            $('#search-box').remove();

                            if(!$("#search-box").length) {
                                $("#wrapper-search-box").append(`
                                    <div id="search-box" 
                                        class="absolute shadow-2xl rounded-lg overflow-y-auto bg-gray-50 
                                        block w-full h-32 ">
                                    </div>`
                                );
                            } 

                            $.each( data.productos, function( key, value ) {
                                $("#search-box").append(`
                                    <button onClick="addProductList(event)" id="${value.id}" aria-current="true" 
                                        class="additem-searched hover:text-lime-500 relative z-0 block py-2 px-4 cursor-pointer">
                                        <i class="fa fa-plus-circle hover:text-lime-300" aria-hidden="true"></i>
                                        ${value.nombre}
                                    </button>`
                                );
                            });

                        } else {
                            $('#search-box').remove();
                        }
                    }
                });
        });

    });
        
    </script>
@endsection