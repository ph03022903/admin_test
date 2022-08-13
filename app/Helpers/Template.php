<?php
namespace App\Helpers;
use Config;
class Template {
    public static function HeaderTitleContent($title,$link)
    {
        $html = sprintf('
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">%s</h3>
            </div>
            <div class="col-md-7 align-self-center text-right">
            <a type="button" href="%s" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm mới</a>
            </div>
        </div>
        ',$title,$link);
        return $html;
    }

}
