<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ContactUS;
use Illuminate\Support\Facades\Mail;

class ContactUSController extends Controller
{
    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */
    protected $email;
    protected $name;
    protected $message;
    public function contactUS()

    {

        return view('contactUS');

    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function contactUSPost(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'

        ]);

        ContactUS::create($request->all());
        $this->name = $request -> input('name');
        $this->email = $request -> input('email');
        $this->message = $request -> input('message');
        $data = array('name'=>$this->name);
        Mail::send('mail', $data, function($message) {
            $message->to($this->email, $this->name)->subject
            ($this->message);
            $message->to('pragadeeshsample@gmail.com', $this->name)->subject
            ($this->message);
            $message->from('xyz@gmail.com','pragadeesh');
        });

        return back()->with('success', 'Thanks for contacting us!');

    }
}
