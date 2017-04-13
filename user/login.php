<form method="post" id="login" action="proses_login.php">
                        <?php
                        if (!isset($_SESSION['nis'])) {
                            ?>
                            
                                
                                    <p><label>Username</label><input type="text" name="user" /></p>

                              		<p><label>Password</label><input type="password" name="pass" /></p>
                                    </br>
									</br>
                         
                                    <p><input class="button" type="submit" name="masuk" value="Login" onclick=""/></p>
                        <?php } else { ?>
						</br>

								<p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selamat datang <?php echo $_SESSION['namasiswa']?></label></p>
						</br>       
                                        <input class="art-button" type="submit" name="keluar" value="Logout" onclick=""/>
                                    
                        <?php } ?>
</form>

<?php /*
<div class="col-md-5">
    <div class="panel panel-default">
        <div class="panel-heading">
            <label class="panel-title">Login</label>
        </div>
        <div class="panel-footer">
            <form method="post" action="proses_login.php" class="form-horizontal">
                <?php
                if (!isset($_SESSION['status'])) {
                    include './form_before_login.php';
                } else {
                    include './form_after_login.php';
                }
                ?>
            </form>
        </div>
    </div>
</div>*/