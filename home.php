<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">


    <title>Document</title>
</head>
<body>
    <!-- formulario de cadastro de cliente com o preenchimento dos campos obrigatorios -->
        <div class="form">

         <form action="verific.php" method="post">
             <label for="nome">Nome:</label>
             <input type="text" id="nome" name="nome" required>
             
             <label for="email">Email:</label>
             <input type="email" id="email" name="email" required>
             
             
             <label for="Datan">Data de Nascimento:</label>
             <input type="date" id="Datan" name="Datan" required>

             
             <label for="genero">Genero:</label>
             <select id="genero" name="genero" required class="genn" >
                <option value="">Selecione</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outros">Outros</option>
             </select>
              <br>
            <label for="biografia">Biografia</label>
            <textarea id="biografia" name="biografia" required></textarea>
             
             <button type="submit" class="cad">Cadastrar</button>
             <button type="reset" clas="res">Limpar</button>
            </form>
        </div>

</body>
</html>