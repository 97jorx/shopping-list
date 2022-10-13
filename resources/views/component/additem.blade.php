@section('additem')
    <script>
        function additem(e) {

            e.preventDefault();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

                
            let product_id = e.target.id;
            let list_id = $('.button-modal').attr('data-id');

            $.ajax({
                type: "POST",
                url: "/productlist/additem",
                data: { 
                    'list': list_id,
                    'product': product_id
                }, 
                success: function(data) {
                    console.log(data);
                }
            });
        }  
    </script>
@endsection