<?php

namespace App\Widgets\Article;

use App\Models\Api\Category;
use Arrilot\Widgets\AbstractWidget;

class Header extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        //
        $categories = Category::all();
        return view('widgets.article.header', [
            'categories' => $categories,
        ]);
    }
}
