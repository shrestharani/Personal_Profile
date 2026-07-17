<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB; // Database insertion ke liye compulsory hai

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validation (HTML inputs 'name', 'email', 'message' ke mutabik)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // 2. Database me Data Save karna (Driver error se bachne ka safe aur direct tareeka)
        // Note: Agar aapki table ka naam alag hai (jaise 'contacts' ya 'messages'), toh bas yahan badal lijiye.
        DB::table('contact_messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Email Data Array
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'userMessage' => $request->message,
        ];

        // 4. Proper Email Format (Sender details ke sath)
        Mail::html("
            <html>
            <head>
                <style>
                    body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                    .container { padding: 20px; border: 1px solid #eee; border-radius: 5px; max-width: 600px; }
                    .info { background: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; margin-bottom: 15px; }
                    .message-box { background: #f4f4f4; padding: 15px; border-radius: 4px; }
                </style>
            </head>
            <body>
                <div class='container'>
                    <h2>New Portfolio Inquiry</h2>
                    <p>You have received a new message from your portfolio website contact form.</p>
                    
                    <div class='info'>
                        <p><strong>From (Name):</strong> {$data['name']}</p>
                        <p><strong>Sender Email ID:</strong> <a href='mailto:{$data['email']}'>{$data['email']}</a></p>
                    </div>

                    <div class='message-box'>
                        <p><strong>Message:</strong></p>
                        <p style='white-space: pre-line;'>{$data['userMessage']}</p>
                    </div>
                </div>
            </body>
            </html>
        ", function ($message) use ($data) {
            $message->to('kondabathinisreshtharani@gmail.com')
                    ->subject('New Portfolio Message from ' . $data['name']);
        });

        // 5. Success Redirect
        return back()->with('success', 'Thank you! Your message has been saved in the database and sent via email.');
    }
}