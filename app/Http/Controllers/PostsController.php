<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use App\Component\Image;
use App\Models\Post;
use App\Models\PostLocation;

class PostsController extends ApiController
{

    /**
     * Will list resources paginated
     * @param  Request  $request
     * @return Response
     */
    public function get(Request $request){
      $input = $request->only('page', 'limit');
      $posts = Post::with('location')->paginate($input['limit']);
      return $this->responseSuccess($posts);
    }

    public function listNearby(Request $request){
      $input = $request->only('latitude', 'longitude', 'range');

      if(empty($input['range'])){
        $input['range'] = 5;
      }

      $nearyPosts = DB::select("SELECT *
        FROM (SELECT *, geoDistance(".$input['latitude'].", ".$input['longitude'].", latitude, longitude) as distance FROM post_locations WHERE geoDistance(".$input['latitude'].", ".$input['longitude'].", latitude, longitude) < ".$input['range']." ORDER BY created_at DESC) AS location
        LEFT JOIN posts ON posts.id = location.post_id
        ORDER BY distance");
      return $this->responseSuccess($nearyPosts);
    }

    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $post = Post::with('location')->find($id);
      if ($post){
        return $this->responseSuccess($post);
      }
      return $this->responseError(404, 'ResourceNotFound');
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->only('title', 'description', 'latitude', 'longitude', 'location_name');
        // post data array
        $data = [
            'title' => $input['title'],
            'description' => $input['description']
        ];
        // store image if exist
        if ($request->hasFile('image')){
          $image = $request->file('image');
          $instance = new Image();
          $imageName = $instance->storePost($image);
          $data['image'] = $imageName;
        }
        // create post
        $post = Post::create($data);

        // create post location
        PostLocation::create([
              'post_id'   => $post->id,
              'longitude' => $input['longitude'],
              'latitude'  => $input['latitude'],
              'name'     => $input['location_name']
        ]);

        return $this->responseSuccess($post);
    }
}
