<?php $this->view('inc/header') ?>

<body class="login">
    <!-- Login -->
    <div class="bola bola-3"></div>
    <div class="bola bola-1"></div>
    <div class="bola bola-2"></div>
    <div class="auth">
        <div class="row pt-0 pb-0 ms-4">
            <div class="navbar-brand ">
                <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
                <div class="navbar pt-4 pb-3">
                    <div class="col-7 col-sm-auto ms-sm-auto text-black h5 text-center">
                        PEMILIHAN CALON ADMINISTRATOR PCC 2022/2023
                    </div>
                </div>
                <div class="card border-0 shadow" style="border-radius: 15px; background-color: #3355D1; width: 600px; margin-left: -50px; border-radius: 20px;">
                    <div class="card-body p-4 p-sm-5">
                        <a href="../panel" class="text-pilihan">Lihat Camin</a>
                    </div>
                </div>
                <div class="card border-0 shadow" style="border-radius: 15px; width: 600px; margin-left: -50px; border-radius: 20px; ">
                    <div class="card-body p-4 p-sm-5">
                        <a href="../editcamin" class="text-pilihan-2">Edit Camin</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <footer>
        <p class="textPanitia fixed-bottom">Panitia Regen PCC © 2022</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
</body>

</html>