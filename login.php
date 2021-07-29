<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Hi Admin ;)</h2>
      </div>
    </div>
  </div>
</div>
<div class="container ">
<div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <h2>Welcome Back !!!</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Hi Admin. Persiapkan dulu secangkir kopi sebelum memulai pekerjaan ini.
                                </p>
                                <p>
                                   Tetap semangat dan jangan lupa tersenyum :).
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <H2>Login</H2>
                            <?php if($_POST) include 'aksi.php';?>
                            <form action="?m=login" method="post">
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Username" name="user" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- <div class="row">
    <div class="col-md-4">        
        <?php if($_POST) include 'aksi.php';?>
        <form class="form-signin" action="?m=login" method="post">              
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">            
                <label>Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" />  
            </div>      
            <button class="btn btn-success btn-block" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>        
        </form>      
    </div>
</div> -->
</div>