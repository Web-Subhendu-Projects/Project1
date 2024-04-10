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
    <link rel="stylesheet" type="text/css" href="css/create_oneclick.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-3">
			<div class="angle_icon_text">
				<img src="img/dri/de.png" alt="" style="height: 100px; width: 130px; padding-top: 10px; margin-left: 10%;">
			</div>
		</div>
		<div class="col-2">
			<div class="angle_icon">
				<a href="create_img_update.php"><i class="fas fa-angle-double-left"></i></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="container">
			<div class="hader_text_title">
				<h1>What brings you to Dribble?</h1><br>
				<p>Select the option the best deseribe you. Don't worry,you can explore other options later</p>
			</div>
		</div>

		<div class="container">
		    <div class="row">
		        <div class="text_image_box">
		            <div class="card" style="width: 18rem;">
		                <img src="img/desing/f.png" class="card-img-top" alt="..." style="height: 80px; width: auto;">
		                <div class="card-body">
		                    <h5 class="card-title">I'm a Design Looking to Share My Work</h5>
		                    <p class="hidden-text">With over 7 million shorts from a vast community of designers Drildddle is the leading source for desing inspiration.</p>
		                    <div class="form-group circular-radio">
		                        <input type="radio" class="check-input" name="Radio" id="Radio1">
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="text_image_box">
		            <div class="card" style="width: 18rem;">
		                <img src="img/desing/b.png" class="card-img-top" alt="..." style="height: 100px; width: auto;">
		                <div class="card-body">
		                    <h5 class="card-title">I'm a Looking to hire a design </h5>
		                    <p class="hidden-text">With over 7 million shorts from a vast community of designers Drildddle is the leading source for desing inspiration.</p>
		                    <div class="form-group circular-radio">
		                        <input type="radio" class="check-input" name="Radio" id="Radio2">
		                    </div>
		                </div>
		            </div>
		        </div>

		        <div class="text_image_box">
		            <div class="card" style="width: 18rem;">
		                <img src="img/desing/d.png" class="card-img-top" alt="..." style="height: 100px; width: auto;">
		                <div class="card-body">
		                    <h5 class="card-title">I'm looking for desing inspiration</h5>
		                    <p class="hidden-text">With over 7 million shorts from a vast community of designers Drildddle is the leading source for desing inspiration.</p>
		                    <div class="form-group circular-radio">
		                        <input type="radio" class="check-input" name="Radio" id="Radio3">
		                    </div>
			                </div>
			            </div>
			        </div>
			        <div class="container">
			        	<div class="text_fenesh_text">
					    <h5 style="text-align: center;">Anything else? You can Selete Multiple</h5>
					</div>
			       </div>
			       <button type="submit" id="submit" class="submit-button">Finish</button>
			    </div>
			</div>
			<script>
			    // Get all radio buttons with the class 'check-input'
			    document.querySelectorAll('.check-input').forEach(function(input) {
			        // Add change event listener to each radio button
		        input.addEventListener('change', function() {
		            // Get the corresponding hidden text element
		            var hiddenText = this.parentElement.parentElement.querySelector('.hidden-text');
		            // Hide all other hidden text elements
		            document.querySelectorAll('.hidden-text').forEach(function(text) {
		                if (text !== hiddenText) {
		                    text.style.display = 'none';
		                }
		            });
		            // Toggle the visibility of the hidden text based on whether the radio button is checked
		            hiddenText.style.display = this.checked ? 'block' : 'none';
		        });
		    });
		</script>




	
</div>
<script src="js/script.js"></script>
</body>
</html>