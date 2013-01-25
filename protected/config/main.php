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
			
			'returnUrl' => 'paypal/confirm/', //or 'index.php?r=paypal/confirm/' if url management component is not enabled
			'cancelUrl' => 'paypal/cancel/', //or 'index.php?r=paypal/cancel/' if url management component is not enabled
		),
	),
);