@section('searchjs')
    <script>
        
        // TOKEN CSRF DE LA ETIQUETA META
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // AL HACER SUBMIT SE RECOGE EL JSON A PARTIR DE UN AJAX
        $("#input-search-product").on("input", function(e) {

            e.preventDefault();

            var input = $('#input-search-product');

            setTimeout(function() {
                $.ajax({
                    type: "POST",
                    url: "/product/search",
                    data: {'search': input.val()}, 
                    beforeSend: function () {
                        $('#loader').removeClass('hidden')
                    },
                    success: function(data) {
                        if(!input.val().length == 0) {
                            
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
                                
                                    <a href="#" aria-current="true" 
                                        class="hover:text-lime-500 relative z-0 block py-2 px-4 cursor-pointer">
                                        <i class="fa fa-plus-circle hover:text-lime-300" aria-hidden="true"></i>
                                        ${value.nombre}
                                    </a>`
                                );
                            });

                        } else {
                            $('#search-box').remove();
                        }
                    }
                });
            }, 1000);

          

        });

        
    </script>
@endsection