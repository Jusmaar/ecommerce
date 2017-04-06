<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
		<h1>Esta es tu compra realizada en CelularesPeru</h1>

		<table>
			<thead>
				<tr>
					<th>Celular</th>
					<th>Costo</th>
				</tr>
			</thead>

			<tbody>
				@foreach ($products as $product)
					<tr>
						<td>{{$product->title}}</td>
						<td>{{$product->pricing}}</td>
					</tr>

				@endforeach

				<tr>
					<td>Total</td>
					<td>{{$order->total}}</td>
				</tr>
			</tbody>
		</table>

</body>
</html>