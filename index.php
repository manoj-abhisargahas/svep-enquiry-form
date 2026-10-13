<!DOCTYPE html>
<html>
	<head>
		<title>SVCE Enquiry Form</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<meta name="viewport" content="user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1, width=device-width, height=device-height"/>
	</head>
	<body>
		<div id="main-body">
			<div class="form-wrapper">
				<form id="enquiry-form">
					<p id="form-tagline">Fill the form, we will get back to you soon.</p>
					<div id="name-input-field-box">
						<input id="name" name="name" type="text" placeholder="Name"/>
						<div id="error-indicate-name"></div>
					</div>
					<div id="phone-no-input-field-box">
						<input id="phone-no" name="phone-no" type="text" placeholder="Phone Number"/>
						<div id="error-indicate-phone-no"></div>
					</div>
					<div id="course-input-field-box">
						<h4 id="course-head-txt-engg">Select Engineering Course</h4>
						<div id="error-indicate-courses"></div>
						<div id="engg-ug-courses" class="courses-list-sec">
							<div class="chkbx-sec">
								<input type="checkbox" name="engg_ug_courses" id="e-ug-cse" value="e-ug-cse">
								<label for="e-ug-cse">Computer Science & Engineering</label>
							</div>
							<div class="chkbx-sec">
								<input type="checkbox" name="engg_ug_courses" id="e-ug-ece" value="e-ug-ece">
								<label for="e-ug-ece">Electronics & Communication Engineering</label>
							</div>
							<div class="chkbx-sec">
								<input type="checkbox" name="engg_ug_courses" id="e-ug-aids" value="e-ug-aids">
								<label for="e-ug-aids">Artificial Intelligence & Data Science</label>
							</div>
							<div class="chkbx-sec">
								<input type="checkbox" name="engg_ug_courses" id="e-ug-eee" value="e-ug-eee">
								<label for="e-ug-eee">Electrical & Electronic Engineering</label>
							</div>
						</div>
					</div>
					<div id="address-input-field-box">
						<input id="address" name="address" type="text" placeholder="Address (Optional)"/>
						<div id="error-indicate-address"></div>
					</div>
					<div id="submit-input-field-box">
						<button id="submit" name="submit" type="button" onclick="submitEnquiry()">Submit</button>
					</div>
				</form>
			</div>
		</div>
		<!--SHADE BODY FOR DIALOGS-->
		<div id="shade-body"></div>
	</body>
	<script src="js.js"></script>
</html>