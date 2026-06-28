<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nouveau message de contact</title>
</head>
<body style="margin:0; padding:0; background-color:#eef2f1; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;">

    {{-- Préheader masqué (aperçu dans la liste des mails) --}}
    <div style="display:none; max-height:0; overflow:hidden; opacity:0; mso-hide:all;">
        Nouveau message de {{ $name }} via le formulaire de contact de diabeapp.com
    </div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#eef2f1;">
        <tr>
            <td align="center" style="padding:32px 16px;">

                <table role="presentation" width="600" cellpadding="0" cellspacing="0" border="0" style="width:600px; max-width:600px; background-color:#ffffff; border-radius:16px; overflow:hidden; font-family:'Segoe UI', Arial, sans-serif;">

                    {{-- En-tête --}}
                    <tr>
                        <td align="center" bgcolor="#16A34A" style="background-color:#16A34A; background-image:linear-gradient(135deg,#22B573,#16A34A); padding:30px 24px;">
                            <h1 style="margin:0; color:#ffffff; font-size:22px; font-weight:700; line-height:1.3;">Nouveau message de contact</h1>
                            <p style="margin:6px 0 0 0; color:#dcfce7; font-size:13px;">Formulaire du site diabeapp.com</p>
                        </td>
                    </tr>

                    {{-- Intro + date --}}
                    <tr>
                        <td style="padding:26px 28px 8px 28px;">
                            <p style="margin:0; color:#475569; font-size:15px; line-height:1.6;">
                                Tu as reçu un nouveau message via le formulaire de contact.
                            </p>
                            <p style="margin:6px 0 0 0; color:#94a3b8; font-size:13px;">
                                Reçu le {{ now()->locale('fr')->translatedFormat('d F Y à H:i') }}
                            </p>
                        </td>
                    </tr>

                    {{-- Coordonnées --}}
                    <tr>
                        <td style="padding:14px 28px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f8fafc; border-radius:12px; border:1px solid #e8eef0;">
                                <tr>
                                    <td style="padding:8px 18px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                                <td width="110" style="padding:10px 0; color:#16A34A; font-size:14px; font-weight:700; vertical-align:top;">Nom</td>
                                                <td style="padding:10px 0; color:#1e293b; font-size:14px; vertical-align:top;">{{ $name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0; color:#16A34A; font-size:14px; font-weight:700; vertical-align:top;">Email</td>
                                                <td style="padding:10px 0; font-size:14px; vertical-align:top;">
                                                    <a href="mailto:{{ $email }}" style="color:#16A34A; text-decoration:none;">{{ $email }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0; color:#16A34A; font-size:14px; font-weight:700; vertical-align:top;">Téléphone</td>
                                                <td style="padding:10px 0; color:#1e293b; font-size:14px; vertical-align:top;">{{ $phone }}</td>
                                            </tr>
                                            <tr>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                                <td style="border-top:1px solid #e8eef0;"></td>
                                            </tr>
                                            <tr>
                                                <td style="padding:10px 0; color:#16A34A; font-size:14px; font-weight:700; vertical-align:top;">Profil</td>
                                                <td style="padding:10px 0; color:#1e293b; font-size:14px; vertical-align:top;">{{ $profile }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Message --}}
                    <tr>
                        <td style="padding:14px 28px 4px 28px;">
                            <p style="margin:0 0 10px 0; color:#16A34A; font-size:14px; font-weight:700;">Message</p>
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#ffffff; border:1px solid #e8eef0; border-left:4px solid #22B573; border-radius:10px;">
                                <tr>
                                    <td style="padding:16px 18px; color:#334155; font-size:14px; line-height:1.7;">
                                        {!! nl2br(e($userMessage)) !!}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Bouton Répondre --}}
                    <tr>
                        <td align="center" style="padding:22px 28px 6px 28px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" bgcolor="#16A34A" style="border-radius:12px;">
                                        <a href="mailto:{{ $email }}?subject=RE:%20Votre%20message%20-%20Diabe-App"
                                           style="display:inline-block; padding:13px 30px; color:#ffffff; font-size:14px; font-weight:700; text-decoration:none; font-family:'Segoe UI', Arial, sans-serif;">
                                            Répondre à {{ $name }}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Pied --}}
                    <tr>
                        <td style="padding:24px 28px 30px 28px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="border-top:1px solid #e8eef0; padding-top:18px; text-align:center;">
                                        <p style="margin:0; color:#94a3b8; font-size:12px; line-height:1.6;">
                                            Message envoyé depuis le formulaire de contact de
                                            <a href="https://diabeapp.com" style="color:#16A34A; text-decoration:none;">diabeapp.com</a>
                                        </p>
                                        <p style="margin:4px 0 0 0; color:#cbd5e1; font-size:12px;">
                                            Diabe-App &middot; {{ now()->format('Y') }}
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
