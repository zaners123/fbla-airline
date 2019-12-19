<?php require "/var/www/php/headerNoSignin.php"; ?>
<title id="title">Air Deer</title>
<?php require "/var/www/bodyTop.php"; ?>
<h1>Air Deer</h1>
<h2>Make flying fun.</h2>

<datalist id="citylist"> </datalist>

<script>
	let cities = <?php require "cities.json"; ?>;
	for (let city of cities) {
        document.getElementById("citylist").innerHTML += "<option value=\""+city[0]+","+city[1]+"\"> </option>"
    }
</script>

<form method="post">
	<table align="center">
		<tbody>
			<tr>
				<td>
					<label for="one-way-checkbox">One Way: <input id="one-way-checkbox" type="checkbox"></label>
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td><label style="display:block;text-align: left">&emsp;From:<br><input type="text" list="citylist" name="flight_from" placeholder="From"></label></td>
				<td><label style="display:block;text-align: left">&emsp;To:<br><input type="text" list="citylist" name="flight_to" placeholder="To"></label></td>
			</tr>
			<tr>
				<td><label style="display:block;text-align: left">&emsp;Departure Date:<br><input type="date" name="flight_from" placeholder="From"></label></td>
			</tr>
		</tbody>
	</table>
</form>

<footer class="foot c"><span class="white"><a style="color: #fff" href="apply.php">Apply for a Job</a></span></footer>
</body>
</html>