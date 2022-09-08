<html>
<head>
<style>
body
{
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	
	
}
table
{
	background-color:lightblue;
}
td
{
	padding:15px 50px;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/formdata">
<fieldset align="center"  width=50% style="background-color:lightblue">
<table align="center" border="0px">

<legend width="50%" ><h2>Userform</h2></legend>
<tr>
<td><li>First name</li></td>
<td><input type="text" name="fanme"></td> 
</tr>
<tr>
<td><li>Password</li></td>
<td><input type="password" name="pwd"></td>
</tr>
<tr>
<td><li>Gender</li></td>
<td><input type="radio" name="male">Male
<input type="radio" name="Female">FeMale
</td>
</tr>
<tr>
<td><li>Address</li></td>
<td><textarea name="area"></textarea></td>
</tr>
<tr>
<td><li>D.O.B</id></td>
<td><input type="date"></td>
</tr>
<tr>
<td><li>D.O.B</li></td>
<td>
<select>
<option value="jan">january</option>
<option value="feb">February</option>
<option value="march">March</option>
<option value="april">April</option>
<option value="March">March</option>
</select>
<select>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
</select>
<select>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
</select>
</td>
</tr>
<tr>
<td><li>Select Games</li></td>
<td>
<input type="checkbox" name="game[]" value="hockey">Hockey
<input type="checkbox" name="game[]" value="football">Football
<input type="checkbox" name="game[]" value="cricket">Cricket
<input type="checkbox" name="game[]" value="Volleyball">Volleyball

</td>
</tr>
<tr>
<td><li>Marital Status</li></td>
<td><input type="radio" name="married">Married
<input type="radio" name="unmarried">Unmarried</td>
</tr>
<tr>
<td></td>
<td><button>Submit</button>
<button>Reset</button></td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="a[]" value="yes">I accept this agrement</td>

</table>

</form>
</fieldset>
</body>
<html>
