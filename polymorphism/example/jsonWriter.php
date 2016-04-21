<?php

require_once 'iWriter.php';

class json_Writer implements iWriter
{
    /**
     * @param Post $post
     * @return string
     */
    public function write(Post $post) {
        $array = array(
            'title' => $post->title,
            'text' => $post->text
        );

        return json_encode($array);
    }
}