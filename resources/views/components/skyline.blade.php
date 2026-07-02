@props(['width' => 160, 'height' => 60, 'stroke' => '#fff', 'strokeWidth' => '1.2', 'simple' => false])

<svg width="{{ $width }}" height="{{ $height }}" viewBox="0 0 160 60" fill="none" {{ $attributes }}>
    <rect x="5" y="35" width="18" height="25" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    @unless ($simple)
        <rect x="8" y="30" width="12" height="5" rx="1" stroke="{{ $stroke }}"
            stroke-width="{{ $strokeWidth }}" />
    @endunless
    <rect x="28" y="25" width="22" height="35" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    @unless ($simple)
        <rect x="32" y="18" width="14" height="7" rx="1" stroke="{{ $stroke }}"
            stroke-width="{{ $strokeWidth }}" />
    @endunless
    <rect x="55" y="30" width="20" height="30" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    <rect x="80" y="20" width="25" height="40" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    @unless ($simple)
        <rect x="84" y="13" width="17" height="7" rx="1" stroke="{{ $stroke }}"
            stroke-width="{{ $strokeWidth }}" />
    @endunless
    <rect x="110" y="28" width="18" height="32" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    <rect x="133" y="32" width="22" height="28" rx="2" stroke="{{ $stroke }}"
        stroke-width="{{ $strokeWidth }}" />
    @unless ($simple)
        <path d="M2 60h156" stroke="{{ $stroke }}" stroke-width="1" opacity="0.5" />
        <circle cx="92" cy="7" r="3" stroke="{{ $stroke }}" stroke-width="{{ $strokeWidth }}" />
        <path d="M88 7h-4M96 7h4M92 3V1M92 11v2" stroke="{{ $stroke }}" stroke-width="1" />
    @endunless
</svg>
