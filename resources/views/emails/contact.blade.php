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
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #F53003;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 20px;
        }
        .label {
            font-weight: bold;
            color: #F53003;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background-color: white;
            padding: 10px;
            border-radius: 4px;
            border-left: 4px solid #F53003;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Nouveau message de contact</h1>
        <p>Dwesta - Site Web</p>
    </div>
    
    <div class="content">
        <div class="field">
            <span class="label">Nom complet :</span>
            <div class="value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <span class="label">Email :</span>
            <div class="value">{{ $email }}</div>
        </div>
        
        <div class="field">
            <span class="label">Objet :</span>
            <div class="value">{{ $subject }}</div>
        </div>
        
        <div class="field">
            <span class="label">Message :</span>
            <div class="value">{{ $message }}</div>
        </div>
    </div>
    
    <div class="footer">
        <p>Ce message a été envoyé depuis le formulaire de contact du site Dwesta.</p>
        <p>Vous pouvez répondre directement à cet email pour contacter {{ $name }}.</p>
    </div>
</body>
</html>
