<!doctype html><html lang="en"><head>    <meta charset="UTF-8">    <meta name="viewport"          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">    <meta http-equiv="X-UA-Compatible" content="ie=edge">    <title>Document</title>    <style>        table {            font-family: arial, sans-serif;            border-collapse: collapse;            width: 100%;        }        td, th {            border: 1px solid #dddddd;            text-align: left;            padding: 8px;        }        tr:nth-child(even) {            background-color: #dddddd;        }    </style></head><body><table>    <?php        if (isset($_SESSION['error'])) {            unset($_SESSION['error']);            echo "Invalid url<br>";        }    ?>    Enter a new link:    <form action="/links/create" method="POST">        <input type="text" name="original_link" required>        <input type="submit">    </form>    <tr>        <th>Original link</th>        <th>Shortened link</th>        <th>Action</th>    </tr>    <?php foreach ($links as $link): ?>        <tr>            <td><?= htmlspecialchars($link['original_url']); ?></td>            <td><a href="<?= $_SERVER['HTTP_REFERER'] . 'r/' . htmlspecialchars($link['shortened_url']); ?>"><?= 'localhost:8000/' . htmlspecialchars($link['shortened_url']); ?></a></td>            <td></td>        </tr>    <?php endforeach; ?></table></body></html>