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
        <h1>Lista de Artigos</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $artigos = [
                    ['nome' => 'Placa de Vídeo RTX 3060', 'descricao' => 'Placa de vídeo para alto desempenho em jogos e renderização.', 'valor' => 2500.00],
                    ['nome' => 'Processador Intel i7 12700K', 'descricao' => 'Processador de última geração para multitarefas e games.', 'valor' => 2300.00],
                    ['nome' => 'Memória RAM 16GB DDR4', 'descricao' => 'Memória RAM para maior performance em aplicações pesadas.', 'valor' => 400.00],
                    ['nome' => 'SSD NVMe 1TB', 'descricao' => 'Armazenamento ultrarrápido para maior velocidade.', 'valor' => 600.00],
                    ['nome' => 'Gabinete Gamer RGB', 'descricao' => 'Gabinete com iluminação RGB e ótima ventilação.', 'valor' => 350.00],
                    ['nome' => 'Fonte 750W 80 Plus Gold', 'descricao' => 'Fonte de alimentação com alta eficiência energética.', 'valor' => 500.00],
                    ['nome' => 'Placa Mãe B550', 'descricao' => 'Placa mãe compatível com processadores Ryzen.', 'valor' => 900.00],
                    ['nome' => 'Teclado Mecânico RGB', 'descricao' => 'Teclado gamer com switches mecânicos.', 'valor' => 300.00],
                    ['nome' => 'Mouse Gamer 16000 DPI', 'descricao' => 'Mouse de alta precisão para jogos.', 'valor' => 250.00],
                    ['nome' => 'Monitor 27" 144Hz', 'descricao' => 'Monitor para games com alta taxa de atualização.', 'valor' => 1800.00],
                ];
                foreach ($artigos as $artigo) : ?>
                    <tr>
                        <td><?= htmlspecialchars($artigo['nome']); ?></td>
                        <td><?= htmlspecialchars($artigo['descricao']); ?></td>
                        <td>R$ <?= number_format($artigo['valor'], 2, ',', '.'); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>

<?php require_once __DIR__ . '\..\components\footer.php'; ?>
<script src="<?= VARIAVEIS['DIR_JS'] ?>main.js"></script>
</body>
</html>
