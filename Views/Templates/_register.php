<section class="login mb-5 mt-2">
    <div class="container">
        <h5 class="text-center mt-4">Create Your Account</h5>
        <div class="row d-flex  justify-content-center">
            <div class="col-md-6">
            <form action="" method="post" class="border shadow px-3 py-2 pb-5">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="form-floating  mb-3">
                            <input type="text" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" class="form-control  <?= $error['user_name'] ? 'is-invalid': '' ?>" id="username" name="username" >
                            <label for="username" class="form-label">Name</label>
                            <div class="invalid-feedback">
                                <?= $error['user_name']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-floating  mb-3">
                            <input type="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" class="form-control  <?= $error['user_email'] ? 'is-invalid': '' ?>" id="email" name="email" aria-describedby="emailHelp">
                            <label for="email" class="form-label">Email</label>
                            <div class="invalid-feedback">
                                <?= $error['user_email']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="form-floating  mb-3">
                            <input type="password" class="form-control <?= $error['password'] ? 'is-invalid': '' ?>" id="password" name="password">
                            <label for="password" class="form-label">Password</label>
                            <div class="invalid-feedback">
                                <?= $error['password']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="form-floating">
                            <input type="password" class="form-control  <?= $error['confirm_password'] ? 'is-invalid': '' ?>" id="confirm" name="confirm_password">
                            <label for="confirm" class="form-label">Confirm Password</label>
                            <div class="invalid-feedback">
                                <?= $error['confirm_password']; ?>
                            </div>

                        </div>
                    </div>
                </div>
                <input type="submit" name="signup" class="form-control submit btn btn-primary my-3" value="Signup">

            </form>
            </div>
        </div>

        
    </div>

</section>