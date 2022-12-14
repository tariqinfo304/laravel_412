<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                         @if(!empty(session("user")))
                        <li><a href="#"><i class="fa fa-user"></i>

                           
                                {{ "Welcome To ". session("user")->name }}
                           
                        </a></li>
                         @endif
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="cart.php"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="checkout.php"><i class="fa fa-user"></i> Checkout</a></li>

                         @if(empty(session("user")))
                         <li><a href="{{ URL('store/user/login') }}"><i class="fa fa-user"></i> Login</a></li>
                        <li><a href="{{ URL('store/user/register') }}"><i class="fa fa-user"></i> Register</a></li>
                        @endif
                        @if(!empty(session("user")))
                         <li><a href="{{ URL('store/user/logout') }}"><i class="fa fa-user"></i> Logout</a></li>
                         @endif

                    </ul>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="./"><img src="{{ Asset('img/logo.png')}}"></a></h1>
                </div>
            </div>
            
            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="cart.php">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->  