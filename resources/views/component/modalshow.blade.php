@section('modalshow')
    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#spinner').show();
            
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
            })

            $(".close-modal").on("click", function(e) {

                let id = $(this).attr('data-id');
                e.preventDefault();
                $('#body-items tr').remove();
                
            })

        });
            
    </script>
@endsection