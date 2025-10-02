<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Demande de Devis') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold text-[#2c2c2c] mb-4">Demande de Devis</h1>
                        <p class="text-[#666666] text-lg">
                            Remplissez ce formulaire pour obtenir un devis personnalisé pour votre projet.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('devis.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Type de Service -->
                        <div>
                            <label for="type_service" class="block text-sm font-medium text-[#2c2c2c] mb-2">
                                Type de Service *
                            </label>
                            <select name="type_service" id="type_service" required
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent">
                                <option value="">Sélectionnez un service</option>
                                <option value="Développement Web">Développement Web</option>
                                <option value="Applications Mobile">Applications Mobile</option>
                                <option value="E-commerce">E-commerce</option>
                                <option value="Consulting Digital">Consulting Digital</option>
                                <option value="Performance & SEO">Performance & SEO</option>
                                <option value="Maintenance & Support">Maintenance & Support</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>

                        <!-- Description du Projet -->
                        <div>
                            <label for="description_projet" class="block text-sm font-medium text-[#2c2c2c] mb-2">
                                Description du Projet *
                            </label>
                            <textarea name="description_projet" id="description_projet" rows="6" required
                                placeholder="Décrivez votre projet en détail..."
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent">{{ old('description_projet') }}</textarea>
                        </div>

                        <!-- Besoins Spécifiques -->
                        <div>
                            <label for="besoins_specifiques" class="block text-sm font-medium text-[#2c2c2c] mb-2">
                                Besoins Spécifiques
                            </label>
                            <textarea name="besoins_specifiques" id="besoins_specifiques" rows="4"
                                placeholder="Précisez vos besoins spécifiques, contraintes techniques, délais, etc."
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent">{{ old('besoins_specifiques') }}</textarea>
                        </div>

                        <!-- Montant Estimé -->
                        <div>
                            <label for="montant_estime" class="block text-sm font-medium text-[#2c2c2c] mb-2">
                                Budget Estimé (optionnel)
                            </label>
                            <div class="relative">
                                <input type="number" name="montant_estime" id="montant_estime" step="0.01" min="0"
                                    placeholder="0.00"
                                    value="{{ old('montant_estime') }}"
                                    class="w-full px-3 py-2 pl-8 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FF6B35] focus:border-transparent">
                                <span class="absolute left-3 top-2 text-gray-500">€</span>
                            </div>
                            <p class="text-sm text-[#666666] mt-1">
                                Indiquez votre budget approximatif si vous en avez un
                            </p>
                        </div>

                        <!-- Boutons -->
                        <div class="flex items-center justify-between pt-6">
                            <a href="{{ route('dashboard') }}" 
                                class="px-6 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-50 transition-colors">
                                Annuler
                            </a>
                            <button type="submit"
                                class="px-8 py-2 bg-[#FF6B35] text-white rounded-md hover:bg-[#e55a2b] transition-colors font-medium">
                                Envoyer la Demande
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

