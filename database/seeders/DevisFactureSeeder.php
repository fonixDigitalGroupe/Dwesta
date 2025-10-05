<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Devis;
use App\Models\Facture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevisFactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer un utilisateur de test s'il n'existe pas
        $user = User::firstOrCreate(
            ['email' => 'test@dwesta.com'],
            [
                'name' => 'Utilisateur Test',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]
        );

        // Créer quelques devis de test
        $devis1 = Devis::create([
            'user_id' => $user->id,
            'numero_devis' => Devis::generateNumeroDevis(),
            'type_service' => 'Développement Web',
            'description_projet' => 'Création d\'un site web e-commerce pour une boutique de vêtements avec système de paiement intégré.',
            'besoins_specifiques' => 'Interface responsive, intégration Stripe, gestion des stocks, système de commandes.',
            'montant_estime' => 5000.00,
            'statut' => 'accepte',
            'date_limite' => now()->addDays(30),
            'commentaires_admin' => 'Devis accepté. Projet démarré le 15/10/2025.',
        ]);

        $devis2 = Devis::create([
            'user_id' => $user->id,
            'numero_devis' => Devis::generateNumeroDevis(),
            'type_service' => 'Applications Mobile',
            'description_projet' => 'Développement d\'une application mobile iOS et Android pour la gestion de restaurant.',
            'besoins_specifiques' => 'Application native, synchronisation en temps réel, gestion des commandes, système de notifications push.',
            'montant_estime' => 8000.00,
            'statut' => 'en_cours',
            'date_limite' => now()->addDays(45),
            'commentaires_admin' => 'Devis en cours d\'étude. Retour prévu sous 48h.',
        ]);

        $devis3 = Devis::create([
            'user_id' => $user->id,
            'numero_devis' => Devis::generateNumeroDevis(),
            'type_service' => 'Consulting Digital',
            'description_projet' => 'Audit et conseil pour l\'optimisation de la présence digitale d\'une PME.',
            'besoins_specifiques' => 'Analyse SEO, audit des réseaux sociaux, recommandations stratégiques.',
            'montant_estime' => 2500.00,
            'statut' => 'en_attente',
            'date_limite' => now()->addDays(15),
        ]);

        // Créer des factures basées sur les devis acceptés
        $facture1 = Facture::create([
            'user_id' => $user->id,
            'devis_id' => $devis1->id,
            'numero_facture' => Facture::generateNumeroFacture(),
            'type_service' => 'Développement Web',
            'description_travaux' => 'Création site e-commerce - Phase 1: Design et développement frontend',
            'montant_ht' => 2500.00,
            'taux_tva' => 20.00,
            'montant_tva' => 500.00,
            'montant_ttc' => 3000.00,
            'statut' => 'paye',
            'date_emission' => now()->subDays(10),
            'date_echeance' => now()->subDays(5),
            'date_paiement' => now()->subDays(3),
            'notes' => 'Paiement reçu par virement bancaire. Merci pour votre confiance.',
        ]);

        $facture2 = Facture::create([
            'user_id' => $user->id,
            'devis_id' => $devis1->id,
            'numero_facture' => Facture::generateNumeroFacture(),
            'type_service' => 'Développement Web',
            'description_travaux' => 'Création site e-commerce - Phase 2: Backend et intégrations',
            'montant_ht' => 2000.00,
            'taux_tva' => 20.00,
            'montant_tva' => 400.00,
            'montant_ttc' => 2400.00,
            'statut' => 'en_attente',
            'date_emission' => now()->subDays(2),
            'date_echeance' => now()->addDays(28),
            'notes' => 'Solde du projet. À régler avant la mise en ligne.',
        ]);

        $this->command->info('Données de test créées avec succès !');
        $this->command->info('Utilisateur test: test@dwesta.com / password');
    }
}
