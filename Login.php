<!DOCTYPE html>
<html>
    <head>
	    <title>HALAMAN FORM LOGIN</title>
	    <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	    <div class="kontak_login">
		    <p class="tulisan login"> Silahkan Login</p>
			<form action="ceklogin.php" method="post" role="form">
			    <label>Username</label>
				<input type="text" name="Username" class="form_login" placeholder="Username" autocomplete="off">
				<label>Password</label>
				<input type="password" name="password" class="form_login" placeholder="password" autocomplete="off">
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
	</body>
</html>
<html>
    <head>
        <title>HALAMAN FORM REGISTER</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="kotak_login">
            <p class="tulisan_login">Register</p>
            <form action="cekregister.php" method="post" role="form">
                <label>Username</label>
                <input type="text" name="username" class="form_login" placeholder="Username" autocomplete="off">
                <label>Password</label>
                <input type="password" name="password" class="form_login" placeholder="Password" autocomplete="off">
                <label>Email</label>
                <input type="email" name="email" class="form_login" placeholder="Email" autocomplete="off">
                <input type="submit" class="tombol_login" value="Save">
            </form>
            <br/><hr/>
            <a href="login.php"><p style="text-align: center;">BACK</p>
        </div>
	</body>
</html>	

