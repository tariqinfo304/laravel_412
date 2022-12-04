<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div> 
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL('/store') }}">Home</a></li>
                    <li
                    class=""><a href="{{ URL('/store') }}">Shop page</a></li>
                    <li
                    class=""
                    ><a href="single-product.php">Single product</a></li>
                    <li
                    class=""
                    ><a href="{{ URL('/store/cart') }}">Cart</a></li>
                    <li
                    class=""
                    ><a href="{{ URL('store/checkout') }}">Checkout</a></li>

                    @if(!empty(session("user")))
                    <li
                    class=""
                    ><a href="{{ URL('store/product') }}">Product</a></li>
                    @endif  
                   <!--  <li
                   
                    ><a href="#">Category</a></li>
                    <li
                  
                    ><a href="#">Others</a></li>
                    <li

                    ><a href="#">Contact</a></li> -->
                </ul>
            </div>  
        </div>
    </div>
</div> <!-- End mainmenu area -->