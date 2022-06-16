<?php $this->view("inc/header") ?>

<body>
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="auth p-1 container">
        <div class="row pt-0 pb-0">
            <div class="navbar-brand">
               <img src="<?= $this->assets("img/solinep.png") ?>" alt="polines" width="60" height="60">>
            </div>
            <div class="navbar-brand">
                <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">>
            </div>
            <div class="text-black h5 text-end">
                PEMILIHAN CALON ADMINISTRATOR PCC 2022/2023
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-3">

            <?php foreach ($data['camin'] as $camin) : ?>

                <div class="col-md-4 mt-2">
                    <div class="card border-0 shadow" style="border-radius: 15px;">
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
                            <div class="form-group">
                                <!-- Button trigger modal -->
                                <input class="btn btn-primary form-control my-1 mt-3" data-bs-toggle="modal" data-bs-target="#konfirm-<?= $camin['id'] ?>" id="submit-btn" type="submit" name="submit" value="Vote" />
                            </div>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
    <div class="textPanitia h6 mt-4 mb-4">Panitia Regen PCC © 2022</div>

    <?php foreach ($data['camin'] as $camin) : ?>

        <div class="modal fade" id="konfirm-<?= $camin['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">PERINGATAN!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Apakah anda yakin dengan pilihan anda?</div>
                    <div class="modal-footer">
                        <form method="post" action="<?= BASEURL ?>vote/select">
                        <input type="hidden" name="id_camin" value="<?= $camin['id'] ?>">
                        <input type="hidden" name="id" value="<?= $_SESSION['id'] ?>">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" name="submit" class="btn btn-success">Konfirmasi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</body>

</html>