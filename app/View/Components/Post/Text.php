<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class Text extends Component
{
    public  $text;

    public function __construct($text )
    {
        $this->text = $text;
    }

    public function excerpt($text, $limit = 50)
    {
        return Str::limit($text, $limit);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post.text');
    }
}
