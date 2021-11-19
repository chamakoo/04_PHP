<?php
    $goods['name'] = '和風柄レターセット';
    $goods['unitPrice'] = 980;
    $totalPrice = $_POST['count']*980 . '円';
    $count = $_POST['count'];
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ショッピングカート</title>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }
        th,td {
            border: 1px solid #666666;
            padding: 4px;
        }
        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1>ショッピングカート</h1>
    <form action="" method="post" novalidate>
    <table>
        <tr>
            <th>商品名</th>
            <th>単価</th>
            <th>数量</th>
            <th>小計</th>
        </tr>
        <tr>
            <td><?=$goods['name'] ?></td>
            <td><?=$goods['unitPrice'] ?></td>
            <td><input type="text" name="count" value="<?=htmlspecialchars($count, ENT_QUOTES)?>"></td>
            <td name="totalPrice"><?=$totalPrice?></td>
        </tr>

</table>

        <p><input type="submit" value="更新"></p>
    </form>
</body>
</html>
