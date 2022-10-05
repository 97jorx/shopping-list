@section('searchjs')
    <script>
        
        // TOKEN CSRF DE LA ETIQUETA META
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        // AL HACER SUBMIT SE RECOGE EL JSON A PARTIR DE UN AJAX
        $("#search-product").submit(function(e) {

            e.preventDefault();

            var form = $(this);
            var actionUrl = form.attr('action');
            var input = $('#input-search-product');

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), 
                success: function(data) {
                    if(!input.val().length == 0) {
                        
                        $('#search-box').remove();

                        if(!$("#search-box").length) {
                            $("#wrapper-search-box").append(`
                                <div id="search-box" 
                                    class="z-0 overflow-y-auto bg-gray-50 
                                    block h-32 w-full pl-10 p-2.5">
                                </div>`
                            );
                        } 

                        $.each( data.productos, function( key, value ) {
                            $("#search-box").append(`
                                <a href="#" aria-current="true" 
                                    class="block py-2 px-4 w-full cursor-pointer">
                                    ${value.nombre}
                                </a>`
                            );
                        });

                    } else {
                        $('#search-box').remove();
                    }
                }
            });

        });

        
    </script>
@endsection