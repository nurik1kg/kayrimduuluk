<?php
namespace common\components;
use Yii;
use yii\base\Component;

/**
 * Created by PhpStorm.
 * User: gnome
 * Date: 3/29/16
 * Time: 6:30 PM
 */
class UtilityComponent extends Component{
    public function imageResize($sourceFile,$targetFile, $targetWidth, $targetHeight){
        //$fn = $_FILES['image']['tmp_name'];
        $size = getimagesize($sourceFile);
        $ratio = $size[0]/$size[1]; // width/height
        if( $ratio > 1) {
            $width = $targetWidth;
            $height = $targetHeight/$ratio;
        }
        else {
            $width = $targetWidth*$ratio;
            $height = $targetHeight;
        }
        $src = imagecreatefromstring(file_get_contents($sourceFile));
        $dst = imagecreatetruecolor($width,$height);
        imagecopyresampled($dst,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
        imagedestroy($src);
        imagepng($dst,$targetFile); // adjust format as needed
        //imagepng($dst,$target_filename_here); // adjust format as needed
        imagedestroy($dst);
    }

    public function imageSizeRatio($sourceFile, $targetWidth, $targetHeight){
        //$fn = $_FILES['image']['tmp_name'];
        $size = getimagesize($sourceFile);
        $ratio = $size[0]/$size[1]; // width/height
        if( $ratio > 1) {
            $width = $targetWidth;
            $height = $targetHeight/$ratio;
        }
        else {
            $width = $targetWidth*$ratio;
            $height = $targetHeight;
        }
        $sizeArr=array('width'=>$width, 'height'=>$height);
        return $sizeArr;
    }

    public function thumbnail_box($img, $box_w, $box_h) {
        //create the image, of the required size
        $new = imagecreatetruecolor($box_w, $box_h);
        if($new === false) {
            //creation failed -- probably not enough memory
            return null;
        }


        //Fill the image with a light grey color
        //(this will be visible in the padding around the image,
        //if the aspect ratios of the image and the thumbnail do not match)
        //Replace this with any color you want, or comment it out for black.
        //I used grey for testing =)
        $fill = imagecolorallocate($new, 200, 200, 205);
        imagefill($new, 0, 0, $fill);

        //compute resize ratio
        $hratio = $box_h / imagesy($img);
        $wratio = $box_w / imagesx($img);
        $ratio = min($hratio, $wratio);

        //if the source is smaller than the thumbnail size,
        //don't resize -- add a margin instead
        //(that is, dont magnify images)
        if($ratio > 1.0)
            $ratio = 1.0;

        //compute sizes
        $sy = floor(imagesy($img) * $ratio);
        $sx = floor(imagesx($img) * $ratio);

        //compute margins
        //Using these margins centers the image in the thumbnail.
        //If you always want the image to the top left,
        //set both of these to 0
        $m_y = floor(($box_h - $sy) / 2);
        $m_x = floor(($box_w - $sx) / 2);

        //Copy the image data, and resample
        //
        //If you want a fast and ugly thumbnail,
        //replace imagecopyresampled with imagecopyresized
        if(!imagecopyresampled($new, $img,
            $m_x, $m_y, //dest x, y (margins)
            0, 0, //src x, y (0,0 means top left)
            $sx, $sy,//dest w, h (resample to this size (computed above)
            imagesx($img), imagesy($img)) //src w, h (the full size of the original)
        ) {
            //copy failed
            imagedestroy($new);
            return null;
        }
        //copy successful
        return $new;
    }
    /**
     * get youtube video ID from URL
     *
     * @param string $url
     * @return string Youtube video id or FALSE if none found.
     */
    function youtube_id_from_url($url) {
        $pattern =
            '%^# Match any youtube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        | youtube\.com  # or youtube.com
          (?:           # Group path alternatives
            /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
        $%x'
        ;
        $result = preg_match($pattern, $url, $matches);
        if ($result) {
            return $matches[1];
        }
        return false;
    }
}