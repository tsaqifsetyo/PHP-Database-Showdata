<?php
include('konek.php');
function query($query) {
    global $link;
    $hasil = mysqli_query($link, $query);
    $box = [];
    while ($data = mysqli_fetch_assoc($hasil)) {
        $box[] = $data;
    }
    return $box;
}
$user = query("SELECT * FROM user");
?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="styleidx.css">
	</head>
	<body>
	<nav>
        <ul>
            <li><a href="update.php">EDIT DATA</a></li>
            <li><a href="delete.php">HAPUS DATA</a></li>
            <li><a href="login.php">TAMBAH DATA</a></li>
        </ul>
    </nav> <br> <br>
		<table border="1px" cellpadding="10" cellspacing="0">
	 		<tr>
	 			<td bgcolor="#bc1010" align="center">ID</td>
	 			<td bgcolor="#bc1010" align="center">USERNAME</td>
	 			<td bgcolor="#bc1010" align="center">LEVEL</td>
	 			<td bgcolor="#bc1010" align="center">FULLNAME</td>
	 		</tr>
	 		<?php foreach($user as $user) : ?>
				 <tr>
				 	<td><?= $user["ID"] ?></td>
				 	<td><?= $user["USERNAME"] ?></td>
				 	<td><?= $user["LEVEL"] ?></td>
				 	<td><?= $user["FULLNAME"] ?></td>
				 </tr>
				<?php endforeach; ?>
	 	</table>
 	</body>
</html>