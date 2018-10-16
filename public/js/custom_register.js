$(document).ready(function(){
    
    /*var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];

    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
 */

    /*
        Efecto de focus en los input del formulario
    */
    $('#register .form-group').first().focusin().addClass("focused");

    $('#register .form-group').focusin(function() {
        $(this).addClass("focused");
    });

    $('#register .form-group').focusout(function() {
        $(this).removeClass("focused");
    });

    /*
        Ajax para consultar direcciones (Estado -> Municipio -> Parroquia)
    
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
    });*/

    /*
        Limpia los valores de direcciones luego de cambiar alguno precedente (Estado <- Municipio <- Parroquia)
    
    $('#id_estado').change(function(){
        $('#id_municipio').val('');
        $('#id_parroquia').val('');
    });
      
    $('#id_municipio').change(function(){
        $('#id_parroquia').val('');
    });
*/
});