<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @param string $title
     * @param string $content
     * @param string $link
     * @return mixed
     */
    public function sysMsg($content,$title='提示信息',$link=''){

        return view('admin.sysmsg',[
            'title'=>$title,
            'content'=>$content,
            'link'=>$link
        ]);
    }
}
