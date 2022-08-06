<?php $validation = \Config\Services::validation(); ?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 - Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/css/login.css'); ?>" />
</head>

<body class="main-bg">
  <!-- Login Form -->
  <div class="container-fluid">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3"><?php echo lang('Auth.login_heading'); ?></h2>
          </div>
          <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
              <?= session()->getFlashdata('message'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
              <?= session()->getFlashdata('errors'); ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>
          <div class="card-body">
            <form action="<?= base_url('auth/login'); ?>" method="POST" accept-charset="utf-8">
              <div class="mb-4 mt-2">
                <label for="username" class="form-label">Email/Username:</label>
                <input type="text" class="form-control <?= $validation->hasError('identity') ? "is-invalid" : "" ?>" name="identity" id="identity" value="<?= set_value('identity'); ?>" placeholder="Masukkan Email atau Username">
                <?php if ($validation->hasError('identity')) : ?>
                  <div class="invalid-feedback">
                    <?php echo $validation->getError('identity'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control <?= $validation->hasError('password') ? "is-invalid" : "" ?>" name="password" id="password" placeholder="Masukkan Password">
                <?php if ($validation->hasError('password')) : ?>
                  <div class="invalid-feedback">
                    <?php echo $validation->getError('password'); ?>
                  </div>
                <?php endif; ?>
              </div>
              <div class="mb-4">
                <?php echo form_checkbox('remember', '1', false, 'id="remember"'); ?>
                <label for="remember" class="form-label">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn text-light main-bg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>