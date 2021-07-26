$(document).on('click', '.catedit',function (e){
    
        e.preventDefault();
        var category_id = $('input[name="action_id"]:checked').val();
        $('#editcat').modal('show');
        $.ajax({
            type:'GET',
            url:'/category-edit/'+category_id,
            success:function (response){
               
                if(response.status == 400){
                    $('#saveform_success').text(response.message);
                } else {
                   
                   
                    $('#cat_nam').val(response.category.category_name);
                    $('#cat_id').val(category_id);
                   
                }
            }
        });
    });


// CATEGORY DELETE

$(document).on('click', '.category_delete' , function(e){
    e.preventDefault();
    var category_id = $('input[name="action_id"]:checked').val();
    $('#deleteCategory').modal('show');
    $.ajax({
        type:'GET',
        url:'/category-edit'+category_id,
        success:function(response){
            if(response.status == 400){
                $('#saveform_succcess').text(response.message);
            }else{
                $('#cat_id').val(category_id);
            }
        }
    })


});


