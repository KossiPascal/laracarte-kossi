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

       Mail::to(config('laracarte.admin_support_email'))
            ->send(new ContactMessageCreated($message));

       Flashy::message('Nous vous repondrons dans les plus bref delais', 'http://your-awesome-link.com');

       return Redirect::route('root_path');

       //   Mail::to($request->user())->send(new OrderShipped($order));
       // $order = Order::findOrFail($orderId);
    }
}