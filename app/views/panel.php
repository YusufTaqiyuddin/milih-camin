<?php $this->view('inc/header') ?>
</head>

<body>
    <div class="bola bola-3"></div>
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="auth p-1 pt-0 container">
        <div class="navbar pt-1 pb-2 ">
            <div class="navbar-brand">
                <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">
            </div>
            <div class="text-black h5 text-center">
                PEMILIHAN CALON ADMINISTRATOR PCC 2022/2023
            </div>
        </div>

        <?php
        $camin1 = $camin2 = $camin3 = $belum = $total = 0;
        foreach ($data['user'] as $user) {
            if ($user['user'] != 'panitia') {
                $total += 1;
                if ($user['pilihan'] == 1) $camin1 += 1;
                if ($user['pilihan'] == 2) $camin2 += 1;
                if ($user['pilihan'] == 3) $camin3 += 1;
                if ($user['status'] == 'Belum') $belum += 1;
            }
        }

        if ($total > 0) {
            $camin1 = number_format(($camin1 / $total * 100), 2, '.', '');
            $camin2 = number_format(($camin2 / $total * 100), 2, '.', '');
            $camin3 = number_format(($camin3 / $total * 100), 2, '.', '');
            $belum = number_format(($belum / $total * 100), 2, '.', '');
        }
        ?>

        <div class="card mb-3 pt-1" style="background-color: white; border-radius: 12px; height: 60px;">
            <div class="card-body pt-1">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="font-weight: bold;" href="panel">Lihat Camin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" style="font-weight: bold;" href="editcamin">Edit Camin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" style="font-weight: bold;" href="import">Import User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" style="font-weight: bold;" href="viewuser">View User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" style="font-weight: bold;" href="login/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-md-4 h-auto">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body p-4">
                        <div class="mx-auto my-1 text-center">
                            <img src="<?= $this->assets('img/'.$data['camin']['0']['foto']) ?>" class="navbar-brand-camin" alt="camin1" width="192" height="192" />
                        </div>
                        <div class="text-center h5 p-4">
                            <?= $data['camin']['0']['nama'] ?>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="25" 
                            aria-valuemin="0" aria-valuemax="100"style="width: <?= $camin1 ?>%"></div>
                        </div>
                        <div class="text-center mt-3 h5">
                            <p class="text-center h4 text-panel-camin pt-3 pb-1"><?= $camin1 ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-0">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body p-4">
                        <div class="mx-auto my-1 text-center">
                           <img src="<?= $this->assets('img/'.$data['camin']['1']['foto']) ?>" class="navbar-brand-camin" alt="camin1" width="192" height="192" />
                        </div>
                        <div class="text-center h5 p-4">
                            <?= $data['camin']['1']['nama']?>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100" style="width: <?= $camin2 ?>%"></div>
                        </div>
                        <div class="text-center mt-3 h5">
                            <p class="text-center h4 text-panel-camin pt-3 pb-1"><?= $camin2 ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-0">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body p-4">
                        <div class="mx-auto my-1 text-center">
                            <img src="<?= $this->assets('img/'.$data['camin']['2']['foto']) ?>" class="navbar-brand-camin" alt="camin1" width="192" height="192" />
                        </div>
                        <div class="text-center h5 p-4">
                            <?= $data['camin']['2']['nama'] ?>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"style="width: <?= $camin3 ?>%"></div>
                        </div>
                        <div class="text-center mt-3 h5">
                            <p class="text-center h4 text-panel-camin pt-3 pb-1"><?= $camin3 ?>%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top: -18px;">
            <div class="col-md-12 h-auto">
                <div class="card border-0 shadow" style="border-radius: 13px;">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between">
                            <h5>Peserta yang belum memilih</h5>
                            <div class="pb-3 h4 text-panel-camin"><?= $belum ?>%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animateds bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: <?= $belum ?>%"></div>
                        </div>
                        <table class="table mt-2 text-black">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 0;
                                foreach ($data['user'] as $user) :
                                    if ($user['status'] == 'Belum') :
                                        $no += 1;
                                ?>
                                <tr class="custom-table">
                                    <td><?= $no ?></td>
                                    <td><?= $user['nama'] ?></td>
                                    <td><?= $user['nim'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['status'] ?></td>
                                </tr>
                                <?php endif;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="textPanitia h6 mt-4 mb-4">Panitia Regen PCC © 2022</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>

</html>