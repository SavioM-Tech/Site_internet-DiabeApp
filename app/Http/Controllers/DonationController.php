<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // Validation du montant
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1|max:10000',
        ]);

        $amount = $validated['amount'];

        try {
            // Configuration Stripe
            Stripe::setApiKey(config('services.stripe.secret'));

            // Créer une session de paiement Stripe
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Don de soutien - Diabe-App',
                            'description' => 'Merci de soutenir notre application !',
                        ],
                        'unit_amount' => $amount * 100,
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => url('/donation/success?session_id={CHECKOUT_SESSION_ID}'),
                'cancel_url' => url('/donation/cancel'),
            ]);

            return response()->json(['id' => $session->id]);

        } catch (\Exception $e) {
            Log::error('Erreur Stripe: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');

        if ($sessionId) {
            try {
                Stripe::setApiKey(config('services.stripe.secret'));
                $session = Session::retrieve($sessionId);

                Log::info('Paiement Stripe réussi', [
                    'session_id' => $sessionId,
                    'amount' => $session->amount_total / 100,
                ]);

                return view('donation.success', ['amount' => $session->amount_total / 100]);

            } catch (\Exception $e) {
                Log::error('Erreur récupération session Stripe: ' . $e->getMessage());
            }
        }

        return redirect('/')->with('success', 'Merci pour votre don !');
    }

    public function cancel()
    {
        return redirect('/#support')->with('error', 'Le paiement a été annulé.');
    }
}