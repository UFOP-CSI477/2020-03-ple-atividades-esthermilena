<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cadastros</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <script>

        var info = setInterval(hora, 1000);
        function Info(nome, endereco, cpf, contato) {
            this.nome = nome;
            this.endereco = endereco;
            this.cpf = cpf;
            this.contato = contato;
        }
         function carregarDadosDoForm(){
            const nome = document.formsDados.nome.value;
            const endereco = document.formsDados.endereco.value;
            const cpf = document.formsDados.cpf.value;
            const contato = document.formsDados.contato.value;

            const info = new Info(nome, endereco, cpf, contato);
            console.log(info);

        window.alert(`Dados carregados com sucesso: ${nome} ${endereco} ${cpf} ${contato}`);
        }

        function hora() {
        var data = new Date();
        document.getElementById("hora-atual").innerHTML = horario;
        }
     
    </script>
    
    </head>

    <body>
        <div name="hora-atual"></div>
        <div class="col-6">  
          <form action="/form/validar.php" method="post" name="formsDados"> 
            
            <div class="form-group">
                <label form="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome" class="form-control">
             </div>
    
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereço" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="cpf:">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="contato">Contato:</label>
                <input type="text" name="contato" id="contato" placeholder="Digite seu contato" class="form-control">
            </div>
    
                <input type="button" value="Cadastrar formulário" class="btn btn-primary" onclick="carregarDadosDoForm()">
                <input type="reset" value="Limpar" class="btn btn-warning">
           
    
        </form>
        </div>  
</body>
</html>
    