<x-base>
    <x-slot:content>
        <main class="flex justify-center items-center h-screen">
            <div class="absolute top-[5vh] bg-gray-500 w-[70vw] h-[80vh] mt-[5vh] rounded-[30px] flex items-center flex-col">
                <h1 class="text-[35px]">Subscribe</h1>
                <h3 class="text-[20px] mt-[20px]">Subscribe today to access all of our services!</h3>
                <h5>Select from the below membership tiers.</h5>
                <button class="bg-gray-400">
                    <img src="{{ asset('assets/harry_potter_cursed_child.jpg') }}" alt="">
                    <h2 class="text-[30px]">Basic</h2>
                    <h3>Access to borrowing media</h3>
                </button>
            </div>
        </main>
    </x-slot>
</x-base>
