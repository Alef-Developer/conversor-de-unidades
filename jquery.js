// Aquivo com código jquery onde o mesmo por meio de ajax, executa o script php para chamar a função verificar grandeza.

$(document).ready(function() {
    $('input[name="inlineRadioOptions"]').change(function() {
        var grandezaSelecionada = $(this).val();

        $.ajax({
            url: 'api.php', // Arquivo que processa o PHP
            type: 'GET',
            data: { grandeza: grandezaSelecionada },
            success: function(response) {
                // Atualiza os dois selects com o retorno do PHP
                $('#inputGroupSelect01').html(response);
                $('#inputGroupSelect02').html(response);
            },
            error: function() {
                console.log("Erro ao buscar as unidades.");
            }
        });
    });
});