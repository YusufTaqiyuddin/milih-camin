<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Data User</title>
</head>

<body>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data User.xls");
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        <?php $no = 0;
        foreach ($data['user'] as $user) :
            if ($user['email'] != 'panitia') :
                $no += 1;
        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $user['nama'] ?></td>
                    <td><?= $user['nim'] ?></td>
                    <td><?= $user['user'] ?></td>
                    <td><?= $user['pass'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?= $user['status'] ?></td>
                </tr>
        <?php endif;
        endforeach; ?>
    </table>
</body>

</html>