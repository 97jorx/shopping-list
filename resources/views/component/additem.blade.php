@section('additem')
    <script>
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#additem-searched").on("click", function(e) {

            e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/productlist/additem",
                    data: { 
                        'list': '161',
                        'product': 'f9a1c79d-3b4c-11ed-9902-2cf05d745024'
                    }, 
                    success: function(data) {
                        console.log(data);
                    }
                });
        });

        
    </script>
@endsection