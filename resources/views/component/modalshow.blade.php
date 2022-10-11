@section('modalshow')
    <script>
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".button-modal").on("click", function(e) {

            let url = $(this).attr('data-attr');

            e.preventDefault();
            $.ajax({
                type: "POST",
                url: url,
                success: function(data) {
                    console.log(data);
                }
            });

        });

        
    </script>
@endsection