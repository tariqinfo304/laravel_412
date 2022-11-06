<h1>{{ $title }}</h1>
<table border="2">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach($list as $row)

			<tr>
				<td>{{ $row['Id'] }}</td>
				<td>{{ $row['name'] }}</td>
			</tr>

		@endforeach
	</tbody>
</table>