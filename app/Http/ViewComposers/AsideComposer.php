<?php
namespace App\Http\ViewComposers;
use App\Category;
use App\Tag;
use Illuminate\Contracts\View\View;

/**
 *
 */
class AsideComposer {

	public function compose(View $view) {
		$categorias = Category::all();
		$tags = Tag::all();
		$view->with('category', $categorias)->with('tags', $tags);
	}
}
?>