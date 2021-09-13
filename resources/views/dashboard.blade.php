<x-app-layout>
    <x-slot name="header">

        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- <div class="flex"> -->
                <!-- Navigation Links -->
                <!-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"> -->
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    Mobile Legends
                </x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                    Free Fire
                </x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('')">
                    PUBG
                </x-nav-link>
                <!-- </div> -->
                <!-- </div> -->


            </div>
        </div>

    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-extrabold">Mobile legends</h3>
                    <div class="py-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- User ID -->
                            <div>
                                <x-label for="userid" :value="__('User ID')" />

                                <x-input id="userid" class="block mt-1 w-full" type="text" name="userid"
                                    :value="old('userid')" placeholder="_ _ _ _ _ _ _ _ _ ( _ _ _ _ )" required
                                    autofocus />
                            </div>

                            <!-- Zone ID -->
                            <!-- <div class="mt-4">
                                <x-label for="zoneid" :value="__('Zone ID')" />

                                <x-input id="zoneid" class="block mt-1 w-full" type="text" name="zoneid" />
                            </div> -->



                            <!-- Grid item -->
                            <div class="py-6 hidden">
                                <div class="grid grid-flow-row grid-cols-5 gap-4">
                                    @for($i=1;$i<=20;$i++) <div
                                        class="py-5 p-2 border-2 text-center hover:bg-gray-50  rounded select-none m-2">
                                        <h2 class="font-bold">{{"Item ".$i}}</h2>
                                        <p class="text-xs font-extralight">Rp.19.500</p>
                                </div>
                                @endfor
                            </div>
                    </div>

                    <!-- Total Harga -->
                    <div class="flex items-center justify-end mt-4">
                        <div class="text-center">
                            <h6 class="text-sm">Total Harga</h6>
                            <h4 class="text-lg text-blue-800">{{ "Rp".$harga }}</h4>
                        </div>
                        <x-button class="ml-3 p-2 text-lg">
                            {{ __('Beli Sekarang') }}
                        </x-button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>