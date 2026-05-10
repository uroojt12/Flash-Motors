<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Contact</title>
        <?php include_once('includes/site-head.php') ?>
    </head>

    <body>
        <?php include_once('includes/header.php') ?>
        <!-- =========================banner=================== -->
        <main>
            <section class="banner sec_login">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="content">
                                <div class="inner">
                                    <div class="banner_heading">
                                        <h1>Customer Login</h1>
                                        <h6>We've sent you an email with a link to update your password.</h6>
                                        <div class="shape">
                                            <img src="images/sec_3_light.png" alt="">
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <input type="email" placeholder="Email" id="name" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <input type="text" placeholder="Password" id="name" class="txtBox">
                                                    <div class="hide_it">
                                                        <img src="images/hide.png" alt="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="textBlock form-check flexit">
                                                    <div class="remember-log">
                                                        <input type="checkbox" class="form-check-input">
                                                        <label for="confirm" class="form-check-label"> Remember
                                                            me</label>
                                                    </div>
                                                    <a href="forget.php">Forget your Password?</a>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="siteBtn">Login</button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock text-center">
                                                    <p>New Customer? <a href="signup.php">Sign up</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </main>

        <?php include_once('includes/footer.php') ?>
    </body>

</html>