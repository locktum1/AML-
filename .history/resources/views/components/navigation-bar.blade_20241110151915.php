<div class="fixed left-0 top-0 w-full h-[5vh] flex items-center justify-center bg-gray-500 m-0 p-0 box-border font-mono z-50">
    <button id="toggle-sidebar" class="absolute left-0 ml-[10px] h-full"><img class="h-full" draggable="false" src="{{ asset('assets/sidebar-img.png') }}" alt=""></button>
    <h1 class="text-[50px] text-white">AML</h1>
    <input type="text" class="absolute right-0 ml-[10px] h-full radius-[20px] text-[20px]" placeholder="Search">
</div>
<div id="sidebar" class="fixed left-0 top-[5vh] bg-gray-500 w-[20vw] h-[95vh] flex flex-col opacity-0 z-50 transition-opacity duraction-900">
    <ul class="text-center text-white w-full flex items-center">
        <x-side-bar-btn method="GET" route="/" name="Catalogue"></x-side-bar-btn>
    </ul>
    <ul class="absolute bottom-0 flex flex-col text-center text-white w-full flex items-center">
        @if (Auth::check())
            <form action="{{ route('logout') }}" method="POST"></form>
            <x-side-bar-btn includeCSRFToken = true method="POST" route="{{ route('logout') }}" name="Sign out"></x-side-bar-btn>
        @else
            <x-side-bar-btn includeCSRFToken = false method="GET" route="{{ route('login') }}" name="Log in"></x-side-bar-btn>
            <x-side-bar-btn method="GET" route="/" name="Register"></x-side-bar-btn>
        @endif
    </ul>
</div>

<script>
    const button = document.getElementById('toggle-sidebar')
    const sidebar = document.getElementById('sidebar')

    button.addEventListener('click',function(){
        sidebar.classList.toggle('opacity-0');
        sidebar.classList.toggle('opacity-100');
    })
</script>
