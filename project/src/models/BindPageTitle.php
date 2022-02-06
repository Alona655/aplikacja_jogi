<?php

class BindPageTitle
{
    private $id;
    private $name_page;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNamePage(): string
    {
        return $this->name_page;
    }

    /**
     * @param int $name_page
     */
    public function setNamePage(string $name_page): void
    {
        $this->name_page = $name_page;
    }

}