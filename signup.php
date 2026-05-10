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
            <section class="banner sec_login sec_signup">
                <div class="tableDv">
                    <div class="tableCell">
                        <div class="contain">
                            <div class="content">
                                <div class="inner">
                                    <div class="banner_heading">
                                        <h1>Create Account</h1>
                                        <div class="shape">
                                            <img src="images/sec_3_light.png" alt="">
                                        </div>
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <input type="text" placeholder="First Name" id="fname"
                                                        class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <input type="text" placeholder="Last Name" id="lname"
                                                        class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <input type="email" placeholder="Email" id="email" class="txtBox">
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
                                            <div class="col-md-6">
                                                <div class="textBlock">
                                                    <input type="text" placeholder="Zip Code" id="zip" class="txtBox">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="textBlock">
                                                    <select name="" id="" class="txtBox">
                                                        <option value="1">City</option>
                                                        <option value="2">City</option>
                                                        <option value="3">City</option>
                                                        <option value="4">City</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock">
                                                    <select name="" id="" class="txtBox">
                                                        <option value="1">Country/Region</option>
                                                        <option value="2">City</option>
                                                        <option value="3">City</option>
                                                        <option value="4">City</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button class="siteBtn">Creat an Account</button>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock text-center">
                                                    <p>Returning Customer? <a href="login.php">Login</a></p>
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