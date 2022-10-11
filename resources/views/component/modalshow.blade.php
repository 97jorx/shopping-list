@section('modalshow')
    <script>
        $(document).on('click', '#button-modal', function(e){
            e.preventDefault();
            var button = $(this);
            var id = button.data('id');

            console.log(id);

            $('#extralarge-modal').modal('show');
        });
</script>
@endsection