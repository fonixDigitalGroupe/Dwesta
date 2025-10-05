<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes Devis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex items-center justify-between">
                <h1 class="text-3xl font-bold text-[#2c2c2c]">Mes Devis</h1>
                <a href="{{ route('devis.create') }}" 
                    class="px-6 py-2 bg-[#FF6B35] text-white rounded-md hover:bg-[#e55a2b] transition-colors font-medium">
                    Nouvelle Demande
                </a>
            </div>

            @if($devis->count() > 0)
                <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($devis as $devi)
                        <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-200 hover:shadow-md transition-shadow">
                            <div class="p-6">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-lg font-semibold text-[#2c2c2c]">
                                        {{ $devi->numero_devis }}
                                    </h3>
                                    <span class="px-3 py-1 text-xs font-medium rounded-full
                                        @if($devi->statut === 'en_attente') bg-yellow-100 text-yellow-800
                                        @elseif($devi->statut === 'en_cours') bg-blue-100 text-blue-800
                                        @elseif($devi->statut === 'accepte') bg-green-100 text-green-800
                                        @else bg-red-100 text-red-800
                                        @endif">
                                        {{ $devi->statut_libelle }}
                                    </span>
                                </div>

                                <div class="space-y-2 mb-4">
                                    <p class="text-sm text-[#666666]">
                                        <span class="font-medium">Service:</span> {{ $devi->type_service }}
                                    </p>
                                    <p class="text-sm text-[#666666]">
                                        <span class="font-medium">Date:</span> {{ $devi->created_at->format('d/m/Y') }}
                                    </p>
                                    @if($devi->montant_estime)
                                        <p class="text-sm text-[#666666]">
                                            <span class="font-medium">Budget:</span> {{ number_format($devi->montant_estime, 2) }} €
                                        </p>
                                    @endif
                                </div>

                                <p class="text-sm text-[#666666] mb-4 line-clamp-3">
                                    {{ Str::limit($devi->description_projet, 100) }}
                                </p>

                                <div class="flex items-center justify-between">
                                    <a href="{{ route('devis.show', $devi) }}" 
                                        class="text-[#FF6B35] hover:text-[#e55a2b] text-sm font-medium">
                                        Voir les détails
                                    </a>
                                    @if($devi->commentaires_admin)
                                        <span class="text-xs text-blue-600">Commentaires disponibles</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-[#2c2c2c] mb-2">Aucun devis pour le moment</h3>
                    <p class="text-[#666666] mb-6">Vous n'avez pas encore fait de demande de devis.</p>
                    <a href="{{ route('devis.create') }}" 
                        class="inline-flex items-center px-6 py-2 bg-[#FF6B35] text-white rounded-md hover:bg-[#e55a2b] transition-colors font-medium">
                        Faire une demande
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

