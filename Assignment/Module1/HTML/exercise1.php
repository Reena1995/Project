<!DOCTYPE html>
<html>
<head>
<style>
table{
  background-color: lightblue;
  texgt-align:center;
  cellspacing:"10px";
  cellpadding:"10px";
}
td
{
	padding:"10px";
}

.x
{
	background-color:lightgreen;
}
.y
{
	background-color:lightyellow;
	color:red;
}
.button
{
	padding: 8px 60px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/formdata" >
<table align="center" border="1" width="50%" height="70%">
<tr>
<th colspan="3" class="y"><h2>Username</h2></td>
</tr>
<tr>
<td><b>Enter your name</b></td>
<td colspan="2"><input type="text"  class="x" name="fname" required></td>

</tr>
<tr>
<td><b>Entern your pwd</b></td>
<td colspan="2"><input type="password" class="x" name="pwd" required></td>
</tr>
<tr>
<td><b>Enter Address</b></td>
<td colspan="2"><textarea class="x" name="add" required></textarea></td>
</tr>
<td><b>Select Game</b></td>
<td colspan="2">
<input type="checkbox" name="game[]" value="Hockey">Hockey<br>
<input type="checkbox" name="game[]" value="Football">Football<br>
<input type="checkbox" name="game[]" value="Badminton">Badminton<br>
<input type="checkbox" name="game[]" value="Cricket">Cricket<br>
<input type="checkbox" name="game[]" value="volleyball">Volleyball<br>
</td>
</tr>
<tr>
<td><b>Gender</b></td>
<td colspan="2">
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">FeMale<br>
</td>
</tr>
<tr>
<td><b>Select your age</b></td>
<td colspan="2"><select name="select age" class="x">
<option value="" class="x">-----select age-----</option>
<option value="1-20">1-20</option>
<option value="20-50">20-50</option>
<option value="50-70">50-70</option>
<option value="70-100">70-100</option>
</select>
</td>
</tr>
<tr>
<th colspan="3"><input type="file" class="x" name="file"></th>
</tr>
<tr>
<td colspan="3" style="text-align:center; ">
<input type="button" name="clickme" class="x button" value="clickme">
<input type="button" name="reset" class="x button" value="Reset">
<input type="button" name="submit" class="x button" value="SubmitForm">
</td>
</tr>
</table>
</form>
</body>
</html>
