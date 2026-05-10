<!DOCTYPE html>
<html lang="en">

    <head>
        <title>FAQ</title>
        <?php include_once('includes/site-head.php') ?>
    </head>

    <body>
        <?php include_once('includes/header.php') ?>
        <!-- =========================banner=================== -->
        <main>
            <section class="sec_account">
                <div class="contain">
                    <div class="inside">
                        <div class="mini_heading">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><span> > </span> Account Detail</li>
                            </ul>
                        </div>
                        <div class="account_heading">
                            <h1><strong>Account</strong> Details</h1>
                            <div class="shape">
                                <img src="images/sec_3_light.png" alt="">
                            </div>
                        </div>

                        <div class="content">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="">
                                                <p>Personal data</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <p>Primary Address</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <p>Order History</p>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-md-8">
                                    <div class="tab-content">
                                        <div id="personal" class="active">
                                            <div class="inner">
                                                <div class="inner_it">
                                                    <form action="">

                                                        <div class="row">
                                                            <h5>Account</h5>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="email" placeholder="Email" id="email"
                                                                        class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="text" placeholder="Phone" id="phone"
                                                                        class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="text" placeholder="First Name"
                                                                        id="fname" class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="text" placeholder="Last Name"
                                                                        id="lname" class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <hr>
                                                            </div>
                                                            <h5>Password</h5>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="text" placeholder="New Password"
                                                                        id="password" class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <input type="text" placeholder="Repeat Password"
                                                                        id="password" class="txtBox">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="textBlock">
                                                                    <button class="siteBtn yeloBtn">Save</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </main>
        <section class="popup" data-popup="delete">

            <div class="tableDv">

                <div class="tableCell">
                    <div class="contain">

                        <div class=" inside">

                            <h4>delete this address</h4>
                            <p>Are you sure you wish to delete this address?</p>
                            <ul class="cta">
                                <li><a href="#primary" class="siteBtn borderBtn crosBtn">Cencle</a></li>
                                <li><a href="" class="siteBtn yeloBtn">Delete</a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <?php include_once('includes/footer.php') ?>
        <!-- popup -->

    </body>

</html>