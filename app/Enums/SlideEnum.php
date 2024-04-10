<?php 
namespace App\Enums;


enum SlideEnum: string {
    
    const BANNER = 'banner-body';
    const MAIN = 'banner-header';

    public static function toArray(){
        return [
            self::BANNER => 'banner-body',
            self::MAIN => 'banner-header'
        ];
    }

}