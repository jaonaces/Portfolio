<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio homepage.
     */
    public function index()
    {
        return view('portfolio');
    }

    /**
     * Handle the contact form submission.
     */
    public function sendContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|min:10|max:2000',
        ]);

        try {
            // Log the contact request (replace with Mail::to() when SMTP is configured)
            Log::info('Portfolio Contact Form Submission', $validated);

            // ─── Uncomment below when Mail is configured ───────────────────
            // Mail::send('emails.contact', $validated, function ($mail) use ($validated) {
            //     $mail->to('jarednaces@email.com', 'Jared Naces')
            //          ->subject('Portfolio Contact: ' . $validated['subject'])
            //          ->replyTo($validated['email'], $validated['name']);
            // });
            // ──────────────────────────────────────────────────────────────

            return redirect()
                ->route('portfolio')
                ->with('success', 'Your message has been sent! I\'ll get back to you soon.');

        } catch (\Exception $e) {
            Log::error('Contact form error: ' . $e->getMessage());

            return redirect()
                ->route('portfolio')
                ->withInput()
                ->with('error', 'Something went wrong. Please try again later.');
        }
    }
}
