<?php

namespace App\Http\Controllers;

use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscribe(Request $request){

        // $validator = Validator::make($request->all(),[
        //     'email' => 'required|email|unique:subscribers'
        // ]);

        // if($validator->fails()){
        //     return new JsonResponse(
        //         [
        //             'success' => false,
        //             'message' => $validator->errors()
        //         ], 422
        //     );
        // }


        $email = $request->all()['email'];
        $description = $request->all()['description'];
        $subject = $request->all()['subject'];

        $subscriber = Subscriber::create([
            'email' => $email,
            'subject' => $subject,
            'description' => $description,
        ]);

        if($subscriber){

            // Mail::send('emails.subscribers', ['desc'=>$description], function ($m) {
            //     $m->from('email@gmail.com', 'Ekscool Skanam');
            //     $m->to('hidayaharifmiui@gmail.com')->subject("INi Pesan DAri SMKN 6 JEMBER");
            // });

            Mail::to($email)->send(new Subscribe($email, $subject,$description));
            return new JsonResponse(
                [
                    'success' => true,
                    'message' => "Oke"
                ], 200
            );
        }

    }
}
