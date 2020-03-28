<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function basic_email() {
        $data = array('name' => "Virat Gandhi");

        Mail::send(['text' => 'mail'], $data, function($message) {
            $message->to('cebollafina@gmail.com', 'Tutorials Point')->subject
                    ('Laravel Basic Testing Mail');
            $message->from('nokiahammer@nokiahammer.cat', 'La Salle Mollerussa');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function html_email() {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('cebollafina@gmail.com', 'Tutorials Point')->subject
                    ('Laravel HTML Testing Mail');
            $message->from('nokiahammer@nokiahammer.cat', 'La Salle Mollerussa');
        });
        echo "HTML Email Sent. Check your inbox.";
    }

    public function attachment_email() {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('cebollafina@gmail.com', 'Tutorials Point')->subject
                    ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('nokiahammer@nokiahammer.cat', 'La Salle Mollerussa');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }

}
