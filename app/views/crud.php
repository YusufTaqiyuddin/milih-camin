<?php $this->view('inc/header') ?>

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

        <div class="card mb-3 pt-1" style="background-color: white; border-radius: 12px; height: 60px;">
            <div class="card-body pt-1">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link text-black" style="font-weight: bold;" href="panel">Lihat Camin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white active" style="font-weight: bold;" href="editcamin">Edit Camin</a>
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

        <?php foreach ($data['camin'] as $camin) : ?>

            <div class="col-md-4 h-auto">
                <div class="card border-0 shadow" style="border-radius: 12px;">
                    <div class="card-body p-3">
                        <div class="mx-auto my-1 text-center">
                            <img src="<?= $this->assets('img/'.$camin['foto']) ?>" class="navbar-brand-camin" alt="camin1" width="192" height="192" />
                        </div>
                        <div class="text-center h5 p-4">
                            <?= $camin['nama'] ?>
                        </div>
                        <p class="garis"></p>
                        <div class="d-none d-md-block text-center h4 text-panel-camin">
                            Visi
                        </div>
                        <div class="d-none d-md-block text-center text-panel-camin">
                             <?= $camin['visi'] ?>
                        </div>
                        <div class="d-none d-md-block text-center h4 pt-3 text-panel-camin">
                            Misi
                        </div>
                        <div class="d-none d-md-block text-center text-panel-camin">
                            <?= nl2br($camin['misi']) ?>
                        </div>
                            <!-- Button trigger modal -->
                            <input class="btn btn-primary form-control my-1 mt-3" data-bs-toggle="modal" data-bs-target="#modal-<?= $camin['id'] ?>" id="submit-btn" type="submit" name="submit" value="Edit" />
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
        
    <div class="textPanitia h6 mt-4 mb-4">Panitia Regen PCC © 2022</div>

    <?php foreach ($data['camin'] as $camin) : ?>

        <div class="modal fade" id="modal-<?= $camin['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= BASEURL ?>/public/editcamin/edit" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $camin['id'] ?>">
                            <input type="hidden" name="foto-old" value="<?= $camin['foto'] ?>">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Camin</label>
                                <input class="form-control" name="foto" type="file" id="img-camin">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $camin['nama'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="visi" class="form-label">Visi</label>
                                <textarea name="visi" class="form-control"><?= $camin['visi'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="misi" class="form-label">Misi</label>
                                <textarea name="misi" class="form-control"><?= $camin['misi'] ?></textarea>
                            </div>
                            <div class="modal-footer d-block">
                                <button type="button" class="btn btn-danger col-lg-6" data-bs-dismiss="modal"
                                    >Batal</button>
                                <button type="submit" name="submit" class="btn btn-success col-lg-5"
                                    >Konfirmasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>