<section
    class="services-area-seven inner-services-bg"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" style="background-image: url({{ RvMedia::getImageUrl($bgImage) }});"
         @else
             style="background-color: {{ $shortcode->background_color }};" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title-two text-center mb-50">
                    @if ($badge = $shortcode->badge)
                        <span class="sub-title">{{ $badge }}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        @if ($iconImage = $service->getMetaData('icon_image', true))
                            <div class="features-icon-three">
                                {{ RvMedia::image($iconImage, $service->name) }}
                            </div>
                        @elseif ($icon = $service->getMetaData('icon', true))
                            <div class="features-icon-three">
                                <i class="{{ $icon }}"></i>
                            </div>
                        @endif
                        <div class="features-content-three">
                            <h2 class="title">{{ $service->name }}</h2>
                            <p class="truncate-3-custom" title="{{ $description }}">{!! BaseHelper::clean($service->description) !!}</p>
                            <a
                                class="link-btn"
                                href="{{ $service->url }}"
                            >
                                {{ __('View Details') }}
                                <svg
                                    stroke="currentColor"
                                    width="19"
                                    height="12"
                                    viewBox="0 0 19 12"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M17.7521 6.67971H1.24604C0.833386 6.67971 0.5 6.37442 0.5 5.99653C0.5 5.61865 0.833386 5.31335 1.24604 5.31335H15.95L11.4225 1.16728C11.1311 0.900413 11.1311 0.46702 11.4225 0.200151C11.7139 -0.0667171 12.1872 -0.0667171 12.4786 0.200151L18.2814 5.51403C18.4959 5.71045 18.5588 6.00294 18.4422 6.25913C18.3257 6.51319 18.0529 6.67971 17.7521 6.67971Z"
                                        fill="#0055FF"
                                    />
                                    <path
                                        fill="currentColor"
                                        d="M11.9424 12C11.7512 12 11.56 11.9338 11.4155 11.7993C11.1241 11.5324 11.1241 11.0991 11.4155 10.8322L17.2253 5.5119C17.5167 5.24503 17.9899 5.24503 18.2814 5.5119C18.5728 5.77877 18.5728 6.21216 18.2814 6.47903L12.4716 11.7993C12.3247 11.9338 12.1335 12 11.9424 12Z"
                                        fill="#0055FF"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>