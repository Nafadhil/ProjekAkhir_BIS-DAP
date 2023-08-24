<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>REGISTER ACCOUNT</h1>
    </div>

    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <h4>REGISTER ACCOUNT</h4>
        </div>
        <div class="card-body">
          <div class="card-body table-responsivey">
            <?php if (!empty(session()->getFlashdata('success'))): ?>
              <script>
                Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  text: '<?php echo session()->getFlashdata('success'); ?>',
                });
              </script>
            <?php endif; ?>
            <form method="post" action="<?= base_url(); ?>/register" enctype="multipart/form-data">
              <?= csrf_field(); ?>
              <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  please fill in your name
                </div>
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  <div class="invalid-feedback">
                    please fill in your email
                  </div>
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="role">Role</label>
                  <select class="form-control" id="role" name="role" value="<?= old('role'); ?>">
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                  </select>
                  <div class="invalid-feedback">
                    please fill in your role
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator"
                    name="password" tabindex="2" required>
                  <div class="invalid-feedback">
                    please fill in your password
                  </div>
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="password2" class="d-block">Password Confirmation</label>
                  <input id="password2" type="password" class="form-control" name="password2" tabindex="2" required>
                  <div class="invalid-feedback">
                    please fill in your password confirmation
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</section>
</div>
<?= $this->endSection() ?>