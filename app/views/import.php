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

        <div class="card mb-3 pt-1" style="background-color: white; border-radius: 12px; height: 60px;">
            <div class="card-body pt-1">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                            <a class="nav-link  text-black" style="font-weight: bold;" href="panel">Lihat Camin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" style="font-weight: bold;" href="editcamin">Edit Camin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-white" style="font-weight: bold;" href="import">Import User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" style="font-weight: bold;" href="viewuser">View User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" style="font-weight: bold;" href="login/logout">Logout</a>
                        </li>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 mb-3">
                <div class="card border-0 shadow" style= "border-radius: 13px;">
                    <div class="background"></div>
                    <div class="card-body foreground">
                        <div class="h2 text-panel-camin text-center">
                            Import Data Peserta From Excel
                        </div>

                        <form action="import/importexcel" method="POST" enctype="multipart/form-data" class="text-center">
                            <div class="mb-3 text-start">
                                <label for="formFile" class="textPanitia">File Excel</label>
                                <input class="form-control" name="import" type="file">
                            </div>
                            <input class="btn btn-primary rounded-pill" name="submit" id="submit-btn" type="submit" value="IMPORT" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="textPanitia h6 mt-4 mb-4 fixed-bottom">Panitia Regen PCC © 2022</div>
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