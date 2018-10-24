<!DOCTYPE html>
<html>
<head>
	<title>Tsaqif Setyo Abdulhaqqi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section id="input-form">
	<h1 class="judul">Register</h1>
        <form method="GET" action="index.php">
            <div class="form">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="form">
                <label>Password</label>
                <input type="password" name="password">
			</div>
			<div class="drpdwn">
                <label>Level</label>
                <select>
                    <option>
                        Admin
                    </option>
                    <option>
                        User
                    </option>
                    <option>
                        Guest
                    </option>
                </select>
            </div>
			<div class="form">
                <label>Fullname</label>
                <input type="text" name="fullname">
			</div>
			<div>
                <input type="submit" name="submit" value="SUBMIT" class="bg-blue">
            </div>
        </form>
    </section>
</body>
</html>