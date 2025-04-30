<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb bg-light p-3 rounded shadow-sm">
        @foreach ($breadcrumbs as $breadcrumb)
            @if ($breadcrumb['url'] && !$loop->last)
                <li class="breadcrumb-item">
                    <a href="{{ $breadcrumb['url'] }}" class="text-primary">{{ $breadcrumb['name'] }}</a>
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page">
                    {{ $breadcrumb['name'] }}
                </li>
            @endif
        @endforeach
    </ol>
</nav>

<style>
    .breadcrumb {
        font-size: 1rem;
        border-radius: 10px;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        color: #6b7280;
    }
    .breadcrumb-item a {
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .breadcrumb-item a:hover {
        color: #1e3a8a;
    }
    .breadcrumb-item.active {
        color: #1e3a8a;
        font-weight: 500;
    }
</style>
