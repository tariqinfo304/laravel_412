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
                        <h2>Edit Product</h2>
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
                            
                           action="{{ URL('store/product',$obj->id) }}"
                            


                             class="checkout" method="post" name="checkout">

                             
                                @method("put")
                            	<input type="hidden" name="id" value="{{ $obj->id }}">
                            	@csrf()
                                <div id="customer_details" class="col2-set">
                                    <div class="col-12">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Add Product</h3>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Name <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text"
                                                
				                            		value="{{ $obj->name }}"
				                            

                                                placeholder="" id="billing_first_name" name="name" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Price <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input 
                                                
				                            		value="{{ $obj->price }}"
				                          
                                                type="text" placeholder="" id="billing_last_name" name="price" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company">Quantity</label>
                                                <input type="text"
                                                
				                            		value="{{ $obj->qty }}"
				                            
                                                 placeholder="" id="billing_company" name="qty" class="input-text ">
                                            </p>
                                            
                                            <div class="clear"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-secondary">Edit Product</button>
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