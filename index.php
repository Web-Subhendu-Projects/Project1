<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Internship_1</title>
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/fontawesome.min.css" integrity="sha512-IejtbqJqhyw0pAfIGrqsO/+9McIyWp3zwz9Y0oKOpsSo9XHOCWwPcS6ezTpdDG5ZIkmMdvkkd1eq7C56fRqYxg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>

	<header class="container-fluid">
    <div class="row">
        <div class="col-md-1">
                <div class="home_item_image">
                    <img src="img/dri/de.png" alt="" style="width: 120%;">
                </div>
            </div>


        <div class="col-md-6">
                <div class="home_item_list">
                    <ul>
                        <a href="#">Inspiration</a>                        
                        <a href="#">Find Work</a></li>
                        <a href="#">Learn Design</a>
                        <a href="#">Go Pro</a>
                        <a href="#">Hire Designs</a>
                    </ul>
                </div>
            </div>

        <div class="col-md-3">
		    <div class="home_item_search">
		       <form id="searchForm" action="https://www.google.com/search" method="GET" target="_blank">
				    <input type="text" name="q" placeholder="Search..." required>
				    <button type="submit" id="submit"><i class="fa fa-search"></i></button>
				</form>
		    </div>
		    <div class="bag_icon">
		    	<span><i class="fas fa-shopping-bag"></i></span>
		    </div>
		    <div class="close_icon">
		    	<i class="fas fa-times"></i>
		    </div>
		</div>

		<script>
			document.getElementById('submit').addEventListener('click', function() {
			    document.getElementById('searchForm').submit();
			});
		</script>

      <div class="col-md-2">
		    <div class="rounded-image-box_button">
		        <div id="imageView"></div>
		        <div class="file_uplode">
		            <input type="file" id="fileInput" style="display: none;" onchange="displayImage(event)">
		            <label for="fileInput" class="custom-file-upload" onclick="uploadFile()"><a href="create_img_update.php" style="color: white; text-decoration: none;">Uplode</a></label>
		        </div>
		        <div class="logout_icon">
				    <a href="logout.php" id="logoutButton">
				        <i class="fas fa-sign-out-alt"></i>
				    </a>
				</div>  
		    </div>
		</div>
		<script>
			document.getElementById('logoutButton').addEventListener('click', function() {
			    alert('Logout clicked!');
			  
			});

		</script>

		<!-- JavaScript code -->
		<script>
			function displayImage(event) {
			    var image = document.getElementById('imageView');
			    image.innerHTML = ''; // Clear previous image
			    var file = event.target.files[0];
			    
			    if (file) {
			        var reader = new FileReader();
			        reader.onload = function(e) {
			            var imgElement = document.createElement('img');
			            imgElement.src = e.target.result;
			            image.appendChild(imgElement);
			        }
			        reader.readAsDataURL(file);
			    }
			}

		</script>
</header>


        <div class="scroll_image_slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/scrooll/f4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/scrooll/f2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/scrooll/f3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>

        <script>
		    // Function to trigger the next slide
		    function nextSlide() {
		        $('#carouselExampleFade').carousel('next');
		    }

		    // Trigger the next slide every 3 seconds
		    setInterval(nextSlide, 5000);
		</script><br><br>


		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="medile_item_language">
						<h1>Discover the world's top designers & creatives</h1>
					</div>
					<p>Dribbble is an online service for graphic designers, artists, web designers, illustrators, and 3D visualizers. So basically, it is some sort of professional social media for creators. Apart from that, Dribbble is a great job platform through which you can hire designers or be hired as a designer. The service also provides a safe environment for both designers and customers.</p>
				</div>
			</div>
		</div><br><br>

		<div class="container w-100">
			<div class="row">
				<div class="col-md-6">
					<div class="image_contrian_left">
						<img src="img/gif/g1.png" class="d-block w-100" alt="...">
					</div>
				</div>
				<div class="col-md-6">
					<div class="image_contrian_right">
						<img src="img/gif/g2.gif" class="d-block w-100" alt="...">
					</div>
				</div>
			</div>
				</div><br><hr><br>

				<!--FOOTER PART START -->
    
    <footer id="footer-part">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about">
                        <div class="logo">
                            <a href="#"><img src="img/dri/de.png" class="d-block w-100" alt=""></a>
                        </div>

                        <p>Dribbble is the world's leading community for creatives to share, grow and get hired.</p>
                        <div class="social-links">
						   <a href="https://www.facebook.com/" class="fab fa-facebook"></a>
						    <a href="https://dribbble.com/"  class="fab fa-dribbble"></a>
						    <a href="https://twitter.com/" class="fab fa-twitter"></a>
						    <a href="https://www.instagram.com/"  class="fab fa-instagram"></a>
						    <a href="https://www.pinterest.com/" class="fab fa-pinterest"></a>
						</div>

                    </div> 
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <div class="footer-title">
                            <h6>For Designers</h6>
                        </div>

                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Go Pro!</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Explore design work</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>design blog</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Overtime podcast</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Playoffs</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Weekly Warm-Up</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Refer a Friend</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Code and conduct</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Deibble Merketplace </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Creativ Market</a></li>
                           
                        </ul>
                    </div> 
                </div>
                 <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <div class="footer-title">
                            <h6>Hire Designers</h6>
                        </div>

                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Post a job opening</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Post a job freelancer project</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Search for Designers </a></li>
                        </ul>
                        <div class="footer-title">
                            <h6>Brands</h6>
                        </div>
                        <ul>
                            
                            <li><a href="#"><i class="fa fa-angle-right"></i>Advertise with us</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Contact</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Fontspring </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Font Squirrel </a></li>
                        </ul>
                    </div> 
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <div class="footer-title">
                            <h6>Company</h6>
                        </div>

                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>About</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Careers</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Media Kit </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>API </a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Terms of service </a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Privacy policy </a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Cookie policy </a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Tag </a></li>
                             <li><a href="#"><i class="fa fa-angle-right"></i>Place</a></li>
                        </ul>
                    </div> 
                </div>


                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-link">
                        <div class="footer-title">
                            <h6>Support/Design Resources</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Freelancing</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Privacy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Policy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Support</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Documentation</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design Hiring</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design Portfolio</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design Education</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design Industry</a></li>
                        </ul>
                    </div> 
                </div>
        </div> 
    </div>   
</footer>
<div class="last_part">
                	<div class="col-12">
                		<div class="top_button">
                			<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
                		</div>
                	</div>
                </div>
                <script>
				   let mybutton = document.getElementById("myBtn");
						window.addEventListener("scroll", scrollFunction);
						function scrollFunction() {
						    let scrollPosition = window.scrollY || document.documentElement.scrollTop;
						    if (scrollPosition > 20) {
						        mybutton.style.display = "block";
						    } else {
						        mybutton.style.display = "none";
						    }
						}
						function topFunction() {
						    window.scrollTo({
						        top: 0,
						        behavior: "smooth" 
						    });
						}

				</script>



		
	
        


<script src="script.js"></script>
</body>
</html>