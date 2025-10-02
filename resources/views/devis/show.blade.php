<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Devis') }} - {{ $devis->numero_devis }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- En-tête du devis -->
                    <div class="flex items-center justify-between mb-8">
                        <div>
                            <h1 class="text-3xl font-bold text-[#2c2c2c]">{{ $devis->numero_devis }}</h1>
                            <p class="text-[#666666] mt-1">Créé le {{ $devis->created_at->format('d/m/Y à H:i') }}</p>
                        </div>
                        <span class="px-4 py-2 text-sm font-medium rounded-full
                            @if($devis->statut === 'en_attente') bg-yellow-100 text-yellow-800
                            @elseif($devis->statut === 'en_cours') bg-blue-100 text-blue-800
                            @elseif($devis->statut === 'accepte') bg-green-100 text-green-800
                            @else bg-red-100 text-red-800
                            @endif">
                            {{ $devis->statut_libelle }}
                        </span>
                    </div>

                    <!-- Informations du devis -->
                    <div class="grid gap-8 md:grid-cols-2">
                        <!-- Détails du projet -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#2c2c2c] mb-4">Détails du Projet</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Type de Service</label>
                                    <p class="text-[#2c2c2c] font-medium">{{ $devis->type_service }}</p>
                                </div>
                                
                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Description</label>
                                    <p class="text-[#2c2c2c]">{{ $devis->description_projet }}</p>
                                </div>

                                @if($devis->besoins_specifiques)
                                    <div>
                                        <label class="block text-sm font-medium text-[#666666]">Besoins Spécifiques</label>
                                        <p class="text-[#2c2c2c]">{{ $devis->besoins_specifiques }}</p>
                                    </div>
                                @endif

                                @if($devis->montant_estime)
                                    <div>
                                        <label class="block text-sm font-medium text-[#666666]">Budget Estimé</label>
                                        <p class="text-[#2c2c2c] font-medium text-lg">{{ number_format($devis->montant_estime, 2) }} €</p>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Informations administratives -->
                        <div>
                            <h2 class="text-xl font-semibold text-[#2c2c2c] mb-4">Informations</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Date de Création</label>
                                    <p class="text-[#2c2c2c]">{{ $devis->created_at->format('d/m/Y à H:i') }}</p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-[#666666]">Dernière Mise à Jour</label>
                                    <p class="text-[#2c2c2c]">{{ $devis->updated_at->format('d/m/Y à H:i') }}</p>
                                </div>

                                @if($devis->date_limite)
                                    <div>
                                        <label class="block text-sm font-medium text-[#666666]">Date Limite</label>
                                        <p class="text-[#2c2c2c]">{{ $devis->date_limite->format('d/m/Y') }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Commentaires de l'admin -->
                    @if($devis->commentaires_admin)
                        <div class="mt-8 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                            <h3 class="text-lg font-semibold text-[#2c2c2c] mb-2">Commentaires de l'équipe</h3>
                            <p class="text-[#666666]">{{ $devis->commentaires_admin }}</p>
                        </div>
                    @endif

                    <!-- Actions -->
                    <div class="flex items-center justify-between mt-8 pt-6 border-t border-gray-200">
                        <a href="{{ route('devis.index') }}" 
                            class="px-6 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                            Retour à la liste
                        </a>
                        
                        <div class="flex space-x-3">
                            @if($devis->statut === 'accepte')
                                <a href="{{ route('factures.index') }}" 
                                    class="px-6 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                    Voir les Factures
                                </a>
                            @endif
                            
                            <a href="{{ route('devis.create') }}" 
                                class="px-6 py-2 bg-[#FF6B35] text-white rounded-md hover:bg-[#e55a2b] transition-colors">
                                Nouvelle Demande
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

