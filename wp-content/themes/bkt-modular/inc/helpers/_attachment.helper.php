<?php
namespace Brooktec\Helpers;

class Attachment {
    /**
     * @param string $size
     * @return string Thumbnail Uri of current post
     */
    public static function getThumbnailUri($size = 'original') {
        return self::getThumbnailUriById(null, $size);
    }

    /**
     * @param int $post_id
     * @param string $size
     * @return string Thumbnail Uri of post
     */
    public static function getThumbnailUriById($post_id, $size = 'original') {
        $imageArray = wp_get_attachment_image_src( get_post_thumbnail_id($post_id), $size );
        $image_url = ((is_countable($imageArray) && count($imageArray)>0) ? current($imageArray): '');
        return ($_SERVER['HTTPS'] == 'on') ? preg_replace( '/^http:/', 'https:', $image_url ): $image_url ;
    }
}
