<?php $this->view('inc/header') ?>

    <body class="login">
        <!-- Login -->
        <div class="bola bola-1"></div>
        <div class="bola bola-2"></div>
        <div class="auth">
            <div class="row pt-0 pb-0 ms-4">
                <div class="navbar-brand">
                    <img src="<?= $this->assets("img/solinep.png") ?>" alt="pcc" width="60" height="60">
                </div>
                <div class="navbar-brand">
                    <img src="<?= $this->assets("img/pcc.jpg") ?>" alt="pcc" width="60" height="60">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9 col-md-7 col-lg-4 mx-auto">
                    <div class="navbar pt-4 pb-3">
                        <div class="col-7 col-sm-auto ms-sm-auto text-black h5 text-center">
                        PEMILIHAN CALON ADMINISTRATOR PCC 2022/2023
                    </div>
                </div>
                    <div class="card border-0 shadow" style="border-radius: 15px;">
                        <div class="card-body p-4 p-sm-5">
                            <h3 class="mb-5">Log in</h3>
                            <form method="post" class="form" action="<?= BASEURL ?>login/auth">
                                <div class="mb-3">
                                    <label for="inputUsername" class="form-label">Username</label>
                                    <input name="user" type="text" class="form-control" id="inputUsername" aria-describedby="inputUsername">
                                </div>
                                <div class="mb-3">
                                    <label for="InputPassword1" class="form-label">Password</label>
                                    <input name="pass" type="password" class="form-control" id="InputPassword1" > 
                                </div>
                                <div class="form-group my-4">
                                    <input name="submit" id="submit-btn" type="submit" value="Login" class="btn btn-primary form-control my-1" style="font-size: 25px; border-radius: 15px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="textPanitia h6 mt-4 mb-4">Panitia Regen PCC © 2022</div>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        -->
    </body>
</html>