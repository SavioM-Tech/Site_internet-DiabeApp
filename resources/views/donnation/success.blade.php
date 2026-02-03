<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour votre don - Diabe-App</title>
    <style>
        body {
            background: linear-gradient(135deg, #22B573, #16A34A);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            margin: 0;
            position: relative;
        }
        
        /* Animation de confettis */
        @keyframes confetti-fall {
            0% { transform: translateY(-100vh) rotate(0deg); opacity: 1; }
            100% { transform: translateY(100vh) rotate(720deg); opacity: 0; }
        }
        
        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background: #FFD700;
            position: absolute;
            animation: confetti-fall 3s linear infinite;
        }
        
        /* Toast notification */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: white;
            padding: 20px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            gap: 15px;
            z-index: 1000;
            animation: slideIn 0.5s ease, slideOut 0.5s ease 4.5s;
            max-width: 400px;
        }
        
        @keyframes slideIn {
            from { transform: translateX(400px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(400px); opacity: 0; }
        }
        
        .toast-icon {
            width: 50px;
            height: 50px;
            background: #22B573;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .toast-icon svg {
            width: 30px;
            height: 30px;
            fill: white;
        }
        
        .toast-content h4 {
            margin: 0 0 5px 0;
            color: #22B573;
            font-size: 18px;
        }
        
        .toast-content p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }
        
        .success-card {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 10px 50px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 500px;
            animation: fadeInScale 0.6s ease;
            z-index: 1;
        }
        
        @keyframes fadeInScale {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        
        .success-icon {
            width: 80px;
            height: 80px;
            background: #22B573;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s ease 0.3s backwards;
        }
        
        .success-icon svg {
            width: 40px;
            height: 40px;
            fill: white;
        }
        
        @keyframes scaleIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }
        
        h1 {
            color: #22B573;
            margin-bottom: 20px;
            font-size: 32px;
            animation: slideUp 0.5s ease 0.5s backwards;
        }
        
        @keyframes slideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .amount {
            font-size: 48px;
            font-weight: 900;
            color: #22B573;
            margin: 20px 0;
            animation: slideUp 0.5s ease 0.7s backwards;
        }
        
        p {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
            animation: slideUp 0.5s ease 0.9s backwards;
        }
        
        .btn {
            background: #22B573;
            color: white;
            padding: 15px 40px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-block;
            font-weight: 600;
            transition: all 0.3s;
            animation: slideUp 0.5s ease 1.1s backwards;
        }
        
        .btn:hover {
            background: #16A34A;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(34, 181, 115, 0.3);
        }
        
        @media (max-width: 600px) {
            .toast-notification {
                top: 10px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
            
            .success-card {
                margin: 20px;
                padding: 40px 30px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .amount {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
    <!-- Toast Notification -->
    <div class="toast-notification" id="toastNotification">
        <div class="toast-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
        </div>
        <div class="toast-content">
            <h4>🎉 Paiement réussi !</h4>
            <p>Merci pour votre générosité. Votre don nous aide énormément !</p>
        </div>
    </div>

    <!-- Success Card -->
    <div class="success-card">
        <div class="success-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
            </svg>
        </div>
        <h1>Merci infiniment !</h1>
        <div class="amount">{{ $amount ?? '0' }}€</div>
        <p>
            Votre générosité nous aide à améliorer Diabe-App et à promouvoir 
            la prévention du diabète pour tous. 💚
        </p>
        <p>
            Un reçu de paiement vous a été envoyé par email.
        </p>
        <a href="/" class="btn">Retour à l'accueil</a>
    </div>

    <script>
        // Créer des confettis
        function createConfetti() {
            const colors = ['#FFD700', '#FF6B6B', '#4ECDC4', '#45B7D1', '#FFA07A', '#98D8C8'];
            
            for (let i = 0; i < 50; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.animationDelay = Math.random() * 3 + 's';
                    confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 5000);
                }, i * 30);
            }
        }
        
        // Lancer les confettis au chargement
        window.addEventListener('load', createConfetti);
        
        // Masquer le toast après 5 secondes
        setTimeout(() => {
            const toast = document.getElementById('toastNotification');
            if (toast) {
                toast.style.display = 'none';
            }
        }, 5000);
        
        // Son de notification (optionnel)
        const audio = new Audio('data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvmwhBSuCzO/bhjMGHGS57OajTg0OVqzn77BcGAg+ltryxnMpBSh+ye7fg');
        // audio.play().catch(() => {}); // Décommenter pour activer le son
    </script>
</body>
</html>