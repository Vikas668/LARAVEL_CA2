<nav class="flex items-center w-full justify-between lg:pl-6 pr-6" x-data="{ open: false }">
    <livewire:logo></livewire:logo>
    <ul class="flex w-fit max-md:hidden md:max-2xl:visible gap-3" class="{ 'hidden': !open, 'flex': open }">
        <livewire:navbar.navlink :href="'/home'" :active="request()->routeIs('/')" :heading="'Home'"/>
        <livewire:navbar.navlink :href="'/about'" :active="request()->routeIs('about')" :heading="'Our Story'"/>
        <livewire:navbar.navlink :href="'/partnership'" :active="request()->routeIs('services')" :heading="'Partnership'"/>
        <livewire:navbar.navlink :href="'/inspiration'" :active="request()->routeIs('contact')" :heading="'Inspiration'"/>
        <livewire:button :href="'/register'" :heading="'Register'"></livewire:button>
    </ul>
    <button class="flex pr-2 md:hidden" @click="open = !open">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#543109ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify">
            <path d="M3 12h18"/>
            <path d="M3 18h18"/>
            <path d="M3 6h18"/>
        </svg>
    </button>
</nav>

