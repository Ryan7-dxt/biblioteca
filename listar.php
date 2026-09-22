<?php

require "config.php";

$stmt = $con->query("SELECT id, autorLivro, descricaoLivro, anoPublicacao FROM livros");
$livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Livros</title>

    <style>

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: left;
             color: blueviolet;
        }

        table {
            width: 80%;
            margin: 30px 0;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid blueviolet;
            padding: 10px;
            text-align: left;
        }

        th {
            background: blueviolet;
            color: white;
        }

    </style>

</head>

<body>

    <h1>Livros </h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Descrição</th>
            <th>Ano de Publicação</th>
        </tr>

        <?php foreach ($livros as $livro) { ?>

            <tr>

                <td>
                    <?php echo $livro["id"]; ?>
                </td>

                <td>
                    <?php echo $livro["autorLivro"] ?? "Não informado"; ?>
                </td>

                <td>
                    <?php echo $livro["descricaoLivro"] ?? "Não informado"; ?>
                </td>

                <td>
                    <?php echo $livro["anoPublicacao"] ?? "Não informado"; ?>
                </td>

            </tr>

        <?php } ?>

    </table>

</body>

</html>