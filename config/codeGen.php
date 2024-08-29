<?php

/* Password Reset Token */
$length = 30;
$tk = substr(str_shuffle("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890"), 1, $length);

/* Code */
$code = 'TRD-' . substr(str_shuffle("1234567890"), 1, 4);

/* System Password */
$pass = substr(str_shuffle("qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM1234567890"), 1, 8);


/* OTP */
$otp = substr(str_shuffle("1234567890"), 1, 3);

/* Unique ID */
$sys_gen_unique_id = 'GoMC-' . date('Y') . '-' . $otp . '-' . $code;

