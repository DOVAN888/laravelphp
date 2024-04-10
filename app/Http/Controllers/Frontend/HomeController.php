<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontendController;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\SlideRepositoryInterface  as SlideRepository;
use App\Repositories\Interfaces\SystemRepositoryInterface  as SystemRepository;
use App\Services\Interfaces\WidgetServiceInterface  as WidgetService;
use App\Services\Interfaces\SlideServiceInterface  as SlideService;
use App\Enums\SlideEnum;
use App\Events\TestEvent;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;


class HomeController extends FrontendController
{
    protected $language;
    protected $slideRepository;
    protected $systemRepository;
    protected $widgetService;
    protected $slideService;
    protected $system;

    public function __construct(
        SlideRepository $slideRepository,
        WidgetService $widgetService,
        SlideService $slideService,
        SystemRepository $systemRepository,
    ){
        $this->slideRepository = $slideRepository;
        $this->widgetService = $widgetService;
        $this->slideService = $slideService;
        $this->systemRepository = $systemRepository;

        parent::__construct(
           $systemRepository,
        ); 
    }


    public function index(){


        $config = $this->config();
        $widgets = $this->widgetService->getWidget([
            ['keyword' => 'category', 'children' => true],
            ['keyword' => 'category-highlight', 'children' => true],
            ['keyword' => 'category-home', 'children' => true, 'promotion' => TRUE, 'object' => TRUE],
            ['keyword' => 'bestseller','promotion' => true],
            ['keyword' => 'news'],
            ['keyword' => 'commit'],
        ], $this->language);


        $slides = $this->slideService->getSlide([SlideEnum::BANNER, SlideEnum::MAIN, 'banner-footer'], $this->language);
        $system = $this->system;
        $seo = [
            'meta_title' => $this->system['seo_meta_title'],
            'meta_keyword' => $this->system['seo_meta_keyword'],
            'meta_description' => $this->system['seo_meta_description'],
            'meta_image' => $this->system['seo_meta_images'],
            'canonical' => config('app.url'),
        ];
        return view('frontend.homepage.home.index', compact(
            'config',
            'slides',
            'widgets',
            'seo',
            'system',
        ));
    }

    public function ckfinder(){
        return view('frontend.homepage.home.ckfinder');
    }

  

    private function config(){
        return [
            'language' => $this->language,
            'css' => [
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css',
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css'
            ],
            'js' => [
                'frontend/resources/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js'
            ]
        ];
    }

}
