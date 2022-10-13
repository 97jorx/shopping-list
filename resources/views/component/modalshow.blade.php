@section('modalshow')
    <script>
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".button-modal").on("click", function(e) {

            let url = $(this).attr('data-attr');
            let id = $(this).attr('data-id');
            e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: url,
                    success: function(data) {
                        $('#body-items').html(data.data);
                        $('.list-'+id).animate( { "opacity": "show", top: "100"} , 300 );
                    },
                    complete: function(data) {
                        $('#spinner').hide();
                    }
                });

        });

        
    </script>
@endsection