@extends('frontend.homepage.layout')

@section('content')
    <div id="homepage" class="homepage">
        @include('frontend.component.slide')
        <div class="panel-category page-setup">
            <div class="uk-container uk-container-center">
                @if(!is_null($widgets['category-highlight']))
                <div class="panel-head">
                    <div class="uk-flex uk-flex-middle">
                        <h2 class="heading-1"><span>Danh mục sản phẩm</span></h2>
                        @include('frontend.component.catalogue', ['category' => $widgets['category-highlight']])
                    </div>
                </div>
                @endif
                @if(!is_null($widgets['category']))
                <div class="panel-body">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($widgets['category']->object as $key => $val)
                            @php
                                $name = $val->languages->first()->pivot->name;
                                $canonical = write_url($val->languages->first()->pivot->canonical);
                                $image = $val->image;
                                $productCount = ($val->products_count) ?? 0;
                            @endphp
                            <div class="swiper-slide">
                                <div class="category-item bg-<?php echo rand(1,7) ?>">
                                    <a href="{{ $image }}" class="image img-scaledown img-zoomin"><img src="{{ $image }}" alt="{{ $name }}"></a>
                                    <div class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a></div>
                                    <div class="total-product">{{ $productCount }} sản phẩm</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @php
            $banner = App\Enums\SlideEnum::BANNER
        @endphp
        @if(count($slides[$banner]['item']))
        <div class="panel-banner">
            <div class="uk-container uk-container-center">
                <div class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        @foreach($slides[$banner]['item'] as $key => $val)
                        @php
                            $name = $val['name'];
                            $description = $val['description'];
                            $image = $val['image'];
                            $canonical = write_url($val['canonical'], false, false);
                        @endphp
                        <div class="uk-width-large-1-3">
                            <div class="banner-item">
                                <span class="image img-cover img-zoomin"><img src="{{ $image }}" alt="{{ $name }}"></span>
                                <div class="banner-overlay">
                                    <div class="banner-title">{!! $description !!}</div>
                                    <a class="btn-shop" href="{{ $canonical }}" title="{{ $name }}">Mua ngay</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif


        @if(!is_null($widgets['category-home']))
        @foreach($widgets['category-home']->object as $category)
        @php
            $catName = $category->languages->first()->pivot->name;
            $catCanonical = write_url($category->languages->first()->pivot->canonical);
            $childrens = ($category->childrens) ?? null ;
        @endphp
        <div class="panel-popular mb30">
            <div class="uk-container uk-container-center">
                <div class="panel-head">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h2 class="heading-1"><a href="{{ $catCanonical }}" title="{{ $catName }}">{{ $catName }}</a></h2>
                        @if(!is_null($childrens))
                        <div class="category-children">
                            <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                                <li class=""><a href="{{ $catCanonical }}" title="{{ $catName }}">Tất cả</a></li>
                                @foreach($childrens as $children)
                                @php
                                    $childName = $children->languages->first()->pivot->name;
                                    $childCanonical = write_url($children->languages->first()->pivot->canonical);
                                @endphp
                                <li class=""><a href="{{ $childCanonical }}" title="{{ $childName }}">{{ $childName }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                </div>
                @if(isset($category->products) && count($category->products))
                <div class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        @foreach($category->products as $product)
                        <div class="uk-width-large-1-5 mb20">
                            @include('frontend.component.product-item', ['product' => $product])
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endforeach
        @endif
        @php
            $name = $widgets['bestseller']->name;
            $image = ($widgets['bestseller']->album[0]) ?? '';
            $description = $widgets['bestseller']->description[$config['language']]
        @endphp
        <div class="panel-bestseller">
            <div class="uk-container uk-container-center">
                <div class="panel-head">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h2 class="heading-1"><span>{{ $name }}</span></h2>
                        @include('frontend.component.catalogue', ['category' => $widgets['category-highlight']])
                    </div>
                </div>
               
                <div class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        <div class="uk-width-large-1-4">
                            <div class="best-seller-banner">
                                <a class="image img-cover"><img src="{{ $image }}" alt="{{ $image }}"></a>
                                <div class="banner-title">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-large-3-4">
                            @if(!is_null($widgets['bestseller']->object))
                            <div class="product-wrapper">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        @foreach($widgets['bestseller']->object as $key => $val)
                                        <div class="swiper-slide">
                                            @include('frontend.component.product-item', ['product'  => $val])
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(!is_null($widgets['news']->object))
        @php
            $widgetName = $widgets['news']->name;
        @endphp
        <div class="panel-deal page-setup">
            <div class="uk-container uk-container-center">
                <div class="panel-head">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <h2 class="heading-1"><span>{{ $widgetName }}</span></h2>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="uk-grid uk-grid-medium">
                        @foreach($widgets['news']->object as $key => $val)
                        <div class="uk-width-large-1-4">
                            @include('frontend.component.product-item-2', ['post' => $val])
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
        @if(count($slides['banner-footer']['item']))
        @foreach($slides['banner-footer']['item'] as $key => $val)
        <div class="uk-container uk-container-center">
            <div class="panel-group">
                <div class="panel-body">
                    <div class="group-title">{!! $val['name'] !!}</div>
                    <div class="group-description">{{ $val['description'] }}</div>
                    <span class="image img-scaledowm"><img src="{{ $val['image'] }}" alt="{!! $val['name'] !!}"></span>
                </div>
            </div>
        </div>
        @endforeach
        @endif


        @if(!is_null($widgets['commit']->object))
        <div class="panel-commit">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-medium">
                    @foreach($widgets['commit']->object as $key => $val)
                    @php
                        $name = $val->languages->first()->pivot->name;
                        $image = image(($val->image) ?? '');
                        $description = cut_string_and_decode($val->languages->first()->pivot->description, 100);
                    @endphp
                    <div class="uk-width-large-1-5">
                        <div class="commit-item">
                            <div class="uk-flex uk-flex-middle">
                                <span class="image"><img src="{{ $image }}" alt="{{ $name }}"></span>
                                <div class="info">
                                    <div class="title">{{ $name }}</div>
                                    <div class="description">{{ $description; }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
