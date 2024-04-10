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
    <link rel="stylesheet" type="text/css" href="css/create_img.css">
</head>
<body>

<div class="container-fluid">
	<div class="col-6">
		<div class="hader_title">
			<img src="img/dri/de.png" alt="" style="height: 100px; width: 130px; padding-top: 10px; margin-left: 10%;">
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="col-12">
				<div class="hader_title_file">
					<h1>Welcome Let's Create Your Profile</h1>
					<p>Let Others Get To Know you batter! You Can Do These later</p>
			   </div>
			   <div class="hader_title_file_name">
			   	 <h4>Add an avater</h4>
			   </div>
			  <div class="container">
			    <div class="row">
			        <div class="col-md-5">
			            <div class="rounded-image-box" style="float: right;">
			                <img src="your-image-url.jpg" alt="" id="uploadedImage">
			                <div class="icon">
			                    <i class="fas fa-camera"></i>
			                </div>
			            </div>
			        </div>
			        <div class="col-md-5">
			            <div class="rounded-image-box_button" style="padding-top: 20px;">
			               <label for="fileInput" class="custom-file-upload">Choose Image File</label>
                           <input type="file" id="fileInput" style="display: none;"><br><br>
                           <i class="fas fa-angle-right">  Or choose one of our defaults</i>


			                <div id="imageView"></div>
			                <script>
			                    document.getElementById('fileInput').addEventListener('change', function(event) {
			                        var file = event.target.files[0];
			                        var reader = new FileReader();
			                        reader.onload = function(e) {
			                            var uploadedImage = document.getElementById('uploadedImage');
			                            uploadedImage.src = e.target.result;
			                        };
			                        reader.readAsDataURL(file);
			                    });
			                </script>

			            </div>
			        </div>
			        <div class="container">
			        	<div class="col-12">
			        		<div class="add_locatio">
			        			<h1>Add Your Location</h1>
			        		</div>
			        		<div class="add_locatio_title">
			        		<p>Enter Your Location</p>
			        		<input type="text" id="location" class="underline-input">
			        	</div>
			        	<div class="button-container"><br>
						    <button class="button"><span><a href="create_oneclick.php">Next</a></span></button>
						</div>
			        </div>
			    </div>
			</div>

        </div>
    </div>
</div>









</body>
</html>