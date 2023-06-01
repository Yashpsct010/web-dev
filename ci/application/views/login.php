
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
  <?php if($this->session->flashdata('username'))  {?>
    <div class="alert alert-success"><?= $this->session->flashdata('username') ?> </div>
    <?php }?>
    <?php if($this->session->flashdata('file'))  {?>
    <div class="alert alert-success"><?= $this->session->flashdata('file') ?> </div>
    <?php }?>
  <form method='POST' action='<?php echo base_url('Welcome/signin/'); ?>'>
    <section class="form-02-main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="_lk_de">
              <div class="form-03-main">
                <div class="logo">
                  <img src="assets/images/us.png">
                </div>
                <div class="form-group">
                  <input type="username" name="username" class="form-control _ge_de_ol" type="text" placeholder="Enter username" required="" aria-required="true">
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="" aria-required="true">
                </div>

                <div class="checkbox form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                      Remember me
                    </label>
                  </div>
                  <a href="#">Forgot Password</a>
                </div>

                <!-- <div class="form-group">
                  <div class="_btn_04">
                    <a href="<?php.// echo base_url('Welcome/signin/'); ?>">Login</a>
                  </div> -->
                  <button type="submit" class="btn btn-primary">Login</button>
                  <button class="btn btn-primary"><a href="<?php echo base_url('Welcome/login_form/');?>" class="link-light">Signup </a> </td></button>
                </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>