<?php
require_once('../functions/reusableQuery.php');


/* Add Product */
if (isset($_POST['Add_User'])) {
	
	$products = [
			'products_description' => 'One bedroom and two bedroom houses available in Westlands estate Wote town.',
			'products_img'=> '../public/images/50 by 100.jpg',
			'products_type'=> 'shamba',
			'products_price_to'=> '100000',
			'products_price_end'=> '20000',
	];

   $res = saveData($products, 'products');
   if ($res) {
		$success = "Saved Successfuly";
	} else {
		$err = "Failed, please try again";
	}
}


/* Update Users */
if (isset($_POST['Update_User'])) {
	//dd($_POST);

    $user_name = mysqli_real_escape_string($mysqli, $_POST['user_names']);
    $user_email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
    $user_phone_number_number = mysqli_real_escape_string($mysqli, $_POST['user_phone_number_number']);
    $user_access_level = mysqli_real_escape_string($mysqli, $_POST['user_access_level']);
    $user_id = mysqli_real_escape_string($mysqli, $_POST['user_id']);
	$user_personal_number =   mysqli_real_escape_string($mysqli, $_POST['user_personal_number']);
	$user_ward_id =   mysqli_real_escape_string($mysqli, $_POST['user_ward_id']);



    /* Persist */
    $update_querry = "UPDATE users SET user_name = '{$user_name}', user_email = '{$user_email}', user_phone_number_number = '{$user_phone_number_number}', user_access_level = '{$user_access_level}', user_personal_number = '{$user_personal_number}' user_ward_id = '{$user_ward_id}'
    WHERE user_id ='{$user_id}'";
    if (mysqli_query($mysqli, $update_querry)) {
        $success = "User updated";
    } else {
        $err = "Failed, please try again";
    }
}

