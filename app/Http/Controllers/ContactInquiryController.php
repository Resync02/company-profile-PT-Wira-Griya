<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactInquiryController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:100'],
            'company_name' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:40'],
            'subject' => ['nullable', 'string', 'max:160'],
            'message' => ['required', 'string', 'max:5000'],
            'business_card' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:4096'],
        ], [
            'business_card.max' => 'The business card file must not exceed 4 MB.',
            'business_card.mimes' => 'The business card must be a JPG, PNG, or PDF file.',
        ]);

        try {
            Mail::send('emails.contact-inquiry', ['inquiry' => $validated], function ($mail) use ($validated, $request): void {
                $mail->to(config('mail.contact_to', 'info@wira.co.id'))
                    ->replyTo($validated['email'], $validated['full_name'])
                    ->subject('Website inquiry from '.$validated['full_name']);

                if ($request->hasFile('business_card')) {
                    $file = $request->file('business_card');
                    $safeName = preg_replace('/[^A-Za-z0-9._-]/', '_', basename($file->getClientOriginalName()));

                    $mail->attach($file->getRealPath(), [
                        'as' => $safeName ?: 'business-card',
                        'mime' => $file->getMimeType() ?: 'application/octet-stream',
                    ]);
                }
            });
        } catch (Throwable $exception) {
            report($exception);

            return back()
                ->withInput($request->except('business_card'))
                ->with('error', 'Your message could not be sent right now. Please try again later or contact info@wira.co.id directly.');
        }

        return back()->with('success', 'Thank you. Your inquiry has been sent to PT Wira Griya. Our team will get back to you as soon as possible.');
    }
}
