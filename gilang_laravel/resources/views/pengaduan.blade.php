@extends('template.index')
@section('content')
<div id="content">
	<form>
		<table>
			<tr>
				<td valign="top">No. Identitas</td>
				<td valign="top">:</td>
				<td align="right"><input name="noiden"></input>
			</tr>
			<tr>
				<td valign="top">Nama Lengkap</td>
				<td valign="top">:</td>
				<td align="right"><input name="noiden"></input>
			</tr>
			<tr>
				<td valign="top">Alamat </td>
				<td valign="top">:</td>
				<td align="right"><input name="noiden"></input>
			</tr>
			<tr>
				<td valign="top">No. Telepon</td>
				<td valign="top">:</td>
				<td align="right"><input name="noiden"></input>
			</tr>
			<tr>
				<td valign="top">Pengaduan</td>
				<td valign="top">:</td>
				<td align="right"><input name="noiden"></input>
				<td colspan="3" align="right"><input type="submit" value="OK"></input></td>
				<td colspan="3" align="right"><input type="submit" value="BATAL"></input></td>
			</tr>
		</table>
	</form>
	<hr>
	Semua Pengaduan:<br>
	<table border="2">
		<tr>
			<td align="center" width="25">No</td>
			<td align="center" width="100">No. Identitas</td>
			<td align="center" width="185">Nama Lengkap</td>
			<td align="center" width="160">Alamat</td>
			<td align="center" width="100">No. Telepon</td>
			<td align="center" width="300">Pengaduan</td>
			<td align="center" width="200" colspan="2">Aksi</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td width="70">Edit</td>
			<td width="75">Hapus</td>
		</tr>
	</table>
</div>
@stop