@extends("store.layout.layout")

@section("title")
	Add Product
@endsection


@section("main-content")
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Add Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">

                            <form enctype="multipart/form-data" 
                            action="{{ URL('store/product') }}"


                             class="checkout" method="post" name="checkout">

                            	@csrf()
                                <div id="customer_details" class="col2-set">
                                    <div class="col-12">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Add Product</h3>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text"placeholder="" id="billing_first_name"
                                                value="{{ old('name') }}"
                                                 name="name" class="input-text ">

                                                @error("name")

                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Price <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" placeholder="" id="billing_last_name"
                                                value="{{ old('price') }}"
                                                 name="price" class="input-text ">
                                                @error("price")

                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company">Quantity</label>
                                                <input type="text" placeholder="" id="billing_company"
                                                value="{{ old('qty') }}"
                                                 name="qty" class="input-text ">
                                                @error("qty")

                                                    <p class="alert alert-danger">{{ $message }}</p>
                                                @enderror
                                            </p>
                                            
                                            <div class="clear"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-secondary">Add Product</button>
                                    </div>

                                </div>
                            </form>

                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@endsection