<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>

	<h1>Add new Employee</h1>
	<a href="{{route('admin.home')}}">Admin</a>

	<form method="post">
		
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<table>

			<tr>
				<td>Employee Name</td>
				<td><input type="text" name="employeename" value=""></td>
			</tr>
		
			<tr>
				<td> Company Name</td>
				<td><input type="text" name="companyname" value=""></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact" value=""></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add"></td>
			</tr>
		</table>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>