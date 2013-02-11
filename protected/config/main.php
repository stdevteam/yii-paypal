<?php
//Place the Paypal configuration array inside your 'components' definitions

	// application components
	'components'=>array(
            
		'Paypal' => array(
			'class'=>'application.components.Paypal',
			'apiUsername' => 'YOUR_API_USERNAME',
			'apiPassword' => 'YOUR_API_PASSWORD',
			'apiSignature' => 'YOUR_API_SIGNATURE',
			'apiLive' => false,
			
			'returnUrl' => 'paypal/confirm/', //regardless of url management component
			'cancelUrl' => 'paypal/cancel/', //regardless of url management component
		),
	),
);