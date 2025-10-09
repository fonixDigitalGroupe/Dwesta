<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de consultation</title>
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
            background: linear-gradient(135deg, #FF6B35 0%, #E55A2B 100%);
            color: white;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .info-row {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }
        .info-label {
            font-weight: bold;
            color: #FF6B35;
            margin-bottom: 5px;
        }
        .info-value {
            color: #555;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            border-left: 4px solid #FF6B35;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0; font-size: 24px;">Nouvelle demande de consultation</h1>
        <p style="margin: 10px 0 0 0; opacity: 0.9;">Dwesta - Experts IT</p>
    </div>
    
    <div class="content">
        <div class="info-row">
            <div class="info-label">Nom complet</div>
            <div class="info-value">{{ $nom }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Email</div>
            <div class="info-value">{{ $email }}</div>
        </div>

        @if($societe)
        <div class="info-row">
            <div class="info-label">Société</div>
            <div class="info-value">{{ $societe }}</div>
        </div>
        @endif

        @if($telephone)
        <div class="info-row">
            <div class="info-label">Téléphone</div>
            <div class="info-value">{{ $telephone }}</div>
        </div>
        @endif

        <div class="info-row">
            <div class="info-label">Service d'intérêt</div>
            <div class="info-value">{{ $service }}</div>
        </div>

        <div class="info-row">
            <div class="info-label">Date et heure souhaitées</div>
            <div class="info-value">{{ \Carbon\Carbon::parse($dateHeure)->format('d/m/Y à H:i') }}</div>
        </div>

        @if($messageContent)
        <div class="info-row" style="border-bottom: none;">
            <div class="info-label">Message</div>
            <div class="message-box">
                {{ $messageContent }}
            </div>
        </div>
        @endif
    </div>
</body>
</html>

