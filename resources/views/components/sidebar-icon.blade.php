<div class="sidebar-icon group" :class="open ? 'open' : 'close'">
    <i class="material-icons">{{ $icon }}</i>
    <span class="sidebar-tooltip group-hover:scale-100">
        {{ $title}}
    </span>
</div>