$('.cep').mask('00000-000');
$('.uf').mask('SS');

$(document).on('blur', '#cep', function () {
    const cep = $(this).val();

    $.ajax({
        url: 'https://viacep.com.br/ws/'+cep+'/json/',
        method: 'GET',
        dataType: 'json',
        success: function(data){
            if (data.erro) {
                alert('Endereço não encontrado');
            }

            $('#cidade').val(data.localidade),
            $('#uf').val(data.uf),
            $('#logradouro').val(data.logradouro),
            $('#bairro').val(data.bairro)
            }
        });
    });

