<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder;
use App\Mail\ContactMessage;
use App\Mail\CustomFormBuilderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use function GuzzleHttp\Promise\all;

class FrontendFormController extends Controller
{

    public function contact(Request $request)
    {
        $this->validate($request, [
            "name" => 'required',
            "email" => 'required|email',
            "subject" => 'required',
            "message" => 'required',
        ]);
        $validated_data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ];
        $all_attachment = [];

        $succ_msg = 'Message sent successfully, thank you';
        $success_message = !empty($succ_msg) ? $succ_msg : __('Thanks for your contact!!');

        try {
            Mail::to('abdulgafurshaattir@gmail.com')
                ->send(new ContactMessage(
                    $validated_data,
                    $all_attachment,
                    __('You Have Contact Mail')
                ));
        } catch (\Exception $e) {
            return response()->json([
                'status' => '400',
                'msg' => $e->getMessage()
            ]);
        }

        $data['status'] = '200';
        $data['msg'] = $success_message;
        return response()->json($data);


        $data['status'] = '400';
        $data['msg'] = __('Something goes wrong, Please try again later !!');
        return response()->json($data);
    }

    
}
