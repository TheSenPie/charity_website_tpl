<?php
	require_once 'header.php';
	echo <<<_END
	<div id="carousel" class="carousel slide" data-ride="carousel">
	  	<div class="carousel-inner">
	    	<div class="carousel-item active">
	        	<img src="slides/default_1.jpg" class="d-block w-100" alt="1">
	    	</div>
	    	<div class="carousel-item">
	      		<img src="slides/default_2.jpg" class="d-block w-100" alt="2">
	    	</div>
	    	<div class="carousel-item">
	      		<img src="slides/default_3.jpg" class="d-block w-100" alt="3">
	    	</div>
	  	</div>
	  	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div id="about">
		<div class="container">
			<div class="row">
				<h2 class="col-md-12">About Us</h2>
				<hr>
				<p class="col-md-12">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
	</div>
	<div id="support">
		<div class="container">
			<div class="row">
				<h2 class="col-md-6">Support us! <br>
			We need your help to realise our future chairty programms.</h2>
				<div class="col-md-6">
					<button type="button" class="btn btn-outline-primary btn-lg">Support</button>
				</div>
				<div class="col-md-12">
					<table class="table">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">First</th>
					      <th scope="col">Last</th>
					      <th scope="col">Donated</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
					      <td>Mark</td>
					      <td>Otto</td>
					      <td>$ 45,000.00</td>
					    </tr>
					    <tr>
					      <th scope="row">2</th>
					      <td>Jacob</td>
					      <td>Thornton</td>
					      <td> $ 30.00</td>
					    </tr>
					    <tr>
					      <th scope="row">3</th>
					      <td>Larry</td>
					      <td>the Bird</td>
					      <td>$ 10,000.00</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div id="contact">
		<div class="container">
			<div class="row">
				<form class="col-md-12">
					<div class="row">
					  	<div class="form-group col-md-6">
					    	<label for="firstname">Forname</label>
					    	<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter you firstname" id="firstname" name="firstname" maxlength="32">
					  	</div>
					  	<div class="form-group col-md-6">
					    	<label for="lastname">Lastname</label>
					    	<input type="text" class="form-control" id="lastname" placeholder="Enter your lastname" name="lastname" maxlength="32">
					  	</div>
					  	<div class="form-group col-md-12">
					  		<label for="email">E-mail</label>
					  		<input type="email" class="form-control" id="email" placeholder="Enter your e-mail" name="email" maxlength="32">
					  	</div>
					  	<div class="form-group col-md-12">
						    <label for="message">Example textarea</label>
						    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Some text..."></textarea>
					  	</div>
					  	<div class="col-md-12">
						  	<button type="submit" class="w-100 btn btn-primary">Submit</button>
					  	</div>
				  	</div>
				</form>
			</div>
		</div>
	</div>
_END;
?>
	<script type="text/javascript" src="jquery/jquery-3.3.1.min.js" ></script>
    <script type="text/javascript" src="popper/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
	</body>
</html>
