<?php	
	$title='Gallery'; 
	include'header.php';
?>
	<head>
		<style type="text/css">
			/*body{
				background-color: black;
			}*/
			.img-fluid{
				margin-bottom: 20px;
				margin-right: 20px;
				height: 250px;
				width: 350px;
				border: 3px solid white;
				border-radius: 10px;
			}
			.a{
				text-align: center;
				position: absolute;
				top:20%;
				left: 50%;
				transform: translate(-50%,-50%);
			}
			.a span{
				text-transform: uppercase;
				
			}
			.text1{
				color: black;
				font-size: 30px;
				font-weight: 400;
				letter-spacing: 5px;
				margin-bottom: 10px;
				position: relative;
				animation: text 4s 2;
			}
			.gallery_img{
				margin-top:20%;
			}
			@keyframes text{
				0%{
					color:black;
				}
				30%{
					letter-spacing: 10px;
				}
				85%{
					color: rgb(288, 34, 146);
					letter-spacing: 5px;
				}
			}
		</style>
	</head>
	<div class="">
	    <div class="a">
	    	<span class="text1 bg">Welcome in gallery</span>
	    </div>
		<div class="container">
			<div class="row gallery_img">		
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel7.jpg" data-lightbox="image-1" data-title="My caption">
						<img src="image/travel7.jpg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel1.jpg" data-lightbox="image-2" data-title="My caption">
						<img src="image/travel1.jpg" class="img-fluid">
					</a>
				</div>
			
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel3.jpg" data-lightbox="image-3" data-title="My caption">
						<img src="image/travel3.jpg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel2.jpeg" data-lightbox="image-4" data-title="My caption">
						<img src="image/travel2.jpeg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel4.jpg" data-lightbox="image-5" data-title="My caption">
						<img src="image/travel4.jpg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\img6.webp" data-lightbox="image-6" data-title="My caption">
						<img src="image/img6.webp" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel8.jpg" data-lightbox="image-7" data-title="My caption">
						<img src="image/travel8.jpg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\travel9.jpg" data-lightbox="image-8" data-title="My caption">
						<img src="image/travel9.jpg" class="img-fluid">
					</a>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<a href="image\img9.jpg" data-lightbox="image-9" data-title="My caption">
						<img src="image/img9.jpg" class="img-fluid">
					</a>
				</div>
			</div>
		</div>
	</div>
<?php include'footer.php'; ?>

   