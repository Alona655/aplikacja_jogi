<?php

class PageTitle
{
    private $id_page;
    private $title;


    public function __construct(int $id_page, string $title)
    {
        $this->id_page = $id_page;
        $this->title = $title;
    }

    /**
     * @return int
     */
    public function getIdPage(): int
    {
        return $this->id_page;
    }

    /**
     * @param int $id_page
     */
    public function setIdPage(int $id_page): void
    {
        $this->id_page = $id_page;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}