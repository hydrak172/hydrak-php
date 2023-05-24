<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $heading_hot; ?></h1>
    <table border='1'>
        <tr>
            <th>STT</th>
            <th>Product Name</th>
        </tr>
        <?php 
            foreach($listproductHot as $key => $data) : 
        ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $data['name'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <h1><?= $heading_newarrival; ?> </h1>
    <table border='1'>
        <tr>
            <th>STT</th>
            <th>Product Name</th>
        </tr>
        <?php 
            foreach($listproductNewArrival as $key => $data) : 
        ?>
        <tr>
            <td><?= $key+1 ?></td>
            <td><?= $data['name'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>