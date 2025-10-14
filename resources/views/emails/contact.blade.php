<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.5;
            color: #202124;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        
        .email-wrapper {
            width: 100%;
            background-color: #f8f9fa;
            padding: 40px 20px;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(60, 64, 67, 0.3), 0 4px 8px 3px rgba(60, 64, 67, 0.15);
        }
        
        .header {
            background: linear-gradient(135deg, #1b1b18 0%, #2d2d2a 100%);
            padding: 32px 24px 24px;
            border-bottom: 1px solid #374151;
        }
        
        .header-content {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .logo-container {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .logo-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .header-text h1 {
            font-size: 22px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
            line-height: 1.3;
        }
        
        .header-text p {
            font-size: 14px;
            color: #d1d5db;
            margin: 4px 0 0 0;
        }
        
        .content {
            padding: 24px;
        }
        
        .message-info {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            border: 1px solid #dee2e6;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .info-row {
            display: flex;
            margin-bottom: 16px;
            align-items: flex-start;
        }
        
        .info-row:last-child {
            margin-bottom: 0;
        }
        
        .info-label {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            min-width: 80px;
            margin-right: 16px;
            margin-top: 2px;
        }
        
        .info-value {
            font-size: 14px;
            color: #1b1b18;
            line-height: 1.4;
            flex: 1;
            font-weight: 500;
        }
        
        .message-content {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border: 1px solid #dee2e6;
            border-radius: 12px;
            padding: 24px;
            margin-top: 16px;
            max-height: 400px;
            overflow-y: auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .message-label {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 12px;
            display: block;
        }
        
        .message-text {
            font-size: 14px;
            color: #1b1b18;
            line-height: 1.7;
            white-space: pre-wrap;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
            font-weight: 400;
        }
        
        /* Scrollbar personnalisée pour le message */
        .message-content::-webkit-scrollbar {
            width: 6px;
        }
        
        .message-content::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        
        .message-content::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 3px;
        }
        
        .message-content::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8;
        }
        
        .footer {
            background-color: #1b1b18;
            padding: 24px;
            border-top: 1px solid #374151;
        }
        
        .footer-content {
            text-align: center;
        }
        
        .footer-text {
            font-size: 12px;
            color: #d1d5db;
            margin-bottom: 16px;
            line-height: 1.4;
        }
        
        .company-details {
            border-top: 1px solid #374151;
            padding-top: 16px;
            margin-top: 16px;
        }
        
        .company-name {
            font-size: 13px;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 4px;
        }
        
        .company-info {
            font-size: 12px;
            color: #9ca3af;
            line-height: 1.4;
        }
        
        .company-info p {
            margin: 2px 0;
        }
        
        @media (max-width: 600px) {
            .email-wrapper {
                padding: 20px 10px;
            }
            
            .header {
                padding: 24px 16px 16px;
            }
            
            .content {
                padding: 16px;
            }
            
            .footer {
                padding: 16px;
            }
            
            .info-row {
                flex-direction: column;
                gap: 4px;
            }
            
            .info-label {
                min-width: auto;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="header">
                <div class="header-content">
                    <div class="logo-container">
                        <img src="{{ asset('images/logodwesta.png') }}" alt="DWESTA Logo" />
                    </div>
                    <div class="header-text">
                        <h1>Nouveau message</h1>
                        <p>DWESTA SAS</p>
                    </div>
                </div>
            </div>
            
            <div class="content">
                <div class="message-info">
                    <div class="info-row">
                        <div class="info-label">De</div>
                        <div class="info-value"><strong>{{ $name }}</strong> ({{ $email }})</div>
                    </div>
                    
                    <div class="info-row">
                        <div class="info-label"><strong>Objet</strong></div>
                        <div class="info-value">{{ $subject }}</div>
                    </div>
                </div>
                
                <div class="message-content">
                    <div class="message-label">Message</div>
                    <div class="message-text">{{ $contactMessage }}</div>
                </div>
            </div>
            
            <div class="footer">
                <div class="footer-content">
                    <div class="footer-text">
                        Ce message a été envoyé depuis le formulaire de contact du site DWESTA.
                    </div>
                    
                    <div class="company-details">
                        <div class="company-name">DWESTA SAS</div>
                        <div class="company-info">
                            <p>Rond-Point Benz-Vi, Bangui, République Centrafricaine</p>
                            <p>Téléphone : +236 74 01 98 49 | Email : contact@dwesta.com</p>
                            <p>Site web : www.dwesta.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
