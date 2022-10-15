@section('additem')
    <script>
        
        function addProductList(e) {
            
            e.preventDefault();
            let product_id = e.target.id;
            let list_id = $('#list-id').val();
            
            create(list_id, product_id);

        }  

    </script>
@endsection