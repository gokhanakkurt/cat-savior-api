<?php namespace App\Component;

use Config;
use Carbon\Carbon;
use File;

/**
 * Handling and performing basic image operations
 * that can be used around the application
 */
class Image {

  private $directories = [
      'post' => '/uploads/posts/'
  ];

   /**
    * Generates http url for given directory and image
    * and returns that url.
  * @param $directory
  * @param $imageName
  * @return url
  */
  public function publicUrl($directory, $imageName)
  {
    return url($this->directories[$directory].$imageName);
  }

  /**
    * Generates http url for given post image returns url
    * and returns that value.
  * @param $imageName
  * @return url
  */
  public function publicUrlPost($imageName)
  {
    return $this->publicUrl('post', $imageName);
  }

  /**
    * Saves the given image to specified directory.
    * This function can be used all over application for preserve images.
  * @param $image
  * @param $directory
  * @return $actualImagaName
  */
  public function store($directory,$image)
  {
    // get image name and extension
    $imageName = $image->getClientOriginalName();
    $imageExtension = substr($imageName, strrpos($imageName,"."));

    // generate a name for that image
    $timestamp = Carbon::now()->getTimestamp();
    $actualImagaName = $timestamp.'_'.md5(str_random(40)).$imageExtension;

      // move that file to public directory
    $publicCaseDir = public_path().$this->directories[$directory];
    if (!file_exists($publicCaseDir)) {
      mkdir($publicCaseDir, 0777, true);
    }
    $image->move($publicCaseDir, $actualImagaName);
    return $actualImagaName;
  }

  /**
    * Saves the given post image to specified directory.
    * This function can be used all over application for preserve images.
  * @param $image
  * @return $actualImagaName
  */
  public function storePost($image)
  {
    return $this->store('post',$image);
  }

  /**
    * Deletes given image from public folder.
    *
  * @param $imageName,
  * @param $directory
  */
  public function destroy($imageName, $directory)
  {
    $subDir = $this->directories[$directory];
    $dir = public_path().$subDir.$imageName;
    File::delete($dir);
  }

  /**
    * Deletes given post image from public folder.
    *
  * @param $imageName,
  */
  public function destroyPost($imageName)
  {
    return $this->destroy($imageName, 'post');
  }

}
