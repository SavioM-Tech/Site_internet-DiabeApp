<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #22B573 0%, #16A34A 100%);
            padding: 30px 20px;
            text-align: center;
            color: white;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }
        .email-header p {
            margin: 5px 0 0 0;
            font-size: 14px;
            opacity: 0.9;
        }
        .email-body {
            padding: 30px 20px;
        }
        .info-block {
            background-color: #f8f9fa;
            border-left: 4px solid #22B573;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .info-block strong {
            color: #22B573;
            display: inline-block;
            min-width: 120px;
        }
        .message-block {
            background-color: #f8f9fa;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .message-block h3 {
            margin: 0 0 15px 0;
            color: #22B573;
            font-size: 16px;
        }
        .message-content {
            background-color: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .email-footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #e0e0e0;
        }
        .email-footer a {
            color: #22B573;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>📧 Nouveau message de contact</h1>
            <p>Un utilisateur a rempli le formulaire de contact</p>
        </div>

        <div class="email-body">
            <div class="info-block">
                <p><strong>Nom complet :</strong> {{ $name }}</p>
            </div>

            <div class="info-block">
                <p><strong>Email :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
            </div>

            <div class="info-block">
                <p><strong>Téléphone :</strong> {{ $phone }}</p>
            </div>

            <div class="info-block">
                <p><strong>Profil :</strong> {{ $profile }}</p>
            </div>

            <div class="message-block">
                <h3>💬 Message :</h3>
                <div class="message-content">{{ $userMessage }}</div>
            </div>
        </div>

        <div class="email-footer">
            <p>Ce message a été envoyé depuis le formulaire de contact de <strong>Diabe-App</strong></p>
            <p>
                <a href="https://diabeapp.com">diabeapp.com</a> | 
                <a href="mailto:contact@diabeapp.com">contact@diabeapp.com</a>
            </p>
        </div>
    </div>
</body>
</html>