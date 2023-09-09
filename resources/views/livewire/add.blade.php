<form wire:submit.prevent="createPost">

    @csrf

    <div class="py-20 h-screen bg-gray-300 px-2">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">

            <div class="md:flex">
                <div class="w-full px-4 py-6">

                    <!-- Genre Select -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold mb-1">Genres</label>
                        <div x-data="{ isOpen: false, selectedGenres: @entangle('selectedGenres').defer }">
                            <div class="relative">
                                <div @click="isOpen = !isOpen" class="cursor-pointer">
                                    <div class="flex items-center justify-between w-full py-2 pl-3 pr-10 text-gray-800 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300">
                                        <template x-if="selectedGenres.length > 0">
                                            <div class="flex flex-wrap">
                                                <template x-for="(genre, index) in selectedGenres" :key="index">
                                                    <div class="bg-blue-200 rounded-full px-2 py-1 m-1 flex items-center">
                                                        <span class="text-sm font-semibold text-blue-600 mr-1" x-text="genre"></span>
                                                        <button @click="selectedGenres.splice(index, 1)" class="text-red-600 hover:text-red-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>

                                                        </button>
                                                    </div>
                                                </template>
                                            </div>
                                        </template>
                                        <template x-if="selectedGenres.length === 0">
                                            <span class="text-sm text-gray-500">Select Genres</span>
                                        </template>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.293 9.293a1 1 0 011.414-1.414L10 10.586l.293-.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L10 10.586l.293-.293z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div x-show="isOpen" @click.away="isOpen = false" class="absolute z-10 mt-2 w-full bg-white border border-gray-300 shadow-lg">
                                    <div class="max-h-40 overflow-y-auto">
                                        @foreach ($genres as $genre)
                                            <label class="flex items-center justify-between py-2 px-4">
                                                <span class="text-sm font-semibold">{{ $genre->genreName }}</span>
                                                <input
                                                    type="checkbox"
                                                    x-model="selectedGenres"
                                                    value="{{ $genre->genreName }}"
                                                    class="form-checkbox h-5 w-5 text-blue-600"
                                                >
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Type Dropdown -->
                    <div class="mb-4">
                        <label for="type" class="block text-sm font-semibold">Type</label>
                        <div class="relative">
                            <select wire:model="categoryId" id="type" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="fullname" class="block text-sm font-semibold">Title</label>
                        <input id="fullname" wire:model="postTitle" type="text" class="h-12 px-3 w-full border-blue-400 border-2 rounded focus:outline-none focus:border-blue-600">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-semibold">Description</label>
                        <textarea id="description"  wire:model="postDescription"
                        class="h-24 py-1 px-3 w-full border-2 border-blue-400 rounded focus:outline-none focus:border-blue-600 resize-none"></textarea>
                    </div>

                    <div class="mb-4">
                        <span class="block text-sm text-gray-400">You will be able to edit this information later</span>
                    </div>

                    <div class="mb-4">
                        <label for="attachments" class="block text-sm font-semibold">Attachments</label>
                        <div class="relative border-dotted h-32 rounded-lg border-2 border-blue-700 bg-gray-100 flex justify-center items-center">
                            <div class="absolute">
                                <div class="flex flex-col items-center">
                                    <i class="fa fa-folder-open fa-3x text-blue-700"></i>
                                    <span class="block text-gray-400 font-normal">Attach your files here</span>
                                </div>
                            </div>
                            <input id="attachments" type="file" class="h-full w-full opacity-0" wire:model="file">
                        </div>
                    </div>

                    <div class="mt-4 text-right">
                        <a href="#" class="text-blue-600 hover:underline">Cancel</a>
                        <button type="submit" class="ml-2 h-12 w-32 bg-blue-600 rounded text-white hover:bg-blue-700">Create</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

@if(session()->has('success')
    <div x-data="{ show: true }" x-init="setTimeout(() => { show = false })" x-show="show">
        {{ session()->get('success') }}
    </div>
@endif


