<?php

interface iWriter
{
    /**
     * @param Post $post
     * @return mixed
     */
    public function write(Post $post);
}