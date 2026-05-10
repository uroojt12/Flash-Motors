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
            <section class="sec_checkout">
                <div class="contain">
                    <div class="mini_heading">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span> > </span> <a href=""> Shop</a></li>
                            <li><span> > </span> <a href=""> Cart Page</a></li>
                            <li><span> > </span>Checkout</li>
                        </ul>
                    </div>
                    <div class="sec_heading">
                        <div class="title">
                            <h3>Checkout</h3>
                        </div>
                        <ul class="cta">
                            <li>
                                <p>Have an account?</p>
                            </li>
                            <li><a href="" class="siteBtn yeloBtn">Sign in</a></li>
                        </ul>
                    </div>
                    <div class="flex">
                        <div class="col col1">
                            <form action="">
                                <h5>How do you want to pay?</h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="textBlock">
                                            <div class="inner_box txtBox">

                                                <div class="inner_box_1">
                                                    <input type="radio" name="a2" checked>
                                                    <p>Credit/Debit Card & Local Payment</p>

                                                </div>
                                                <ul class="card_debit">
                                                    <li><a href="">
                                                            <img src="images/maestro.png" alt="">
                                                        </a></li>
                                                    <li><a href="">
                                                            <img src="images/visa.png" alt="">
                                                        </a></li>
                                                    <li><a href="">
                                                            <img src="images/mastercard.png" alt="">
                                                        </a></li>
                                                    <li><a href="">
                                                            <img src="images/discover.png" alt="">
                                                        </a></li>
                                                </ul>
                                            </div>

                                            <div class="inner_box txtBox">

                                                <div class="inner_box_1">
                                                    <input type="radio" name="a2">
                                                    <p>PayPal</p>

                                                </div>
                                                <div class="img">
                                                    <img src="images/paypal.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Enter your card information:</h5>
                                    <div class="col-md-12">
                                        <div class="textBlock credit_no">
                                            <input type="email" placeholder="Credit/debit card number" id="email"
                                                class="txtBox">
                                            <ul class="card_debit_2">

                                                <li><a href="">
                                                        <img src="images/visa.png" alt="">
                                                    </a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="textBlock">
                                            <input type="text" placeholder="Expiration  MM/YY" id="" class="txtBox">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="textBlock">
                                            <input type="text" placeholder="CVV" id="lname" class="txtBox">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="textBlock">
                                            <div class="info">
                                                <i class="fa fa-question"></i>
                                                <div class="infoTip">3-digit security code usually found on the back of
                                                    your card. American Express cards have a 4-digit code located on the
                                                    front.</div>
                                            </div>
                                        </div>
                                    </div>


                                    <h5 style="margin-top:20px;">Billing address:</h5>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="select_radio">
                                                <div class="col-md-12">
                                                    <div class="textBlock">
                                                        <div class="inner_box">

                                                            <div class="inner_box_1">
                                                                <input type="radio" name="a1" checked value="no">
                                                                <p>Same as shipping address</p>

                                                            </div>

                                                        </div>
                                                        <div class="inner_box">

                                                            <div class="inner_box_1">
                                                                <input type="radio" name="a1" value="yes">
                                                                <p>Use a different billing address</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-12 hidden">
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

                                                            <select name="" id="" class="txtBox">
                                                                <option value="1">Country/Region</option>
                                                                <option value="2">City</option>
                                                                <option value="3">City</option>
                                                                <option value="4">City</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="textBlock">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="text" placeholder="Zip Code" id="phone"
                                                                        class="txtBox">
                                                                </div>
                                                                <div class="col-md-6">

                                                                    <select name="" id="" class="txtBox">
                                                                        <option value="1">City</option>
                                                                        <option value="2">City</option>
                                                                        <option value="3">City</option>
                                                                        <option value="4">City</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="textBlock">
                                                            <input type="text" placeholder="Street Address" id="dax"
                                                                class="txtBox">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="siteBtn yeloBtn">Continue to Payment</button>
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="col col2">
                            <div class="inner">
                                <h3>Order Summary</h3>
                                <hr>
                                <div class="col_inside">
                                    <p>2 Items in Cart</p>
                                    <div class="col_inside_item">
                                        <div class="image">
                                            <img src="images/blog-1.png" alt="">
                                        </div>
                                        <div class="title_head">
                                            <h4>Super modern wild black scooter B5II</h4>
                                            <p><span>Qty 1</span></p>
                                        </div>
                                        <strong>$4,349.00</strong>
                                    </div>
                                    <div class="col_inside_item">
                                        <div class="image">
                                            <img src="images/blog-1.png" alt="">
                                        </div>
                                        <div class="title_head">
                                            <h4>Super modern wild black scooter B5II</h4>
                                            <p><span>Qty 1</span></p>
                                        </div>
                                        <strong>$4,349.00</strong>
                                    </div>
                                    <hr>
                                    <div class="inside_list inside_list_one">
                                        <ul>
                                            <li>
                                                <p><span>Subtotal</span> <strong>$4,349.00</strong></p>
                                            </li>
                                            <li>
                                                <p><span>Shipping <br>(Standard Rate - Price may vary depending on the
                                                        item/destination. Shop Staff will contact you.)</span>
                                                    <strong>$21.00</strong>
                                                </p>
                                            </li>
                                            <li>
                                                <p><span>Tax</span> <strong>$1.80</strong></p>
                                            </li>
                                            <li>
                                                <p><span>GST (10%)</span> <strong>$1.80</strong></p>
                                            </li>
                                            <hr>
                                            <li class="total-it">
                                                <p><span>Order total</span> <strong
                                                        class="yellow-text">$4,800.00</strong></p>
                                            </li>
                                        </ul>

                                    </div>
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