function create(list_id, product_id) {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    
    $.ajax({
        type: "POST",
        url: "/productlist/additem",
        data: { 
            'list': list_id,
            'product': product_id
        }, 
        success: function(data) {
            console.log(data);
        },
        complete: function() {
            update(list_id)
        }
        
    });
    
}

function update(id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
            type: "POST",
            url: "/productlist/edit",
            data: { 
                'id': id,
            }, 
            success: function(data) {
                $('#body-items').html(data.data);
                $('.list-'+id).animate( { "opacity": "show", top: "100"} , 300 );
            },
            complete: function(data) {
                $('#spinner').hide();
            }
    });

}
