<?php

	require( dirname( __FILE__ ) . '/main.php' );

	$cr = new CyberSource\Reporting( $merchant_id, $username, $password, CyberSource\Reporting::ENV_TEST );
	$payments = $cr->payment_submission_detail();

	$total = 0;
	foreach ( $payments as $payment ) {
		$total = $total + $payment['amount'];
	}

	echo number_format( $total, 2 );

?>