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

            $.ajax({
                type: "POST",
                url: actionUrl,
                data: form.serialize(), 
                success: function(data) {
                    console.log(data);
                }
            });

        });

        
    </script>
@endsection