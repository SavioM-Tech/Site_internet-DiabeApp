<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|max:20',
            'profile' => 'nullable|in:Utilisateur,Organisme,Donateur,Autres',
            'message' => 'required|min:10',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
        ]);

        try {
            // Préparation du contenu de l'email
            $emailData = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'phone' => $validated['phone'] ?? 'Non renseigné',
                'profile' => $validated['profile'] ?? 'Non renseigné',
                'userMessage' => $validated['message'],
            ];

            // Envoi de l'email
            Mail::send('emails.contact', $emailData, function ($message) use ($emailData) {
                $message->to('contact@diabeapp.com')
                    ->subject('Nouveau message de contact - Diabe-App')
                    ->replyTo($emailData['email'], $emailData['name']);
            });

            // Log de succès
            Log::info('Email de contact envoyé avec succès', [
                'name' => $emailData['name'],
                'email' => $emailData['email']
            ]);

            // Retour avec message de succès
            return back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');

        } catch (\Exception $e) {
            // Log de l'erreur détaillée
            Log::error('Erreur envoi email contact', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Retour avec message d'erreur
            return back()
                ->withInput()
                ->withErrors(['error' => 'Une erreur s\'est produite lors de l\'envoi. Veuillez réessayer ou nous contacter directement à contact@diabeapp.com']);
        }
    }
}