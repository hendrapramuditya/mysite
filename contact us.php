<?php 
	$title='Contact US';
	include'header.php'; 
?>
 <head>
 </head>
  <body>
	<div class="container mt-5" style="background-color:";>
		<div class="row">
			<div class="col-md-4 ml-auto mt-5">
				
					<h1 style= "font-family:  cursive; " class="text-center head">Contact us</h1><br/>
					<span style="text-align:center";>
					<p style= "font-family: 'Merienda', cursive; font-size:20px";>A 307,Maruti Palace,<br/>
					Dandi Road,<br>
					
					Vejalpore, Navsari, Gujarat 396450<br>
					082389 39277<br>
					exvitech9@gmail.com
					</p><br>
				
				  <object style="border:0; height: 280px; width: 100%;" data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.7654957666828!2d72.90559531445285!3d20.921752296799696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0f79ec90f2299%3A0xe78b1faefd7eb039!2sExtra%20vision%20tech%20institute!5e0!3m2!1sen!2sin!4v1575960555151!5m2!1sen!2sin"></object>
			</div>
			<div class="col-md-6 ml-auto mt-5">
				<p style= "font-family: 'Merienda', cursive; font-size:15px";>Extra Vision Tech Institute - Web Development Training. Internship.<br>
				Live IT Project Training <br> Learn C, C++. PHP 7, Framework , CodeIgniter, Wordpress, Java, HTML 5, CSS 3 | IT, Software & Technology Company</p>
				
				<form>
				  <div class="form-row">
						<div class="col-md-6 mb-3">
						  <label for="validationDefault01">First name</label>
						  <input type="text" class="form-control" id="validationDefault01" placeholder="First Name" required>
						</div>
						<div class="col-md-6 mb-3">
						  <label for="validationDefault02">Last name</label>
						  <input type="text" class="form-control" id="validationDefault02" placeholder="Last Name" required>
						</div>
						<div class="col-md-12">
						<label for="email1">Email</label>
						<input type="text" placeholder="Email" class="form-control" name="email" required="" data-error="Please enter your email" id="email1">
						</div>
						<div class="col-md-12">
							<p>Message</p>
							<textarea class="form-control" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required=""></textarea>
						</div>
						<div class="col-md-12">
							 <div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Check me out</label>
							  </div>
							  <button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
				
<?php include'footer.php';?>

   