<?php


class Video
{
    private $id;
    private $url;
    private $preview_image;
    private $description;

    public function __construct($id)
    {
        $this->id = $id;
    }
    public function getUrl(): string
    {
        return $this->url;
    }
}