@section('modalshow')
    <script>

        $('#spinner').show();

        
        $(".button-modal").on("click", function(e) {
            e.preventDefault();
            let id = $(this).attr('data-id');
            update(id);
        })

        $(".close-modal").on("click", function(e) {
            e.preventDefault();
            $('#body-items tr').remove();
        })
            
    </script>
@endsection