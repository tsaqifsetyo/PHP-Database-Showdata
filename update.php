<!DOCTYPE html>
<html>
<head>
	<title>Tsaqif Setyo Abdulhaqqi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="input-form">
	<form action="edit.php" method="GET">
	<h1 class="judul">Edit Data</h1>
        <form method="GET" action="index.php">
            <div class="form">
                <label>ID</label>
                <input type="text" name="id">
            </div>
            <div class="form">
                <label>USERNAME</label>
                <input type="text" name="username">
            </div>
            <div class="form">
                <label>PASSWORD</label>
                <input type="password" name="password">
			</div>
			<div class="form">
                <label>LEVEL</label>
                <input type="text" name="level">
            </div>
			<div class="form">
                <label>FULLNAME</label>
                <input type="text" name="fullname">
			</div>
			<div>
                <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>
</body>
</html>
