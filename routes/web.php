<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {    

    $data = [
        'title' => 'Hi, student! I hope you like the course =)',
        'content' => 'Praesent imperdiet, lectus vitae accumsan vehicula, neque mi aliquet nisl, id tempus enim erat non massa. Integer iaculis lorem risus, et bibendum elit rhoncus ac. Etiam congue sapien eu urna egestas dictum nec sed ipsum. Fusce rhoncus in ex at rhoncus. Proin dapibus lacus ac nunc imperdiet lobortis. Quisque a elit ut turpis mattis ultricies. Etiam vel diam vel orci commodo suscipit nec eget ante. Maecenas varius blandit consectetur. Praesent quis finibus velit. Sed non eros consectetur, tincidunt nisi ac, consequat lectus. Vestibulum ullamcorper aliquam tortor, in porta leo pretium ut. Mauris eleifend elit vitae eros malesuada mollis. Phasellus vehicula lacus dui, eu venenatis eros pharetra vitae. Pellentesque interdum lacus a quam venenatis pretium.',
    ];

    Mail::send('emails.test', $data, function($message) {
        $message->to('tiagolemespalhano@gmail.com', 'Tiago Bordin')->subject('Hello Student!!!');
    });

});
