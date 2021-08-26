<html>

<head>
    <title>Form Login</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-h1">Apakah anda obesitas?</h1>
            </div>
            <div class="card-body">
                <?php
                if ($this->session->flashdata('error') != '') {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $this->session->flashdata('error');
                    echo '</div>';
                }
                ?>

                <?php
                if ($this->session->flashdata('success_register') != '') {
                    echo '<div class="alert alert-info" role="alert">';
                    echo $this->session->flashdata('success_register');
                    echo '</div>';
                }
                ?>
                <form class="login-form" method="post" action="<?php echo base_url(); ?>login/proses">

                    <input id="email" class="form-content-email" type="email" name="email" placeholder="Email" required />

                    <input id="password" class="form-content-password" type="password" name="password" placeholder="Password" required />

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <a href="<?php echo base_url(); ?>register">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</body>

</html>