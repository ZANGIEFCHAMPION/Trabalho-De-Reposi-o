<?php include "header.php"; ?>
<?php include "conectar.php"; ?>

<div class="container mt-4">
    <h1>Cadastro de Usuário</h1>

    <form method="POST">

        <label>Nome:</label>
        <input class="form-control" type="text" name="nome" required>

        <label>Email:</label>
        <input class="form-control" type="email" name="email" required>

        <label>Senha:</label>
        <input class="form-control" type="password" name="senha" required>

        <button class="btn btn-success mt-3" type="submit">Cadastrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Receber dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografa a senha

        // Conectar ao banco de dados
        $con = new mysqli("localhost", "root", "", "eepd"); // altere usuário e senha conforme necessário

        // Verificar conexão
        if ($con->connect_error) {
            die("<p class='text-danger'>Erro ao conectar ao banco: " . $con->connect_error . "</p>");
        }

        // Inserir dados usando prepared statement
        $stmt = $con->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $senha);

        if ($stmt->execute()) {
            echo "<p class='text-success'>Cadastro realizado com sucesso!</p>";
        } else {
            echo "<p class='text-danger'>Erro ao cadastrar: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $con->close();
    }
    ?>
</div>

<?php include "footer.php"; ?>
