@section('additem')
    <script>
        
        function addProductList(e) {
            
            e.preventDefault();
            let product_id = e.target.id;
            let list_id = $('.button-modal').attr('data-id');
            
            create(list_id, product_id);

        }  

    </script>
@endsection