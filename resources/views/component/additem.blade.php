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
                        'list': list.val(),
                        'product': product.val()
                    }, 
                    success: function(data) {
                        console.log(data);
                    }
                });
        });
        
    </script>
@endsection