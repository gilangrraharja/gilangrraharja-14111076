@extends('template.index')
@section('content')
<div id="content">
	<form>
	<br>
		<table border="20" align="center" id="table">
			<tr>
				<td colspan="3" align="center">LOGIN<br><br></td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="user"></input><br></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" name="pass"></input></td>
			</tr>
			<tr>
				<td colspan="3" align="right"><input type="submit" value="Login"></input></td>
			</tr>
			<tr>
				<td colspan="3" align="center">Login Untuk Masuk ke Dalam Website</td>
			</tr>
		</table>		
	</form>
</div>
@stop