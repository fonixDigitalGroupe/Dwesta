<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture {{ $facture->numero_facture }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            border-bottom: 2px solid #FF6B35;
            padding-bottom: 20px;
        }
        .company-info h1 {
            color: #FF6B35;
            margin: 0;
            font-size: 24px;
        }
        .invoice-info {
            text-align: right;
        }
        .invoice-number {
            font-size: 20px;
            font-weight: bold;
            color: #2c2c2c;
        }
        .content {
            margin: 30px 0;
        }
        .service-details {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .financial-summary {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .total {
            background: #FF6B35;
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .status {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .status.en_attente { background: #fef3c7; color: #92400e; }
        .status.paye { background: #d1fae5; color: #065f46; }
        .status.en_retard { background: #fee2e2; color: #991b1b; }
        .status.annule { background: #f3f4f6; color: #374151; }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-info">
            <h1>DWESTA Solutions</h1>
            <p>Solutions Digitales pour l'Afrique</p>
            <p>Email: contact@dwesta.com</p>
        </div>
        <div class="invoice-info">
            <div class="invoice-number">FACTURE {{ $facture->numero_facture }}</div>
            <p>Date d'émission: {{ $facture->date_emission->format('d/m/Y') }}</p>
            <p>Date d'échéance: {{ $facture->date_echeance->format('d/m/Y') }}</p>
            <span class="status {{ $facture->statut }}">{{ $facture->statut_libelle }}</span>
        </div>
    </div>

    <div class="content">
        <h2>Facturé à:</h2>
        <p><strong>{{ $facture->user->name }}</strong></p>
        <p>{{ $facture->user->email }}</p>

        <div class="service-details">
            <h3>Détails du Service</h3>
            <p><strong>Type de Service:</strong> {{ $facture->type_service }}</p>
            <p><strong>Description:</strong> {{ $facture->description_travaux }}</p>
            
            @if($facture->devis)
                <p><strong>Devis associé:</strong> {{ $facture->devis->numero_devis }}</p>
            @endif
        </div>

        <div class="financial-summary">
            <h3>Résumé Financier</h3>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">Montant HT:</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd; text-align: right;">{{ number_format($facture->montant_ht, 2) }} €</td>
                </tr>
                <tr>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">TVA ({{ $facture->taux_tva }}%):</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd; text-align: right;">{{ number_format($facture->montant_tva, 2) }} €</td>
                </tr>
                <tr>
                    <td style="padding: 10px; font-weight: bold;">Total TTC:</td>
                    <td style="padding: 10px; text-align: right; font-weight: bold;">{{ number_format($facture->montant_ttc, 2) }} €</td>
                </tr>
            </table>
        </div>

        @if($facture->date_paiement)
            <div class="service-details">
                <h3>Paiement</h3>
                <p><strong>Date de paiement:</strong> {{ $facture->date_paiement->format('d/m/Y') }}</p>
            </div>
        @endif

        @if($facture->notes)
            <div class="service-details">
                <h3>Notes</h3>
                <p>{{ $facture->notes }}</p>
            </div>
        @endif

        <div class="total">
            Montant Total: {{ number_format($facture->montant_ttc, 2) }} €
        </div>
    </div>

    <div style="margin-top: 50px; text-align: center; color: #666; font-size: 12px;">
        <p>Merci pour votre confiance - DWESTA Solutions</p>
        <p>Cette facture a été générée automatiquement le {{ now()->format('d/m/Y à H:i') }}</p>
    </div>
</body>
</html>

