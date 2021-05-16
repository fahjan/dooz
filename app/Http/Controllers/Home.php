<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Menu;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use App\Models\Weather;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class Home extends Controller
{


    public $temp_posts;
    
    public function __construct() {
        View::share('menus', Menu::whereStatus('active')->orderBy('sort')->get());
        $this->events();
        $this->ads();

        $this->temp_posts = Post::whereStatus('active')->where('main_image', '!=', '')->with(['categories'])->whereNull('edited')->whereEvent('post')->latest('id');
        
    }

    public function home()
    {
        $this->erates();
        

        
        $posts = $this->temp_posts;
        $posts = $posts->limit(1000)->get();

        
        
        $sliders = $posts->where('slider', 'yes')->take(10);
        $specials = $posts->where('special', 'yes')->take(6);
        $marquees = $posts->where('marquees', 'yes')->take(20);


        $top = $sliders->pluck('id')->merge($specials->pluck('id'))->merge($marquees->pluck('id'))->toArray();

        $news = clone $this->temp_posts;
        $news = $news->whereHas('categories', function($q) {$q->where('category_id', 3);})->whereNotIn('id',$top)->limit(20)->get();




        $albums = clone $this->temp_posts;
        $albums = $albums->whereHas('categories', function($q) {$q->where('category_id', 13);})->limit(20)->whereNotIn('id',$top)->get();


        $sports = clone $this->temp_posts;
        $sports = $sports->whereHas('categories', function($q) {$q->where('category_id', 4);})->whereNotIn('id',$top)->limit(20)->get();

        $culture = clone $this->temp_posts;
        $culture = $culture->whereHas('categories', function($q) {$q->where('category_id', 7);})->whereNotIn('id',$top)->limit(20)->get();

        $socity = clone $this->temp_posts;
        $socity = $socity->whereHas('categories', function($q) {$q->where('category_id', 6);})->whereNotIn('id',$top)->limit(20)->get();

        $talks = clone $this->temp_posts;
        $talks = $talks->whereHas('categories', function($q) {$q->where('category_id', 9);})->whereNotIn('id',$top)->limit(40)->get();

        $others = clone $this->temp_posts;
        $others = $others->whereHas('categories', function($q) {$q->where('category_id', 8);})->whereNotIn('id',$top)->limit(20)->get();

        $money = clone $this->temp_posts;
        $money = $money->whereHas('categories', function($q) {$q->where('category_id', 10);})->whereNotIn('id',$top)->limit(20)->get();

        
        

        $services = clone $this->temp_posts;
        $services = $services->whereHas('categories', function($q) {$q->where('category_id', 19);})->whereNotIn('id',$top)->limit(20)->get();

        $asks = clone $this->temp_posts;
        $asks = $asks->whereHas('categories', function($q) {$q->where('category_id', 12);})->whereNotIn('id',$top)->limit(20)->get();

        $youth = clone $this->temp_posts;
        $youth = $youth->whereHas('categories', function($q) {$q->where('category_id', 20);})->whereNotIn('id',$top)->limit(20)->get();





        
        $videos = Video::latest('id')->limit(20)->get();
        $weather = Weather::latest('id')->first();

        View::share('page_title', 'دوز');
        View::share('page_description', 'إلى الخبر.. المعلومة والحوار');
        View::share('page_image', asset('assets/images/logo.svg'));
        
        
        return view('website.home', compact(
            'posts', 'sliders', 'specials', 'marquees', 'weather', 'news', 'videos',
            'albums', 'services', 'asks', 'youth', 'sports', 'culture', 'socity', 'talks', 'others',
            'money'
        ));
    }


    public function post(Post $post)
    {

        $posts = clone $this->temp_posts;
        $posts = $posts->whereId($post->id)->with(['relatedposts', 'categories'])->first();
        
        
        $same_category_posts = clone $this->temp_posts;
        $same_category_posts = $same_category_posts->whereHas('categories', function($q) use($post) {
            return $q->where('category_id', $post->categories->first()->id);
        })->latest('id')->limit(20)->get();

        
        $asks = clone $this->temp_posts;
        $asks = $asks->whereHas('categories', function($q) {$q->where('category_id', 12);})->limit(20)->get();

        $randoms = clone $this->temp_posts;
        $randoms = $randoms->whereHas('categories', function($q) {$q->whereIn('category_id', [6, 8, 3, 5, 4, 7]);})->limit(20)->get();

        $videos = Video::latest('id')->limit(20)->get();


        View::share('page_title', $post->title);
        View::share('page_image', url('uploads/678-386/' . $post->image));
        View::share('page_description', $post->leading);

        return view('website.post', compact('post', 'same_category_posts', 'asks', 'randoms', 'videos'));
    }

    public function cat(Category $category)
    {
        
        $posts = clone $this->temp_posts;
        $posts = $posts->whereHas('categories', function($q) use($category) {
            return $q->where('category_id', $category->id);
        })->latest('id')->simplePaginate(50);


        $top_posts = clone $this->temp_posts;
        $top_posts = $top_posts->limit(23)->latest('id')->get();

        View::share('page_title', $category->title);
        View::share('page_image', asset('assets/images/logo.svg'));
        View::share('page_description', 'إلى الخبر.. المعلومة والحوار');

        return view('website.category', compact('category', 'posts', 'top_posts'));
        
    }

    public function search(Request $request)
    {
        $word = $request->get('word');

        $posts = Post::whereStatus('active')->where('main_image', '!=', '')->with(['categories'])->whereNull('edited')->whereEvent('post')->latest('id');
        $posts = $posts->where('title', 'like', '%' . $word . '%')->simplePaginate(50);
        
        $top_posts = clone $this->temp_posts;
        $top_posts = $top_posts->limit(23)->get();

        
        View::share('page_title', 'دوز/ البحث: '. $word);
        View::share('page_image', asset('assets/images/logo.svg'));
        View::share('page_description', 'معالج البحث الذكي في دوز');

        return view('website.search', compact('word', 'posts', 'top_posts'));
    }

    public function news()
    {
        
        
        $posts = clone $this->temp_posts;
        $posts = $posts->where('marquees', 'yes')->simplePaginate(76);
        
        $top_posts = clone $this->temp_posts;
        $top_posts = $top_posts->limit(23)->get();

        
        View::share('page_title', 'دوز/ شريط الأخبار');
        View::share('page_image', asset('assets/images/logo.svg'));
        View::share('page_description', 'إلى الخبر.. المعلومة والحوار');

        return view('website.news', compact('posts', 'top_posts'));
    }

    public function ads()
    {
        $all_ads = Advertisement::whereStatus('active')->latest('id')->get();
        $ads = [];
        $ads['home_top'] = $all_ads->where('location', 1);

       View::share('ads', $ads);
    }

    protected function erates()
    {
        if (Storage::disk('cronjobs')->exists('erates.php')) {
            include(Storage::disk('cronjobs')->path('erates.php'));

            View::share('erates', [
                'usd' => ['a' => substr($usda, 0,  4), 'b' => substr($usdb, 0, 4)],
                'eur' => ['a' => substr($eura, 0,  4), 'b' => substr($eurb, 0, 4)],
                'jod' => ['a' => substr($joda, 0, 4), 'b' => substr($jodb, 0, 4)],
                'egp' => ['a' => substr($egpa, 0, 4), 'b' => substr($egpb, 0, 4)],
                
            ]);
        } else {
            View::share('erates', [
                'usd' => ['a' => '', 'b' => ''],
                'eur' => ['a' => '', 'b' => ''],
                'jod' => ['a' => '', 'b' => ''],
                'egp' => ['a' => '', 'b' => ''],
                
            ]);
        }
    }

    protected function events() {

        $days = Post::whereStatus('active')->where('start_date', '>=', Carbon::now()->subMonths(15))
            ->whereNull('edited')
            ->orderBy('start_date')
            ->whereEvent('active')->get()
            
            ->groupBy(function($row) {
                return Carbon::parse($row->start_date)->format('Y-m-d');
            });
        $events = [];
        foreach($days as $date => $rows) {
            $content = '';
            foreach($rows as $row) {
                $content .= '<a href="'.url('p/'.$row->id).'">'.$row->title.'</a><br>';
            }
            
            $events[] = ['date'=>$date, 'content'=>$content];
        }
       View::share('events', $events);

    }


}
