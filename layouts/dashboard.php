<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Latihan Native</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">

	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>

</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/delitekno.png" class="brand">
			<div class="user"><?php echo $_SESSION['user_full_name']; ?></div>
		</header>

		<nav>
			<ul>
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<img class="icon" src="<?php echo AST; ?>/img/home.png" alt=""> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/categories">
						<img class="icon" src="<?php echo AST; ?>/img/categori.png" alt=""> Categories
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/posts">
						<img class="icon" src="<?php echo AST; ?>/img/post.png" alt=""> Post
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<img class="icon" src="<?php echo AST; ?>/img/users.png" alt=""> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/penduduk">
						<img class="icon" src="<?php echo AST; ?>/img/penduduk.png" alt=""> Penduduk
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<img class="icon" src="<?php echo AST; ?>/img/logout.png" alt=""> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023 - <?php echo date('Y'); ?>. Designed by Windi Cantik
		</footer>
		<style>
			/* Menempatkan footer di kiri bawah */
			footer {
				position: fixed;
				bottom: 0;
				left: 0;
				width: 100%;
				background-color: #f8f9fa;
				/* Warna background footer */
				text-align: left;
				/* Text rata kiri */
				padding: 10px 20px;
				/* Spasi antara teks dengan batas footer */
				box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
				/* Memberikan sedikit bayangan */
				font-size: 14px;
				color: #333;
			}

			/* Memberikan ruang di bagian bawah konten supaya tidak menutupi footer */
			main {
				padding-bottom: 50px;
				/* Sesuaikan dengan tinggi footer */
			}
		</style>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

</body>

</html>