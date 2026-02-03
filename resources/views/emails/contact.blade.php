<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .header {
            background: linear-gradient(135deg, #22B573, #16A34A);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header p {
            margin: 5px 0 0 0;
            font-size: 14px;
        }
        .info {
            background: #f8f9fa;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid #22B573;
            border-radius: 5px;
        }
        .info strong {
            color: #22B573;
            display: inline-block;
            min-width: 100px;
        }
        .message {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .message h3 {
            margin: 0 0 10px 0;
            color: #22B573;
            font-size: 16px;
        }
        .message-content {
            background: white;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 12px;
        }
        .footer a {
            color: #22B573;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📧 Nouveau message de contact</h1>
            <p>Diabe-App</p>
        </div>
        
        <div class="info">
            <strong>Nom :</strong> {{ $name }}
        </div>
        
        <div class="info">
            <strong>Email :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a>
        </div>
        
        <div class="info">
            <strong>Téléphone :</strong> {{ $phone }}
        </div>
        
        <div class="info">
            <strong>Profil :</strong> {{ $profile }}
        </div>
        
        <div class="message">
            <h3>💬 Message :</h3>
            <div class="message-content">{{ $userMessage }}</div>
        </div>
        
        <div class="footer">
            <p>Ce message a été envoyé depuis le formulaire de contact de Diabe-App</p>
            <p><a href="mailto:contact@diabeapp.com">contact@diabeapp.com</a></p>
        </div>
    </div>
</body>
</html>