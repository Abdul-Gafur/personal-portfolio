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
            Mail::to(get_static_option('site_global_email'))
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

    public function get_filtered_data_from_request($option_value, $request, $file_save = true)
    {

        $all_attachment = [];
        $all_quote_form_fields = (array) json_decode($option_value);
        $all_field_type = isset($all_quote_form_fields['field_type']) ? (array) $all_quote_form_fields['field_type'] : [];
        $all_field_name = isset($all_quote_form_fields['field_name']) ? $all_quote_form_fields['field_name'] : [];
        $all_field_required = isset($all_quote_form_fields['field_required'])  ? (object) $all_quote_form_fields['field_required'] : [];
        $all_field_mimes_type = isset($all_quote_form_fields['mimes_type']) ? (object) $all_quote_form_fields['mimes_type'] : [];

        //get field details from, form request
        $all_field_serialize_data = $request->all();
        unset($all_field_serialize_data['_token']);


        if (!empty($all_field_name)) {
            foreach ($all_field_name as $index => $field) {

                $is_required = !empty($all_field_required) && property_exists($all_field_required, $index) ? $all_field_required->$index : '';
                $mime_type = !empty($all_field_mimes_type) && property_exists($all_field_mimes_type, $index) ? $all_field_mimes_type->$index : '';
                $field_type = isset($all_field_type[$index]) ? $all_field_type[$index] : '';
                $validation_rules = [];
                $validation_rules[] = !empty($is_required) ? 'required' : 'nullable';
                if (!empty($field_type) && $field_type === 'file') {
                    unset($all_field_serialize_data[$field]);
                    if (!empty($mime_type)) {
                        $validation_rules[]  = $mime_type;
                        $validation_rules[]  = 'max:20000';
                    }
                }
                if ($field_type === 'email') {
                    $validation_rules[]  = 'email';
                }
                //validate field
                $this->validate($request, [
                    $field => implode('|', $validation_rules)
                ]);

                if ($field_type == 'file' && $request->hasFile($field)) {
                    $filed_instance = $request->file($field);
                    $file_extenstion = $filed_instance->extension();

                    if (!$file_save) {
                        $attachment_name = 'custom-form-file-' . Str::random(32) . '-' . $field . '.' . $file_extenstion;
                        $filed_instance->move('assets/uploads/custom-form-files', $attachment_name);
                        $all_attachment[$field] = 'assets/uploads/custom-form-files/' . $attachment_name;
                    } else {
                        $attachment_name = 'attachment-' . Str::random(32) . '-' . $field . '.' . $file_extenstion;
                        $filed_instance->move('assets/uploads/attachment/applicant', $attachment_name);
                        $all_attachment[$field] = 'assets/uploads/attachment/applicant/' . $attachment_name;
                    }
                }
            }
        }
        return [
            'all_attachment' => $all_attachment,
            'field_data' => $all_field_serialize_data
        ];
    }
}
