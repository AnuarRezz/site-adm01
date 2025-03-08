<?php 
require_once './../../config/env.php';  
require_once __DIR__ . '\..\components\head.php';
?>

<style>
    .container {
        width: 80%;
        max-width: 1000px;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        text-align: center;
        margin: 20px auto;
    }
    h1 {
        color: #333;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }
    th {
        background-color: #007BFF;
        color: #ffffff;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #d1e7fd;
    }
</style>

<body class="content">
<?php require_once __DIR__ . '\..\components\navbar.php'; ?>
<?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

<main class="content-grid">
    <div class="container">
        <h1>Usuários</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $usuarios = [
                    ['id' => 1, 'nome' => 'João Silva', 'email' => 'joao@email.com'],
                    ['id' => 2, 'nome' => 'Maria Santos', 'email' => 'maria@email.com'],
                    ['id' => 3, 'nome' => 'Pedro Lima', 'email' => 'pedro@email.com'],
                    ['id' => 4, 'nome' => 'Ana Paula', 'email' => 'ana@email.com'],
                    ['id' => 5, 'nome' => 'Carlos Menezes', 'email' => 'carlos@email.com'],
                    ['id' => 6, 'nome' => 'Juliana Costa', 'email' => 'juliana@email.com'],
                    ['id' => 7, 'nome' => 'Ricardo Alves', 'email' => 'ricardo@email.com'],
                    ['id' => 8, 'nome' => 'Fernanda Gomes', 'email' => 'fernanda@email.com'],
                    ['id' => 9, 'nome' => 'Paulo Henrique', 'email' => 'paulo@email.com'],
                    ['id' => 10, 'nome' => 'Camila Ferreira', 'email' => 'camila@email.com']
                ];
                
                foreach ($usuarios as $usuario) {
                    echo "<tr>
                            <td>{$usuario['id']}</td>
                            <td>{$usuario['nome']}</td>
                            <td>{$usuario['email']}</td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php require_once __DIR__ . '\..\components\footer.php'; ?>
<script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>