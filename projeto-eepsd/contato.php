<?php include "header.php"; ?>
<?php include "conectar.php"; ?>

<div class="container mt-4">
    <h1>Contato</h1>

    <form method="POST">
        <label>Nome:</label>
        <input class="form-control" name="nome" required>

        <label>Email:</label>
        <input class="form-control" type="email" name="email" required>

        <label>Mensagem:</label>
        <textarea class="form-control" name="mensagem" required></textarea>

        <button class="btn btn-info mt-3" type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // Conectar ao banco
        $con = new mysqli("localhost", "root", "", "eepd"); // ajuste usuário/senha se necessário

        if ($con->connect_error) {
            die("<p class='text-danger'>Erro ao conectar ao banco: " . $con->connect_error . "</p>");
        }

        // Inserir mensagem usando prepared statement
        $stmt = $con->prepare("INSERT INTO contato (nome, email, mensagem) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nome, $email, $mensagem);

        if ($stmt->execute()) {
            echo "<p class='text-success'>Mensagem enviada com sucesso!</p>";
        } else {
            echo "<p class='text-danger'>Erro ao enviar mensagem: " . $stmt->error . "</p>";
        }

        $stmt->close();
        $con->close();
    }
    ?>
</div>

<?php include "footer.php"; ?>
