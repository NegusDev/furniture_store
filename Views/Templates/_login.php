<section class="login ">
    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center ">
            <div class="col-md-6 border shadow ">
            <h5 class="text-center mt-4">Welcome back Login Please</h5>
            <form action="" method="post" class="px-3 py-2">
                <div class="form-floating mb-3">
                    <input type="email"  value="<?php if(isset($_POST['log_email'])) echo $_POST['log_email'] ?>" class="form-control <?= $error['email'] ? 'is-invalid': '' ?>" id="email" name="log_email" aria-describedby="emailHelp">
                    <label for="email">Email</label>
                    <div class="invalid-feedback">
                        <?= $error['email']; ?>
                    </div>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control <?= $error['password'] ? 'is-invalid': '' ?>" id="password" name="log_password" >
                    <label for="password">Password</label>
                    <div class="invalid-feedback">
                        <?php echo $error['password']; ?>
                    </div>
                </div>
                <input type="submit" name="login" class="form-control submit btn  my-3" value="Login">
            </form>
            </div>
        </div>

        
    </div>

</section>