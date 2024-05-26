<div class=" ">
    @if(request()->routeIs('paketa.index'))
        <x-nav-link class="nav-link text-black " :href="route('paketa.create')"
            :active="request()->routeIs('paketa.create')">
            {{ __('Input Paket A') }}
        </x-nav-link>
    @elseif(request()->routeIs('paketb.index'))
        <x-nav-link class="nav-link text-black" :href="route('paketb.create')"
            :active="request()->routeIs('paketb.create')">
            {{ __('Input Paket B') }}
        </x-nav-link>
    @elseif(request()->routeIs('paketc.index'))
        <x-nav-link class="nav-link text-black" :href="route('paketc.create')"
            :active="request()->routeIs('paketc.create')">
            {{ __('Input Paket C') }}
        </x-nav-link>
    @endif
</div>