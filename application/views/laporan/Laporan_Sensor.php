<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
                <tr>
                <th>id</th>
                <th>data_sensor</th>
                <th>jumlah</th>
                </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data_sensor as $u) :?>
                <tr>
                <td><?php echo $u['id'] ?></td>
                <td><?php echo $u['data_sensor']?></td>
                <td><?php echo $u['jumlah']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body></html>