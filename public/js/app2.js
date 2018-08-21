$(document).ready(function(){
    
    $('.dynamic-address').change(function(){
        if($(this).val() != '')
        {
            var id = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"/register/fetchAddress",
                method:"POST",
                data:{id:id, value:value, _token:_token, dependent:dependent},
            success:function(result) {

                $('#'+dependent).html(result);
            }
        
            })
        }
    });

    $('#id_estado').change(function(){
        $('#id_municipio').val('');
        $('#id_parroquia').val('');
    });
      
    $('#id_municipio').change(function(){
        $('#id_parroquia').val('');
    });

});