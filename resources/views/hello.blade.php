<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
</head>
<body>

	<h1>First Lecture in Laravel View Blade Engine</h1>
	<hr/>
	<p>Your name: {{ $name }}</p>
	<hr/>
		
	@if($name == "tariq")
		<p>Tariq value </p>
	@else
		<p>Not Tariq value</p>
	@endif
	<hr/>

		@includeIf("table",["title"=>"Student Table Data"])

	<hr/>

	@php($i=0)
	@while($i < count($list))
		
		<p>{{ $list[$i]["name"] }}</p>
		@php($i++)
	@endwhile

	<hr/>

	@for($i=0;$i<count($list);$i++)
		
		<p>{{ $list[$i]["name"] }}</p>
	@endfor


	<hr/>

	<table border="2">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
			@each("table_row",$list,"row","empty")
		</tbody>
	</table>

	@once
	    @push('scripts')
	        <script>
	            var name="yatiq"
	        </script>
	    @endpush
	@endonce

	{{-- Here --}}

	<hr/>
	@php ($isClick=true)
	
	<input type="checkbox"
        name="active"
        value="active"
        @checked($isClick) 
        />
      <hr/>

      <input type="text" placeholder="Enter Name" @readonly(true) />
      <hr/>

</body>
</html>