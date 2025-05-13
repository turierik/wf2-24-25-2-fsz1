<?php
	$places = [
		'Írottkő',
		'Sárvár',
		'Sümeg',
		'Keszthely',
		'Tapolca',
		'Badacsonytördemic',
		'Nagyvázsony',
		'Városlőd',
		'Zirc',
		'Bodajk',
		'Szárliget',
		'Dorog',
		'Piliscsaba',
		'Hűvösvölgy',
		'Rozália téglagyár',
		'Dobogókő',
		'Visegrád',
		'Nagymaros',
		'Nógrád',
		'Becske',
		'Mátraverebély',
		'Mátraháza',
		'Sirok',
		'Szarvaskő',
		'Putnok',
		'Aggtelek',
		'Bódvaszilas',
		'Boldogkőváralja',
		'Sátoraljaújhely',
		'Hollóháza'
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Task 2</title>
</head>
<body>
    <h1>Task 2: Trip registration</h1>
    <form action="index.php" method="get" novalidate>
        <label for="i1">Track name:</label> <input type="text" name="trackname" id="i1"> <br>
        <label for="i2">From:</label> <input type="text" name="from" id="i2"> <br>
		<label for="i3">To:</label> <input type="text" name="to" id="i3"> <br>
        <label for="i4">Distance:</label> <input type="text" name="distance" id="i4"> <br>
		<label for="i5">Time:</label> <input type="text" name="time" id="i5"> <br>
		<button type="submit">Register</button>
    </form>

<!--
    <div id="success">
        <h2>Trip data saved!</h2>
	</div>
-->

    <h2>Hyperlinks for testing</h2>
    <a href="index.php?trackname=&from=&to=&distance=&time=">trackname=&from=&to=&distance=&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=&to=&distance=&time=">trackname=10.sz.+túra&from=&to=&distance=&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Budapest&to=&distance=&time=">trackname=10.sz.+túra&from=Budapest&to=&distance=&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=&distance=&time=">trackname=10.sz.+túra&from=Sárvár&to=&distance=&time=</a><br>
	<a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Sárvár&distance=&time=">trackname=10.sz.+túra&from=Sárvár&to=Sárvár&distance=&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=&time=">trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=ezer&time=">trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=ezer&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=">trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=10">trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=10</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=10%3A60">trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=10%3A60</a><br>
    <a href="index.php?trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=4%3A10"><span style="color: green">Correct input: </span>trackname=10.sz.+túra&from=Sárvár&to=Dobogókő&distance=1000&time=4%3A10</a><br>

    </body>
</html>
