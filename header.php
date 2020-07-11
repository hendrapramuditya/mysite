
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="font\awesome\css\font-awesome.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" href="css\style.css">

    <title> <?php echo $title ?></title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="image/logo1.jpg" width="60px;" alt="logo"/></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse "  id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item <?php if($title == 'Home') { echo 'active'; } ?>">
				<a class="nav-link" href="index.php"><i class="fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item <?php if($title == 'About Us') { echo 'active'; } ?>">
				<a class="nav-link" href="about.php">About Us</a>
			  </li>
			  <li class="nav-item dropdown <?php if($title == 'Service') { echo 'active'; } ?>">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear spinner fa-spin"></i>
				  Service
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="service.php?id=<?php echo '1'; ?>">Road Trip</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '2'; ?>">Air way</a>
				  <a class="dropdown-item" href="service.php?id=<?php echo '3'; ?>">Sea</a>
				</div>
			  </li>
			  <li class="nav-item <?php if($title == 'Gallery') { echo 'active'; } ?>">
				<a class="nav-link " href="gallery.php" tabindex="-1" aria-disabled="true"><i class="far fa-images"></i> Gallery</a>
			  </li>
			  <li class="nav-item <?php if($title == 'Contact US') { echo 'active'; } ?>">
				<a class="nav-link " href="ticket.php" tabindex="-1" aria-disabled="true">Ticket</a>
			  </li>
			  <li class="nav-item <?php if($title == 'Login') { echo 'active'; } ?>">
				<a class="nav-link " href="login1.php" tabindex="-1" aria-disabled="true"></a>
			  </li>
			</ul>
			
		  </div>
	  </div><!-- end container-->
	</nav>