<?php include "header.php"; ?>
<?php include "conectar.php"; ?>

<div class="container mt-4">
    <h1>Login</h1>

    <form method="POST">

        <label>Email:</label>
        <input class="form-control" type="email" name="email" required>

        <label>Senha:</label>
        <input class="form-control" type="password" name="senha" required>

        <button class="btn btn-primary mt-3" type="submit">Entrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Conectar ao banco eepd
        $con = new mysqli("localhost", "root", "", "eepd"); // ajuste usuário e senha se necessário

        if ($con->connect_error) {
            die("<p class='text-danger'>Erro ao conectar ao banco: " . $con->connect_error . "</p>");
        }

        // Buscar usuário
        $stmt = $con->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows > 0) {
            $user = $res->fetch_assoc();

            // Verifica senha
            if (password_verify($senha, $user['senha'])) {
                echo "<p class='text-success'>Login OK! Bem-vindo, " . $user['nome'] . ".</p>";

                // Se quiser iniciar sessão:
                // session_start();
                // $_SESSION['usuario'] = $user['id'];
                // header("Location: painel.php");
                // exit;

            } else {
                echo "<p class='text-danger'>Senha incorreta!</p>";
            }

        } else {
            echo "<p class='text-danger'>Usuário não encontrado!</p>";
        }

        $stmt->close();
        $con->close();
    }
    ?>
</div>

<?php include "footer.php"; ?>
