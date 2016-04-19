<?php

require_once 'jsonWriter.php';
require_once 'xmlWriter.php';

class WriterFactory
{
    public static function getWriter()
    {
        $format = $_GET['format'];

        $writerName = $format . '_' . 'Writer';

        $writer = new $writerName;

        return $writer;
    }
}