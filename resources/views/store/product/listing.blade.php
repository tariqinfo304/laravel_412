@extends("store.layout.layout")

@section("title")
	Product
@endsection


@section("main-content")
	

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product CRUD</h2>
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
                            <a href="{{ URL('store/product/create') }}">Add Product</a>

                            {{ $list->links()}}
                          <table class="table">

                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $row)
                                
	                                <tr>
		                                <td>{{$row->id}}</td>
                                        <td>
                                            @if(!empty($row->img))
                                            <img width="150px" height="150px" src="{{ Asset('upload/'.$row->img) }}" />

                                            @else
                                                ---
                                            @endif
                                        </td>
		                                <td>{{$row->name}}</td>
		                                <td>{{$row->price}}</td>
		                                <td>{{ $row->qty}}</td>

		                                <td>
		               <a href='{{ URL("store/product/$row->id/edit") }}'>Update</a>&nbsp;&nbsp;&nbsp;
		               <a href='{{ URL("store/product/$row->id") }}'>View</a>&nbsp;&nbsp;&nbsp;
		                                      <a href='{{ URL("store/product/$row->id/edit")."?delete=1" }}'>Delete</a></td>
	                                </tr>
                                @endforeach
                            </tbody>
                          </table>
                        </div>                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>


@endsection