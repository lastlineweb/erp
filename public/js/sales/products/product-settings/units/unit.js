$(document).on('click', '.unit_edit',function (e){
        e.preventDefault();
        var unit_id = $('input[name="action_id"]:checked').val();
        $('#editUnits').modal('show');
        $.ajax({
            type:'GET',
            url:'/units-edit/'+unit_id,
            success:function (response){
                if(response.status == 400){
                    $('#saveform_success').text(response.message);
                } else {
                    
                    $('#unit_name').val(response.units.unit_name);
                    $('#un_id').val(unit_id);
                }
            }
        });
    });

$(document).on('click', '.unit_delete',function (e){
    e.preventDefault();
    var unit_id = $('input[name="action_id"]:checked').val();
    $('#deleteUnits').modal('show');
    $.ajax({
        type:'GET',
        url:'/units-edit/'+unit_id,
        success:function (response){
            if(response.status == 400){
                $('#saveform_success').text(response.message);
            } else {
                $('#id').val(unit_id);
            }
        }
    });
});