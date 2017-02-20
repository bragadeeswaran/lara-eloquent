<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Http\Requests;

use App\Http\Controllers\Controller;

class MailController extends Controller {
 /*   public function basic_email(){
        //$data = array('name'=>"Virat Gandhi");
        Mail::to('bragadeeswaran@mail.asahitechnologies.com')->send($this->mail());
        echo "Basic Email Sent. Check your inbox.";
    }*/

    public function html_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('bragadeeswaran@mail.asahitechnologies.com', 'pragadeesh')->subject
            ('Just a Test Mail');
            $message->from('xyz@gmail.com','pragadeesh');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
/*
    public function attachment_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }*/
    public function  mail(){
        $from = 'welcome@cityusher.com';
        $name = 'Team City Usher';
        $subject = 'City Usher - Reset Password';
        return $this->view('mail')
            ->from($from,$name)
            ->subject($subject);
    }
}