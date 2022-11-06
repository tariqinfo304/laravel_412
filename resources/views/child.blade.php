@extends("layout")


@section("title")
	Child Page
@endsection


@section("header")
	@parent

	<x-table/>
	<p>Child Header</p>



@endsection