<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\userfav;
use DB;

class suggestionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    }

    // public function gohome()
    // {
    //     return view('userprofile');
    // }

    /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function test()
    {
        $sugg=array();
        $user_id = Auth::user()->id;
        $user_favorites= DB::select("SELECT * FROM userfavs
                                WHERE user_id = :user_id
                             ORDER BY id
                                DESC LIMIT 1", array('user_id' => $user_id))[0];
        
        //$checking =DB::select('SELECT id FROM users WHERE venue = 1');
        //dd($checking);
        $venues_favorites= DB::select('SELECT * FROM userfavs
                            LEFT OUTER JOIN users
                            ON users.id = userfavs.user_id
                                WHERE users.venue = 1');
        //dd($venues_favorites);
        $all_posts = array();
        foreach ($venues_favorites as $venue_favorites) {
            $arr_vfavs= get_object_vars($venue_favorites);
            $arr_ufavs= get_object_vars($user_favorites);
            $size= sizeOf($arr_vfavs);
            //dd($arr_ufavs);
            //for ($i = 3; $i<$size;$i++) {
            foreach ($arr_vfavs as $key => $value) {
                //dd($key);
                if ($arr_vfavs[$key]==$arr_ufavs[$key] &&
                    $arr_vfavs[$key]== 1) {
                    array_push($all_posts, DB::select('SELECT * FROM venueposts WHERE user_id = :user_id', array('user_id'=>$arr_vfavs['id'])));
                    
                    break;
                }
            }
            
            //$suggest_posts= DB ::select("SELECT * FROM venueposts WHERE id IN ($sugg)", $sugg);
            //dd($suggest_posts);
        }
        //dd($all_posts);
        return view('suggestions', compact('all_posts'));
    }
}
