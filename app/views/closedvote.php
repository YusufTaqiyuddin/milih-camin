<?php $this->view('inc/header') ?>

<body class="login">
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="auth">
        <div class="navbar-brand">
            <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
                <div class="navbar pt-4 pb-3">
                    <div class="col-7 col-sm-auto ms-sm-auto text-black h5 text-center">
                        PEMILIHAN CALON ADMINISTRATOR PCC 2022/2023
                    </div>
                </div>
                <div class="card border-0 shadow" style="min-height: 350px; width: 600px; margin-left: -50px; border-radius: 20px;">
                    <div class="card-body foreground d-flex align-content-item">
                        <p class="display-5 m-auto text-center" style="font-weight: bold;">Terimakasih Sudah Login!!!</p>
                    </div>
                    <div class="card-body foreground d-flex align-content-item">
                        <h2 class="display-7 text-center m-auto mt-0">Maaf yahh <b style="color:#3355D1; text-decoration: none;"><?= $_SESSION['nama'] ?></b>  votenya masih tutup</h2>
                    </div>
                    <div class="card-body foreground d-flex align-content-item">
                        <h1 class="display-7 text-center m-auto mt-0"><span id="timer" class="display-6"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="textPanitia h6 mt-4 mb-4">Panitia Regen PCC © 2022</div>

    <script>
        var timer = 6;
        setInterval(() => {
            timer -= 1;
            if (timer <= 5) document.getElementById('timer').innerHTML = timer;
            if (timer <= 0) {
                window.location.href = '<?= BASEURL . 'login/logout' ?>';
            }
        }, 1000);
    </script>
</body>

</html>