<footer class="footer">
    <div class="uk-container uk-container-center">
        <div class="footer-upper">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-5">
                    <div class="footer-contact">
                        <a href="" class="image img-scaledown"><img src="{{ $system['homepage_logo'] }}" alt="{{ $system['seo_meta_title'] }}"></a>
                        <div class="footer-slogan">{{ $system['homepage_slogan'] }}</div>
                        <div class="company-address">
                            <div class="address">{{ $system['contact_address'] }}</div>
                            <div class="phone">Hotline: {{ $system['contact_hotline'] }}</div>
                            <div class="email">Email: {{ $system['contact_email'] }}</div>
                            <div class="hour">Giờ làm việc: 10:00 - 18:00, Mon - Sat</div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-3-5">
                    @if(isset($menu['menu-footer']) && count($menu['menu-footer']))
                    <div class="footer-menu">
                        <div class="uk-grid uk-grid-medium">
                           @foreach($menu['menu-footer'] as $key => $val)
                           @php
                                $name = $val['item']->languages->first()->pivot->name;
                                $canonical = write_url($val['item']->languages->first()->pivot->canonical, true, true);
                            @endphp
                            <div class="uk-width-large-1-4">
                                <div class="ft-menu">
                                    <div class="heading">{{ $name }}</div>
                                    @if(isset($val['children']) && count($val['children']) )
                                    <ul class="uk-list uk-clearfix">
                                        @foreach($val['children'] as $children)
                                        @php
                                            $childName = $children['item']->languages->first()->pivot->name;
                                            $childCanonical = write_url($children['item']->languages->first()->pivot->canonical, true, true);
                                        @endphp
                                        <li><a href="{{ $childCanonical }}" title="{{ $childName }}">{{ $childName }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class="uk-width-large-1-5">
                    <div class="fanpage-facebook">
                        <div class="ft-menu">
                            <div class="heading">Fanpage Facebook</div>
                            <div class="fanpage">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="uk-container uk-container-center">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="copyright-text">{!! $system['homepage_copyright'] !!}</div>
                <div class="copyright-contact">
                    <div class="uk-flex uk-flex-middle">
                        <div class="phone-item">
                            <div class="p">Hotline: {{ $system['contact_hotline'] }}</div>
                            <div class="worktime">Làm việc: 8:00 - 22:00</div>
                        </div>
                        <div class="phone-item">
                            <div class="p">Support: {{ $system['contact_phone'] }}</div>
                            <div class="worktime">Hỗ trợ 24/7</div>
                        </div>
                    </div>
                </div>
                <div class="social">
                    <div class="uk-flex uk-flex-middle">
                        <div class="span">Follow us:</div>
                        <div class="social-list">
                            @php
                                $social = ['facebook', 'twitter', 'youtube'];
                            @endphp
                            <div class="uk-flex uk-flex-middle">
                                @foreach($social as $key => $val)
                                <a target="_blank" href="{{ $system['social_'.$val] }}" class=""><i class="fa fa-{{ $val }}"></i></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>