<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use \Exception;

class FormController extends Controller
{
    public function __invoke(Request $request)
    {
        try {
            Mail::to('slavkolazic1991@gmail.com')->send(new SendMail($request));

            return response('Successfully sent message', 200);
        } catch (Exception $exception) {
            return response()->withException($exception);
        }

    }
}
