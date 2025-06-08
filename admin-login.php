<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<!-- Bootstrap CSS CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		xintegrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Google Fonts - Inter -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<style>
		/* Define custom CSS variables for the color palette */
		:root {
			--primary-color: #6D9773;
			/* Muted Green */
			--dark-accent: #0C3B2E;
			/* Dark Forest Green */
			--button-color: #BB8A52;
			/* Earthy Brown (not used directly on buttons in this theme) */
			--highlight-color: #FFBA00;
			/* Vibrant Yellow */
			--text-color: #333;
			--background-light: #f8f8f8;
			--container-bg: #fff;
			--border-color: #e0e0e0;
		}

		/* Apply Inter font globally and set body background */
		body {
			font-family: 'Inter', sans-serif;
			background-color: var(--background-light);
			color: var(--text-color);
		}

		.w-450 {
			width: 100%;
			max-width: 450px;
			/* Limit max width for larger screens */
		}

		/* Custom button styling (Login button will be Vibrant Yellow) */
		.btn-custom-primary {
			background-color: var(--highlight-color);
			/* Vibrant Yellow */
			border-color: var(--highlight-color);
			color: var(--dark-accent);
			/* Dark text for contrast on yellow */
			transition: background-color 0.3s ease, border-color 0.3s ease;
			border-radius: 0.5rem;
			padding: 0.75rem 1.5rem;
			font-weight: 600;
		}

		.btn-custom-primary:hover {
			background-color: #e6a700;
			/* Slightly darker yellow on hover */
			border-color: #e6a700;
			color: var(--dark-accent);
		}

		/* Custom link styling */
		.link-custom-secondary {
			color: var(--primary-color);
			/* Muted Green */
			text-decoration: none;
			transition: color 0.3s ease;
		}

		.link-custom-secondary:hover {
			color: var(--dark-accent);
			/* Dark Forest Green on hover */
		}

		/* Form control focus effect */
		.form-control:focus {
			border-color: var(--vibrant-yellow);
			/* Vibrant Yellow border on focus */
			box-shadow: 0 0 0 0.25rem rgba(255, 186, 0, 0.25);
			/* Subtle shadow on focus */
		}

		/* Heading color */
		.display-4,
		.fs-1 {
			color: var(--dark-accent);
			/* Dark Forest Green for heading */
		}

		/* Logo styling */
		.logo-section {
			text-align: center;
			margin-bottom: 2rem;
			/* Space below the logo */
		}

		.logo-section img {
			max-width: 120px;
			/* Adjust logo size */
			height: auto;
			border-radius: 0.5rem;
			/* Rounded corners for the logo */
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
			/* Subtle shadow for the logo */
		}
	</style>
</head>

<body>
	<div class="d-flex justify-content-center align-items-center vh-100 p-3">

		<form class="shadow w-450 p-4 rounded-xl" action="admin/admin-login.php" method="post"
			style="background-color: var(--container-bg); border: 1px solid var(--border-color);">

			<div class="logo-section">
				<!-- Placeholder logo image for Admin Login page -->
				<img src="img/logo_wobg.png" alt="Admin Logo" class="img-fluid">
			</div>

			<h4 class="display-4 fs-1 text-center mb-2">ADMIN LOGIN</h4>
			<p class="text-center text-muted mb-5">Only for Administrator</p>

			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo htmlspecialchars($_GET['error']); ?>
				</div>
			<?php } ?>

			<div class="mb-4">
				<label for="username" class="form-label">User name</label>
				<input type="text" class="form-control" id="username" name="uname"
					value="<?php echo (isset($_GET['uname'])) ? htmlspecialchars($_GET['uname']) : "" ?>"
					placeholder="Enter admin username">
			</div>

			<div class="mb-5">
				<label for="password" class="form-label">Password</label>
				<input type="password" class="form-control" id="password" name="pass"
					placeholder="Enter admin password">
			</div>

			<div class="d-flex flex-column flex-sm-row justify-content-between align-items-center">
				<button type="submit" class="btn btn-custom-primary mb-3 mb-sm-0 w-100 w-sm-auto">Login</button>
				<a href="login.php" class="link-custom-secondary">User Login</a>
			</div>
		</form>
	</div>

	<!-- Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		xintegrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
</body>

</html>