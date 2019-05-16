<?php

namespace App\Http\Controllers;

use App\User;
use App\venuepost;
use Illuminate\Http\Request;
use Auth;
use DB;

class venuepostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }
   

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $venuepost = new venuepost();
        
        $venuepost->title = $request['title'];
        $venuepost->image = "/img/default.png";
        
        if ($request->file('postimage')) {
            $newPath = public_path('images');
            $imgPath = $request->file('postimage')->getClientOriginalName();
            //echo($newPath . "/" . $imgPath);
            move_uploaded_file($imgPath, $newPath);
            //$request->file('postimage')->move(public_path('images'), $request->file('postimage')->getClientOriginalName());
            $path = $request->file('postimage')->store("images");
            
            //dd($path);
            //dd($newPath . "/" . $path);
            $venuepost->image = $path;
        }
        
        $venuepost->description= $request['description'];
        $venuepost->user_id = $user_id;
        $venuepost->save();

        
        $venues =  DB::select('select * from venues where user_id = :user_id', array('user_id' => $user_id));
        $userprofile = User::findOrFail($user_id);
        $posts = DB::select('select * from venueposts where user_id=:user_id', array('user_id' => $user_id));
        


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
            //dd($key);
            foreach ($arr_vfavs as $key => $value) {
                if ($key == "id" ||
                        $key == "user_id" ||
                        $key == "username" ||
                        $key == "email" ||
                        $key == "email_verified_at" ||
                        $key == "password" ||
                        $key == "password_verified_at" ||
                        $key == "approved" ||
                        $key == "remember_token" ||
                        $key == "created_at" ||
                        $key == "updated_at" ||
                        $key == "city" ||
                        $key == "venue" ||
                        $key == "admin" ||
                        $key == "approved_at" ||
    
    
    
    
                        $key == "genre_id") {
                    continue;
                }
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
        // 'all_posts'

        

        if (Auth::user()->venue == 1) {
            $userprofile = User::findOrFail($user_id);

            // dd($userprofile);

            return view('venueprofilehome', compact('venues', 'userprofile', 'posts'));
        }

        return view('home', compact('userprofile', 'all_posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function show(venuepost $venuepost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function edit(venuepost $venuepost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, venuepost $venuepost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\venuepost  $venuepost
     * @return \Illuminate\Http\Response
     */
    public function destroy(venuepost $venuepost)
    {
        //
    }
}
