<div class="sidebar-icon group" :class="open ? 'open' : 'close'" :class="{ 'active': isActive }">
    <i class="material-icons">{{ $icon }}</i>
    <span class="sidebar-tooltip group-hover:scale-100 group-hover:text-sushi group-hover:ps-3 transition-all ease-linear duration-300">
        {{ $title}}
    </span>
</div>