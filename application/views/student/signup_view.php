<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                Signup
            </div>
            <div class="card-body">
                <form action="" method='post'>
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="John Doe">
                        <small class="form-text text-danger"><?=form_error('username');?></small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
                        <small class="form-text text-danger"><?=form_error('email');?></small>
                    </div>
                    <div class="form-group mt-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="form-text text-danger"><?=form_error('password');?></small>
                    </div>
                    <div class="form-group mt-3">
                            <button type='submit' name='add' class='btn btn-primary float-end mt-3'>Sign-Up</button>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </div>
</div>