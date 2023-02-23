<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edição de Dados</title>
  <link rel="icon" href="cadastrar.png">
  <link rel="stylesheet" href="css/estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<header>
  <a href="index.php" style="text-decoration:none; padding:60px"><img src="Voltar.png" width="3%" height="3%"
      align="left"></a>
</header>

<body style="background-color:black">
  <p class="p-2"></p>
  <div style="background-color:whitesmoke;border-style: double;color: black;"
    class="container col-sm-3 text-center text-break">
    <p class="p-2"></p>
    <div class="col-sm-12 text-center text-break">


      <form style="padding-top:18px;" method="post" action="envio(registrar).php" id="formlogin" name="formlogin">
        <fieldset id="fie">
          <div class="form-group">
            <img src="cadastrar.png" align="center" width="100px" height="100px" alt="">
            <p class="p-2"></p>
            <p class="p-0.5"></p>
            <input type="text" class="form-control" name="NomeAluno" aria-describedby="emailHelp" placeholder="Nome do Aluno">
            <p class="p-0.5"></p>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="TurmaAluno" placeholder="Turma do Aluno">
          </div>
          <br>
          <div class="form-group">
            <input type="text" class="form-control" name="Mensalidade" placeholder="Mensalidade">
          </div>
          <p class="p-0.5"></p>
          <button type="submit" class="btn btn-outline-dark" value="alterar">Registrar</button>
          <p class="p-0.5"></p>
          <p class="p-2"></p>
        </fieldset>
      </form>


    </div>
  </div><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
</body>

</html>