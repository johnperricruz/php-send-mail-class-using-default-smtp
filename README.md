
## PHP Send Mail using default SMTP

## Usage : 


```php
require_once('path_to_SendMail.php');
$sendMail = new SendMail();
$config = array(
	'subject'  => 'Test Mail',
	'sender'   => 'John Perri Cruz',
	'from'     => 'johnperricruz@gmail.com',
	'bcc'      => 'other.user@domain.com',
	'cc'       => 'other.user@domain.com',
	'reply_to' => 'johnperricruz@gmail.com'
);
$sendMail->setConfig($config);
$sendMail->sendEmail('EMAIL CONTENT',recepient@domain.com);
```

## Security Vulnerabilities

If you discover a security vulnerability within this class, please send an e-mail to John Perri Cruz at johnperricruz@gmail.com. All security vulnerabilities will be promptly addressed.

## License

This Module is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
