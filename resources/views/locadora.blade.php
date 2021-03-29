<html>
<h1>Pagina de Cadastro de Aluguel de Carros<h1>

<hr>

<form name="ficha">
@csrf

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id= "nome" placeholder="Nome" /><br><br>

    <label>CPF:</label>
    <input type="text" name="cpf" id="cpf" /><br><br>

    <label>Número de Registro(CNH):</label>
    <input type="text" name="numerodeRegistro" id="numerodeRegistro" /><br><br>

    <label>Data de Retirada:</label>
    <input type="date" name="datadeRetirada" id="datadeRetirada" /><br><br>

    <label>Data de Devolução:</label>
    <input type="date" name="datadeDevolução" id="datadeDevolução" /><br><br>

    <label>Veículo:</label>
    <input type="text" name="veículo" id="veículo" /><br><br>

    <label>Quilometragem:</label>
    <input type="text" name="quilometragem" id="quilometragem" /><br><br>

    <form method="post">
    <button type="submit" name='btn-salvar' id='btn-salvar' class='btn-sub' value="salvar">Salvar</button>

 
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btn-salvar').click(function(event){
            event.preventDefault();

            /*var u_nome = $('#nome').val();
            var u_cpf = $('#cpf').val();
            console.log(u_nome, u_cpf);*/
          $.ajax({
              url:'',
              method:'POST',
              data:{nome: nome,
                    cpf: cpf,
                    numerodeRegistro: numerodeRegistro,
                    datadeRetirada: datadeRetirada,
                    datadeDevolução: datadeDevolução,
                    veículo: veículo,
                    quilometragem: quilometragem
                 },
              dataType:'json',
              success:  
          });
        });
    });
</script>
<hr>

</html>
