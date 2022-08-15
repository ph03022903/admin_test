<?php
namespace App\Helpers;
use Config;
class Template {
    public static function HeaderTitleContent($title,$link,$check)
    {
        $nameButton = $check ? 'Cấu hình' : 'Quay về';
        $icon = $check ? 'fa fa-spin fa-cog' : 'fa fa-rotate-left' ;
        $html = sprintf('
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">%s</h3>
            </div>
            <div class="col-md-7 align-self-center text-right">
            <a type="button" href="%s" class="btn btn-primary"><i class="%s"></i> %s</a>
            </div>
        </div>
        ',$title,$link,$icon,$nameButton);
        return $html;
    }

}
