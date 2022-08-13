<?php
namespace App\Helpers;
use Config;
class Template {
    public static function HeaderTitleContent($title,$breadcrumb)
    {
        $html = sprintf('
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">%s</h3>
            </div>
            <div class="col-md-7 align-self-center">
                %s
            </div>
        </div>
        ',$title,$breadcrumb);
        return $html;
    }

}
