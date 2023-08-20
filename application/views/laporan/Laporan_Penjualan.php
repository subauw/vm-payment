<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
                <tr>
                    <th>order_id</th>
                    <th>gross_amount</th>
                    <th>payment_type</th>
                    <th>transaction_time</th>
                </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($transaksi_mindtrans as $u) :?>
                <tr>
                    <td><?php echo $u['order_id'] ?></td>
                    <td><?php echo $u['gross_amount']?></td>
                    <td><?php echo $u['payment_type']?></td>
                    <td><?php echo $u['transaction_time']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body></html>