<?php

include_once'header.php';

?>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col1">
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="img/shoes/shoe1.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Shoes 1</h3>
                                <span>Shoes</span>

                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$75</h4>
                        </div>
                    </div>
                    <div class="flex item justify-content-between">
                        <div class="flex">
                            <div class="img text-center">
                                <img src="img/shoes/shoe1.png" alt="">
                            </div>
                            <div class="title">
                                <h3>Shoes 1</h3>
                                <span>Shoes</span>

                                <div class="buttons">
                                    <button type="submit"><i class="fas fa-chevron-up"></i> </button>
                                    <input type="text" class="font-title" value="1">
                                    <button type="submit"><i class="fas fa-chevron-down"></i> </button>
                                </div>
                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Cart</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">$75</h4>
                        </div>
                    </div>
                </div>
                



                <div class="col2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Products ( 3 items ) : </label>
                                <span>$75</span>
                            </li>
                            <li class="flex justify-content-between">
                                <label for="price">Delivery Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amount Payable : </label>
                                <span class="text-red font-title">$75</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://www.paypal.com/sdk/js?client-id=Aa65GcbXohHgZn7Hjyutd2KuGibu2Qr0h5ohLuzLC9XHRLsN9v8qVcLHuaVAHjSFniq0vCgYfQpkjEy0&disable-funding=credit,card"></script>
    <script src="js/payment.js"></script>
</body>
</html>
<?php

include_once'footer.php';

?>