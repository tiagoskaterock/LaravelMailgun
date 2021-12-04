## THIS SENDS EMAILS USING PHP, LARAVEL AND MAILGUN

### Choose from where you want send your email
### Change the file 
## config/mail.php

		'from' => [
		    'address' => env('MAIL_FROM_ADDRESS', 'email_address_from_somewhere@email.com'),
		    'name' => env('MAIL_FROM_NAME', 'Joanne Doe'),
		],

### create an acount at mailgun.com and use your domain and secret at 
## .env

		MAIL_MAILER=mailgun
		MAILGUN_DOMAIN=PUT_YOUR_MAILGUN_DOMAIN_HERE
		MAILGUN_SECRET=PUT_YOUR_MAILGUN_SECRET_HERE

#### for tests I just created a route that sends automatically by hard code, 
#### you can create a form and do something better the way you'd like =)

## routes/web.php

		Route::get('/', function () {    

		    $data = [
		        'title' => 'Hi, student! I hope you like the course =)',
		        'content' => 'Praesent imperdiet, lectus vitae accumsan vehicula, neque mi aliquet nisl, id tempus enim erat non massa. Integer iaculis lorem risus, et bibendum elit rhoncus ac.',
		    ];

		    Mail::send('emails.test', $data, function($message) {
		        $message->to('friend_who_receives_email@email.com', 'Good Friend Receiver')->subject('Hello Student!!!');
		    });

		});