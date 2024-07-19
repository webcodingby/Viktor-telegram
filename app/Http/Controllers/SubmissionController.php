<?php
namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubmissionController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $submission = Submission::create($request->all());

        $this->sendTelegramMessage($submission);

        return redirect('/form')->with('success', 'Form submitted successfully!');
    }

    protected function sendTelegramMessage($submission)
    {
        $telegramApiUrl = "https://api.telegram.org/bot<your-bot-token>/sendMessage";
        $chatId = "<your-chat-id>";
        $message = "Name: {$submission->name}\nEmail: {$submission->email}\nPhone: {$submission->phone}";

        Http::post($telegramApiUrl, [
            'chat_id' => $chatId,
            'text' => $message
        ]);
    }
}
