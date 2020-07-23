<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Documentation extends Model
{
    //

    public function get($file = 'documentation.md'){

        $content = File::get($this->path($file));
        //이 콘텐트의 내용중 docs/{{version}}을 docs/로 변경해주는 단순한 내용..? 
        return $this->replaceLinks($content);
    }

    public function etag($file){
        $lastModified = File::lastModified($this->path($file, 'docs/images'));

        return md5($file.$lastModified);
    }

    public function image($file)
    {
        return \Image::make($this->path($file, 'docs/images'));
    }

    protected function path($file, $dir='docs'){
        
        $file = ends_with($file, ['.md', '.png']) ? $file : $file . '.md';
        $path = base_path($dir."/".$file);

        /*
        $file = ends_with($file, '.md') ? $file : $file . '.md';
        //$path = base_path('docs'.DIRECTORY_SEPARATOR.$file);
        $path = base_path('docs/'.$file);
        //directory_separator은 그냥 역슬래쉬라고 한다.. \ 
        if(!File::exists($path)){
            abort(404,'요청하신 파일 x');
        }
        */

        return $path;
    }

    protected function replaceLinks($content)
    {
        $aa=str_replace('/docs/{{version}}', '/docs', $content); 
        return $aa;
        
    }
}
