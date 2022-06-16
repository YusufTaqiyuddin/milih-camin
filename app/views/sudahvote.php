<?php $this->view('inc/header') ?>

<body>
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">

                <div class="navbar pt-5 pb-4">
                    <div class="navbar-brand">
                        <img src="<?= $this->assets("img/solinep.png") ?>" alt="polines" width="50" height="50">
                    </div>

                    <div class="navbar-brand d-sm-block d-none">
                        <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="50" height="50">
                    </div>

                    <div class="col-7 col-sm-auto ms-sm-auto text-white h5 text-center">
                        PEMILIHAN CALON ADMINISTRATOR PCC
                    </div>

                    <div class="navbar-brand d-sm-none">
                        <img src="pcc.jpg" alt="pcc" width="50" height="50">
                    </div>
                </div>
                <div class="card">
                    <div class="background"></div>
                    <div class="card-body foreground text-center py-auto" style="min-height: 300px;">
                        <h1 class="display-4 mt-3 text-center">Terimakasih Sudah Login!!!</h1>
                        <p class="mt-3 text-center text-bold-400" style="font-size: 1.5rem;">
                            Maaf yahhh
                            <b class="text-uppercase text-warning" style="font-size: 1.75rem;">
                                <?= $_SESSION['nama'] ?>
                            </b> 
                            anda sudah vote
                        </p>
                        </br><span id="timer" class="display-6"></span>
                    </div>
                </div>
                <div class="text-center h6 mt-4 mb-4">Panitia Regen PCC © 2021</div>
            </div>

        </div>
    </div>

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