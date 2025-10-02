<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facture') }} - {{ $facture->numero_facture }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- En-tête de la facture -->
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h1 class="text-3xl font-bold text-[#2c2c2c]">{{ $facture->numero_facture }}</h1>
                            <p class="text-[#666666] mt-1">Émise le {{ $facture->date_emission->format('d/m/Y') }}</p>
                        </div>
                        <span class="px-4 py-2 text-sm font-medium rounded-full
                            @if($facture->statut === 'en_attente') bg-yellow-100 text-yellow-800
                            @elseif($facture->statut === 'paye') bg-green-100 text-green-800
                            @elseif($facture->statut === 'en_retard') bg-red-100 text-red-800
                            @else bg-gray-100 text-gray-800
                            @endif">
                            {{ $facture->statut_libelle }}
                        </span>
                    </div>

                    <!-- Informations de la facture -->
                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Détails du service -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#2c2c2c] mb-4">Détails du Service</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Type de Service</label>
                                    <p class="text-[#2c2c2c] font-medium">{{ $facture->type_service }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Description des Travaux</label>
                                    <p class="text-[#2c2c2c]">{{ $facture->description_travaux }}</p>
                                </div>

                                @if($facture->devis)
                                    <div>
                                        <label class="block text-sm font-medium text-[#666666]">Devis Associé</label>
                                        <a href="{{ route('devis.show', $facture->devis) }}" 
                                            class="text-[#FF6B35] hover:text-[#e55a2b] font-medium">
                                            {{ $facture->devis->numero_devis }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Informations financières -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#2c2c2c] mb-4">Informations Financières</h2>
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-[#666666]">Montant HT:</span>
                                        <span class="font-medium">{{ number_format($facture->montant_ht, 2) }} €</span>
                                    </div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-[#666666]">TVA ({{ $facture->taux_tva }}%):</span>
                                        <span class="font-medium">{{ number_format($facture->montant_tva, 2) }} €</span>
                                    </div>
                                    <div class="border-t border-gray-300 pt-2">
                                        <div class="flex justify-between items-center">
                                            <span class="text-lg font-semibold text-[#2c2c2c]">Total TTC:</span>
                                            <span class="text-lg font-bold text-[#FF6B35]">{{ number_format($facture->montant_ttc, 2) }} €</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Date d'Échéance</label>
                                    <p class="text-[#2c2c2c] font-medium">{{ $facture->date_echeance->format('d/m/Y') }}</p>
                                </div>

                                @if($facture->date_paiement)
                                    <div>
                                        <label class="block text-sm font-medium text-[#666666]">Date de Paiement</label>
                                        <p class="text-[#2c2c2c] font-medium">{{ $facture->date_paiement->format('d/m/Y') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Notes -->
                    @if($facture->notes)
                        <div class="mt-8 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <h3 class="text-lg font-semibold text-[#2c2c2c] mb-2">Notes</h3>
                            <p class="text-[#666666]">{{ $facture->notes }}</p>
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ route('factures.index') }}" 
                            class="px-6 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                            Retour à la liste
                        </a>
                        
                        <div class="flex space-x-3">
                            <a href="{{ route('factures.download', $facture) }}" 
                                class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                Télécharger PDF
                            </a>
                            
                            @if($facture->statut === 'en_attente')
                                <button class="px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                    Marquer comme Payé
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

