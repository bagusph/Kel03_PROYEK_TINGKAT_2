<div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="login_modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 40px">
            <h2>LOGIN</h2>
            <form action="<?php echo base_url('login/aksi_login_anggota'); ?>" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter Username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="form-group" style="float: right">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
