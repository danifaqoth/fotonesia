<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>FOTONESIA</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >

	<link rel="stylesheet" href="css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

  </head>
<body>
    <!-- Header-->
  	<header>  
	    <nav class="navbar navbar-default nav-header">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand logo" href="#"><img src="image/logo/fotonesia.png" alt="logo"></a>		
		    </div>

		    <div class="collapse navbar-collapse" id="main-navbar">
		    	<form class="navbar-form navbar-left main-form">
			        <div class="input-group input-search">
							<input type="text" class="form-control search" placeholder="Search for...">
					      	<span class="input-group-btn btn-search">
					        	<button class="btn btn-default search" type="button">
					        		<div class="search">
			      						<i class="fa fa-search"></i>
			      					</div>
					       		</button>
						   	</span>    
					</div>
			    </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Menjadi Vendor</a></li>
		        <li><a href="#">Daftar / Masuk</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
	</header>
	<!-- End Header -->

	<!-- Carousel-->
	<section>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox" style="position: relative;">
		    	<div class="item active">
		      		<img src="image/slide1.jpg" alt="...">
			    </div>
			    <div class="item">
			    	<img src="image/slide2.jpg" alt="...">		
			    </div>
			    <div class="item">
			    	<img src="image/slide3.jpg" alt="...">
			    </div>
	
				<div class="search-wrapper"> 			
				    <div class="container">		
				    	<form action="">
				    		<div class="heading ">
				    			<h3 class="text-center">SEARCH YOUR PHOTOGRAPHER</h3>
				    		</div>
				    		<div class="row">
				    			<div class="col-md-3 col-md-offset-1">
				    				<div class="form-group">
				    					<select class="form-control">
				    						<option>Semua Lokasi</option>
				    						<option>2</option>
				    						<option>3</option>
				    						<option>4</option>
				    						<option>5</option>
				    					</select>
				    				</div>
				    			</div>
				    			<div class="col-md-3">
				    				<div class="form-group">
				    					<select class="form-control">
				    						<option>Kategori</option>
				    						<option>2</option>
				    						<option>3</option>
				    						<option>4</option>
				    						<option>5</option>
				    					</select>
				    				</div>
				    			</div>
				    			<div class="col-md-3">
				    				<div class="form-group">
				    					<select class="form-control">
				    						<option>Kisaran Harga</option>
				    						<option>2</option>
				    						<option>3</option>
				    						<option>4</option>
				    						<option>5</option>
				    					</select>
				    				</div>
				    			</div>	
				    			<div class="col-md-1">
				    				<button type="submit" class="btn btn-block btn-primary">Cari</button>
				    			</div>																
				    		</div>
				    	</form>
				    </div>
				</div>    
			</div>
		</div>
	</section>
	<!-- End Carousel -->

	<!-- Kategori Foto  -->
	<section>
		<div class="container">
			<h3 class="text-center">Category Photography</h3>
			<div class="row">
				<div class="col-md-4"><img src="image/2.jpg" alt="" class="img-rounded foto-category"></div>
				<div class="col-md-4"><img src="image/3.jpg" alt="" class="img-rounded foto-category"></div>
				<div class="col-md-4"><img src="image/4.jpg" alt="" class="img-rounded foto-category"></div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-4"><img src="image/5.jpg" alt="" class="img-rounded foto-category"></div>
				<div class="col-md-4"><img src="image/6.jpg" alt="" class="img-rounded foto-category"></div>
				<div class="col-md-4"><img src="image/7.jpg" alt="" class="img-rounded foto-category"></div>
			</div>
		</div>
	</section>
	<!-- End Kategori -->
	
	<div style="margin: 50px 0"></div>

	<!-- Testomoni -->
	<section>
		<div class="container-fluid testimonial">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
	                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
					<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
					  <!-- Carousel indicators -->
	                  <ol class="carousel-indicators">
					    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
	                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
	                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
	                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
					  </ol>
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					    <div class="item">
	                        <div class="profile-circle" style="background-image: url('image/2.jpg');"></div>
					    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>	
					    </div>
					    <div class="item">
	                        <div class="profile-circle" style="background-image: url('image/3.jpg');"></div>
					    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>
					    </div>
					    <div class="active item">
	                        <div class="profile-circle" style="background-image: url('image/4.jpg');"></div>
					    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>
					    </div>
	                    <div class="item">
	                        <div class="profile-circle" style="background-image: url('image/5.jpg');"></div>
	    			    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>
					    </div>
	                    <div class="item">
	                        <div class="profile-circle" style="background-image: url('image/6.jpg');"></div>
	    			    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>
					    </div>
	                    <div class="item">
	                        <div class="profile-circle" style="background-image: url('image/7.jpg');"></div>
	    			    	<blockquote class="block">
					    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
					    		<br>
					    		<h5 style="margin: 0"><em>"Alhamdani & Eva Angraini"</em></h5>
					    	</blockquote>
					    </div>
					  </div>
					</div>
				</div>							
			</div>
		</div>
	</section>
	<!-- End Testimoni -->

	<div style="margin: 50px 0"></div>

	<!-- Foto Favorit -->
	<section>
		<div class="container-fluid">
		<h3 class="text-center">Photo Popular</h3>
			<div class="row">
				<div class="col-md-3 col-fav"><img src="image/2.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/3.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/4.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/5.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/6.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/7.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/2.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/3.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/4.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/5.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/6.jpg" alt="" class="favorit"></div>
				<div class="col-md-3 col-fav"><img src="image/7.jpg" alt="" class="favorit"></div>
			</div>
		</div>	
	</section>
	<!-- End Foto Favorit -->
	<br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>