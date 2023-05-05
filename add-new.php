<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $telefone = $_POST['telefone'];
   $num_acomp = $_POST['num_acomp'];

   $sql = "SELECT * FROM `convidados` WHERE nome='$nome' AND email='$email'";

   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      header("Location: dashboard.php?msg=Convidado já confirmou presença.");
   } else {
        $sql = "INSERT INTO `convidados`(`id`, `nome`, `email`, `telefone`, `numero_acompanhantes`) VALUES (NULL,'$nome','$email','$telefone','$num_acomp')";
        $result = mysqli_query($conn, $sql);
        header("Location: dashboard.php?msg=Convidado cadastrado com êxito.");
   }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title> Cadastro de Convidados</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Sistema de cadastro v1.0
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Preencha o formulário:</h3>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nome:</label>
                  <input type="text" class="form-control" name="nome" placeholder="Albert" required>
               </div>

               <div class="col">
                  <label class="form-label">Telefone:</label>
                  <input type="text" class="form-control" name="telefone" placeholder="(99)99999-9999" required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com.br" required>
            </div>

            <div class="form-group mb-3">
            <label class="form-label">Quantos acompanhantes?</label>
               <input type="number" class="form-control" name="num_acomp" min="0" required>
            </div>

            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="dashboard.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>