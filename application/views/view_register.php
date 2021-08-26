<!doctype html>
<html lang="en">

<head>
    <title>Form Register</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleRegist.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>

<body class="bg">
    <div class="container mt-5" style="padding-top: 80px;">
        <?php
        if ($this->session->flashdata('error') != '') {
            echo '<div class="alert alert-danger" role="alert">';
            echo $this->session->flashdata('error');
            echo '</div>';
        }
        ?>

        <div class="row">
            <form action="<?php echo base_url(); ?>register/proses" method="post" class="row g-3">
                <div class="row">
                    <div class="col-md-4">
                        <span class="title">SIGN UP</span>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12 mb-3 pb-2">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                            </div>
                            <div class="col-md-12 mb-3 pb-2">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 mb-3 pb-2">
                                <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp">
                            </div>
                            <div class="col-md-12 mb-3 pb-2">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 mb-3 pb-2">
                                <input type="password" class="form-control" name="password2" id="password2" placeholder=" Re type Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4"><input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="Berat Badan"></div>
                    <div class="col-4"> <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="Tinggi Badan cm"></div>
                </div>



                <div class="row justify-content-center mt-5 wrapper">
                    <div class="col-md-12 align-self-center">
                        <button type="submit" class="btn btn-primary btn-letsgo">Lets Go</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>



</body>

</html>