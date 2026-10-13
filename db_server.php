<?php
	$mysqli = "";
	
	function connectDb() {
		try {
			$host = getenv('MYSQL_HOST') ?: '127.0.0.1';
			$port = getenv('MYSQLPORT') ?: '3306';
			$user = getenv('MYSQLUSER') ?: 'root';
			$pword = getenv('MYSQL_PASSWORD') ?: '';
			$db = getenv('MYSQL_DATABASE') ?: 'svce_enquiry_db';

			$GLOBALS["mysqli"] = new mysqli($host, $user, $pword, $db, $port);
		
			if(!($GLOBALS["mysqli"]->connect_errno==0)) {
				//ERROR: Database Connection Error.
				push_error_response("db-error");
				closeDb();
				print_response();
				exit();
			}

			// Set character set to prevent encoding issues with text
			$GLOBALS["mysqli"]->set_charset("utf8mb4");
		}
		catch(Exception  $e) {
			push_error_response("db-error");
			print_response();
		}
	}
	
	function closeDb() {
		$GLOBALS["mysqli"]->close();
	}
	
	$is_enquiry_inserted = false;
	function insertEnquiryData($name, $phone_no, $address, $courses) {
		$stmt = $GLOBALS['mysqli']->stmt_init();
		$query = "INSERT INTO `enquiry_db_table`(`name`, `phone_no`, `address`, `courses`, `date_enquired`) VALUES(?, ?, ?, ?, now())";
		$stmt->prepare($query);
		$stmt->bind_param("ssss", $name, 
								   $phone_no, 
								   $address,
								   $courses);
		if($stmt->execute()) {
			$GLOBALS['is_enquiry_inserted'] = true;
		}
		$stmt->close();
	}
?>