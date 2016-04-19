<?php

require_once 'Post.php';
require_once 'WriterFactory.php';

$post = new Post();
$post->title = 'Some title';
$post->text = 'Some text';

$writer = WriterFactory::getWriter();
echo $writer->write($post);
