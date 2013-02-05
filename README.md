yii-paypal
==========

A PayPal component for Yii framework to utilize Express Checkout and Direct Payment APIs



Installation
==========

Download the package, extract the component file (Paypal.php) to your components directory and optionally extract 
sample controller and view files to test the component.
After place the Paypal configuration array inside your 'components' definitions.

```php
'Paypal' => array(
	'class'=>'application.components.Paypal',
	'apiUsername' => 'YOUR_API_USERNAME',
	'apiPassword' => 'YOUR_API_PASSWORD',
	'apiSignature' => 'YOUR_API_SIGNATURE',
	'apiLive' => false,
	
	'returnUrl' => 'paypal/confirm/', //or 'index.php?r=paypal/confirm/' if url management component is not enabled
	'cancelUrl' => 'paypal/cancel/', //or 'index.php?r=paypal/cancel/' if url management component is not enabled
	
    // Default currency to use, if not set USD is the default
    'currency' => 'USD',

    // Default description to use, defaults to an empty string
    //'defaultDescription' => '',

    // Default Quantity to use, defaults to 1
    //'defaultQuantity' => '1',

	//The version of the paypal api to use, defaults to '3.0' (review PayPal documentation to include a valid API version)
    //'version' => '3.0',
),
```