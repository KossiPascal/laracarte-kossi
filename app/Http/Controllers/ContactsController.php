<?php

namespace App\Http\Controllers;

use App\Models\Message;
use MercurySeries\Flashy\Flashy;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Redirect;

class ContactsController extends Controller
{
    public function create()
    {
       return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));
           /*
            $when = now()->addMinutes(10);

            Mail::to($request->user())
            ->cc($moreUsers)
            ->bcc($evenMoreUsers)
            ->later($when, new OrderShipped($order));
            */

        Mail::to(config('laracarte.admin_support_email'))
            ->cc('tsolekos263@yahoo.fr')
           // ->bcc('kossi.tsolegnagbo@gmail.com')
            ->queue(new ContactMessageCreated($message));

        /*
            ->queue(new ContactMessageCreated($message))
            ->onConnection('sqs')
            ->onQueue('emails');
        */
       Flashy::message('Nous vous repondrons dans les plus bref delais', 'http://your-awesome-link.com');

       return Redirect::route('root_path');

       //   Mail::to($request->user())->send(new OrderShipped($order));
       // $order = Order::findOrFail($orderId);
    }
}