<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Realshadow\Redtube\Filters\VideoFilter;
use Realshadow\Redtube\Enumerators\Thumbsize;
use Realshadow\Redtube\Enumerators\Period;
use Realshadow\Redtube\Enumerators\OrderBy;

class RedTubeApiController extends Controller{

    /* CLASS CONSTRUCTOR CLIENT REDTUBEAPI */
    public function __construct(){
        $this->redtube = new \Realshadow\Redtube\Redtube;
    }

    /* GET CATEGORIES */
    public function categories(){
       
        $getAll = $this->redtube->categories->getAll();

        dd($getAll);

        // return view('welcome', compact('getAll'));
    }

    /* SEARCH FOR ALL THE FILTERS */
    public function searchAll(){      
        $filter = VideoFilter::create()->page(1)
                                       ->search('lesbian')
                                       ->tags(['blonde'])
                                       ->stars(['Veronica Rodriguez'])
                                       ->thumbsize(Thumbsize::BIG)
                                       ->period(Period::MONTHLY)
                                       ->orderBy(OrderBy::RATING);

        $findByVideos = $this->redtube->videos->findBy($filter);
        dd($findByVideos);
    }

    /* SEARCH FOR TITTLE */
    public function searchSpecificTitle(){      
        $filter = VideoFilter::create()->page(1)
                                       ->search('Veronica Rodriguez');
                                       // ->tags(['blonde'])
                                       // ->stars(['Veronica Rodriguez'])
                                       // ->thumbsize(Thumbsize::BIG)
                                       // ->period(Period::ALL_TIME)
                                       // ->orderBy(OrderBy::RATING);

        $findByVideos = $this->redtube->videos->findBy($filter);
        dd($findByVideos);
    }

    /* SEARCH FOR TAGS */
    public function searchSpecificTags(){      
        $filter = VideoFilter::create()->page(1)
                                       // ->search('Veronica Rodriguez')
                                       ->tags(['blonde']);
                                       // ->stars(['Veronica Rodriguez'])
                                       // ->thumbsize(Thumbsize::BIG)
                                       // ->period(Period::ALL_TIME)
                                       // ->orderBy(OrderBy::RATING);

        $findByVideos = $this->redtube->videos->findBy($filter);
        dd($findByVideos);
    }

    /* SEARCH FOR STARS */
    public function searchSpecificStars(){      
        $filter = VideoFilter::create()->page(1)
                                       // ->search('Veronica Rodriguez')
                                       // ->tags(['blonde'])
                                       ->stars(['Veronica']);
                                       // ->thumbsize(Thumbsize::BIG)
                                       // ->period(Period::ALL_TIME)
                                       // ->orderBy(OrderBy::RATING);

        $findByVideos = $this->redtube->videos->findBy($filter);
        dd($findByVideos);
    }

    /* SEARCH FOR THUMBSIZE */
    public function searchSpecificThumbsize(){      
        $filter = VideoFilter::create()->page(1)
                                       // ->search('Veronica Rodriguez')
                                       // ->tags(['blonde'])
                                       // ->stars(['Veronica']);
                                       ->thumbsize(Thumbsize::BIG);
                                       // ->period(Period::ALL_TIME)
                                       // ->orderBy(OrderBy::RATING);

        $findByVideos = $this->redtube->videos->findBy($filter);
        dd($findByVideos);
    }
}