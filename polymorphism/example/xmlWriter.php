<?php

require_once 'iWriter.php';

class xml_Writer implements iWriter
{
    public function write(Post $post) {
        $result = '<post>';
        $result .= '<title>' . $post->title . '</title>';
        $result .= '<text>' . $post->text . '</text>';
        $result .= '</post>';

        return $result;
    }
}