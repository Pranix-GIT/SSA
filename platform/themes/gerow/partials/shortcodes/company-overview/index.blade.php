@php
    $style = in_array($shortcode->style, ['style-1', 'style-2', 'style-3', 'style-4', 'style-5', 'style-6']) ? $shortcode->style : 'style-1';
@endphp

{!! Theme::partial('shortcodes.company-overview.styles.' . $style, compact('shortcode', 'tabs')) !!}
