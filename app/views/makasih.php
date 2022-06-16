<?php $this->view('inc/header') ?>

<body class="login">
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="auth">
        <div class="navbar-brand">
            <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">>
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
                        <p class="display-5 m-auto text-center" style="font-weight: bold;">TERIMAKASIH </br><span id="timer" class="text-sm"></span></p>
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
            if(timer <= 5) document.getElementById('timer').innerHTML = timer;
            if (timer <= 0) {
                window.location.href = '<?= BASEURL ?>';
            }
        }, 1000);
    </script>
</body>

</html>