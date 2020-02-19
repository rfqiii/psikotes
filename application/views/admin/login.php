<div class="">
    <div class="container row mx-auto bg-gradient-dark">
        <div class="border card my-5 col-md-4 p-2 container">
            <div class="card-header bg-primary text-white text-center rounded">
                <p class="h2">Selamat Datang</p>
            </div>
            <form class="form-horizontal card-body" method="post" action="<?php echo base_url('Admin/login_admin'); ?>">
                <fieldset>

                    <!-- Form Name -->

                    <div class="text-center h1 text-secondary">
						<img src="<?php base_url(); ?>assets/img.png" style="height: 150px; width: 200px;" alt="" srcset="">
						
					</div>
					<!-- <p class="text-center h3">DASHBOARD PANEL LOGIN</p> -->
                    <?php echo validation_errors(); ?>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class=" control-label" for="username">Username</label>
                        <div class="">
                            <input id="username" name="username" type="text" placeholder="" class="form-control input-md" required>

                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <label class=" control-label" for="password">Password</label>
                        <div class="">
                            <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required>

                        </div>
                    </div>

                    <!-- Button -->
                    <button type="submit" name="" id="submit" class="btn btn-primary m-0 btn-block">Login</button>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<script>
    
</script>
