<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Creation de tâches') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <form method="POST" action="{{ route('tasks.store') }}" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Tâche</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                                    placeholder="Entrez le titre de la tâche" required>
                            </div>
                    
                            <div class="mb-4">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                                    placeholder="Entrer la description"></textarea>
                            </div>
                    
                            <div class="mb-4">
                                <label for="priority" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Priorité</label>
                                <select id="priority" name="priority"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                                    <option value="Facile">Facile</option>
                                    <option value="Moyen">Moyen</option>
                                    <option value="Difficile">Difficile</option>
                                </select>
                            </div>
                    
                            <div class="mb-4">
                                <label for="due_date" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Date d'échéance</label>
                                <input type="date" id="due_date" name="due_date"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                                    required>
                            </div>
                    
                            <div class="flex justify-end">
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Enregistrer la tâche</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>