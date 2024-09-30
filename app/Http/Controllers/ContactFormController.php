<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormEmail;
use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactFormController extends Controller
{
    
    public function contactFormSubmit(Request $request)
    {
        try {
            //validate
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'string'],
                'email' => ['required', 'email'],
                'message' => ['required', 'string']
            ], [
                'name.required' => 'Please provide your name.',
                'name.string' => 'Invalid input.',
                'email.required' => 'Please provide your email address.',
                'email.email' => 'Invalid email address.',
                'message.required' => 'Please provide a message.',
                'message.string' => 'Invalid input.'
            ]);
        
            //check validator
            if ($validator->fails()) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 422);
            }

            //rate requests by ip
            $key = 'contact_form:' . $request->ip();
            if (RateLimiter::tooManyAttempts($key, $max = 3)) {
                $seconds = RateLimiter::availableIn($key);
                return response()->json([
                    'errors' => ['general' => ['Too many emails sent. Please try again in ' . $seconds . ' seconds.']]
                ], 429);
            }

            //save to db
            $submission = FormSubmission::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message
            ]);
    
            //email
            try {
                Mail::to(Config::get('mail.contact_email'))->send(new ContactFormEmail($submission));
            } catch (\Exception $mailException) {
                Log::error('Failed to send email: ' . $mailException->getMessage(), [
                    'exception' => $mailException,
                    'submission_id' => $submission->id,
                    'to_email' => Config::get('mail.contact_email'),
                ]);
                return response()->json(['error' => 'Failed to send email. Please try again later.'], 500);
            }

            RateLimiter::hit($key);

            return response()->json(['success' => 'Message sent!'], 200);
        }
        catch (\Exception $e) {
            Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'exception' => $e,
                'request' => $request->all(),
            ]);
            return response()->json(['error' => 'Failed to submit contact form. Please try again later.'], 500);
        }
    }
}
