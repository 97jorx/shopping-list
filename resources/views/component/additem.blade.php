@section('additem')
    <script>
        
        function addProductList(e) {
            
            e.preventDefault();
            let products_id = e.target.id;
            let shopping_lists_id = $('#list-id').val();
            
            create(shopping_lists_id, products_id);

        }  

    </script>
@endsection