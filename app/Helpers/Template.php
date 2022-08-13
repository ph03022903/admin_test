<?php
namespace App\Helpers;
use Config;
class Template {
    public static function HeaderTitleContent($title,$link)
    {
        $html = sprintf('
        <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h4 class="page-title m-0">%s</h4>
            </div>
            <div class="col-md-4">
                <div class="float-right d-none d-md-block">
                    <div class="dropdown">
                        <a class="btn btn-primary" href="%s" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ion ion-md-add mr-1"></i> Thêm
                        </a>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
        ',$title,$link);
        return $html;
    }

}
