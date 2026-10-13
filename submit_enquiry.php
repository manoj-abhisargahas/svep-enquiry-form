<?php
	include("operations.php");
	include("db_server.php");
	
	//Creating Empty Response JSON Array
	set_empty_response();
	
	//Connecting to db
	connectDb();
	
	$name = trim($_POST['name']??"");
	$phone_no = trim($_POST['phone-no']??"");
	$address = trim($_POST['address']??"");
	$courses = $_POST['courses']??"";
	
	//Name Validation.
	if(isValueEmpty($name))
		push_error_response("102");
	else if(!isNameValid($name))
		push_error_response("103");
		
	//Phone-No Validation.
	if(isValueEmpty($phone_no))
		push_error_response("phone_no-empty");
	else if(!isNameValid($name))
		push_error_response("phone_no-invalid");
	
	//Courses Validation
	if(isValueEmpty($courses)) {
		push_error_response("courses-empty");
	}
	
	if(count($GLOBALS["response"]["errors"])==0) {
		insertEnquiryData($name, $phone_no, $address, $courses);
		if($GLOBALS["is_enquiry_inserted"]) {
			set_success_response("true");
		}
		else {
			push_error_response("data-not-added");
		}
	}
	
	//Print Response in JSON Code.
	print_response();
?>