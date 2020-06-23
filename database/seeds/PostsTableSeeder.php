<?php
use App\Post;
use App\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();

        $category = new Category();
        $category->name="PHP";
        $category->save();

        $category = new Category();
        $category->name="JAVASCRIPT";
        $category->save();
        $post = new Post();
        $post->title="post de prueba";
        $post->description="Contenido del post";
        $post->published_at=  Carbon::now();
        $post->category_id=1;
        $post->save();


        $post = new Post();
        $post->title="Segundo post de prueba";
        $post->description="Segundo Contenido del post";
        $post->published_at=  Carbon::now()->subDay(1);
        $post->category_id=1;
        $post->save();


        $post = new Post();
        $post->title="Tercer post de prueba";
        $post->description="Tercer Contenido del post";
        $post->published_at=  Carbon::now()->subDay(2);
        $post->category_id=2;
        $post->save();
    
    }
}
