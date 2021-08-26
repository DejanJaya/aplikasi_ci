<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styleHome.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    <title>Home</title>
</head>

<body class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= base_url() ?>/assets/images/image-home.png" class="image-home" height="500" alt="">
            </div>
            <div class="col-md-6">
                <div class="card main-card">
                    <div class="row justify-content-end">
                        <div class="col-md-4  align-self-end">
                            <div class="card shadow card2">
                                <div class="card-body card-mini">
                                    <p>index: <?php echo $this->session->userdata('indeks'); ?></p>
                                    <p style="text-align: center;"><?php echo $this->session->userdata('keterangan'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <span class="text-user"><?php echo $this->session->userdata('nama'); ?>, kamu <?php echo $this->session->userdata('keterangan'); ?></span>
                    </div>
                    <div class="row">
                        <span class="text-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu f</span>
                    </div>
                    <div class="row justify-content-end" style="margin-right: 40px;">
                        <div class="col-md-4 align-self-end">
                            <a href="<?php echo base_url(); ?>login/logout" class="btn btn-primary btn-letsgo">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>