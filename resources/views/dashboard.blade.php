<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tableau de bord') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Message de bienvenue -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900 flex items-center justify-between">
                    <div>
                        <h1 class="text-2xl font-bold text-[#2c2c2c]">{{ __('Bienvenue') }}, {{ auth()->user()->name }} !</h1>
                        <p class="text-[#666666] mt-1">Gérez vos devis et factures depuis votre tableau de bord</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-primary-button>{{ __('Se déconnecter') }}</x-primary-button>
                    </form>
                </div>
            </div>

            <!-- Messages de succès -->
            @if(session('success'))
                <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Actions rapides -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3 mb-8">
                <a href="{{ route('devis.create') }}" 
                    class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-[#FF6B35] rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#2c2c2c]">Nouveau Devis</h3>
                            <p class="text-[#666666] text-sm">Faire une demande de devis</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('devis.index') }}" 
                    class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#2c2c2c]">Mes Devis</h3>
                            <p class="text-[#666666] text-sm">Consulter mes demandes</p>
                        </div>
                    </div>
                </a>

                <a href="{{ route('factures.index') }}" 
                    class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-[#2c2c2c]">Mes Factures</h3>
                            <p class="text-[#666666] text-sm">Consulter mes factures</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Résumé des devis et factures -->
            <div class="grid gap-6 md:grid-cols-2">
                <!-- Derniers devis -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-[#2c2c2c]">Derniers Devis</h2>
                            <a href="{{ route('devis.index') }}" class="text-[#FF6B35] hover:text-[#e55a2b] text-sm font-medium">
                                Voir tout
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        @if(auth()->user()->devis->count() > 0)
                            <div class="space-y-4">
                                @foreach(auth()->user()->devis->take(3) as $devis)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div>
                                            <p class="font-medium text-[#2c2c2c]">{{ $devis->numero_devis }}</p>
                                            <p class="text-sm text-[#666666]">{{ $devis->type_service }}</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full
                                            @if($devis->statut === 'en_attente') bg-yellow-100 text-yellow-800
                                            @elseif($devis->statut === 'en_cours') bg-blue-100 text-blue-800
                                            @elseif($devis->statut === 'accepte') bg-green-100 text-green-800
                                            @else bg-red-100 text-red-800
                                            @endif">
                                            {{ $devis->statut_libelle }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-[#666666] text-center py-4">Aucun devis pour le moment</p>
                        @endif
                    </div>
                </div>

                <!-- Dernières factures -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-semibold text-[#2c2c2c]">Dernières Factures</h2>
                            <a href="{{ route('factures.index') }}" class="text-[#FF6B35] hover:text-[#e55a2b] text-sm font-medium">
                                Voir tout
                            </a>
                        </div>
                    </div>
                    <div class="p-6">
                        @if(auth()->user()->factures->count() > 0)
                            <div class="space-y-4">
                                @foreach(auth()->user()->factures->take(3) as $facture)
                                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                        <div>
                                            <p class="font-medium text-[#2c2c2c]">{{ $facture->numero_facture }}</p>
                                            <p class="text-sm text-[#666666]">{{ number_format($facture->montant_ttc, 2) }} €</p>
                                        </div>
                                        <span class="px-2 py-1 text-xs font-medium rounded-full
                                            @if($facture->statut === 'en_attente') bg-yellow-100 text-yellow-800
                                            @elseif($facture->statut === 'paye') bg-green-100 text-green-800
                                            @elseif($facture->statut === 'en_retard') bg-red-100 text-red-800
                                            @else bg-gray-100 text-gray-800
                                            @endif">
                                            {{ $facture->statut_libelle }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-[#666666] text-center py-4">Aucune facture pour le moment</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
