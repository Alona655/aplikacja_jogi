<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/BindPageTitle.php';
require_once __DIR__ . '/../models/PageTitle.php';

class PageTitleRepository extends Repository
{
    /**
     * @param string $pageName
     * @return array|null
     */
    public function findTittleByPageName(string $pageName)
    {
        $stmtToPage = $this->database->prepare('SELECT page_title.title
            FROM bind_page_title
           RIGHT OUTER JOIN page_title ON bind_page_title.id = page_title.id_page
            WHERE name_page = :name_page');

        $stmtToPage->bindParam(':name_page', $pageName, PDO::PARAM_STR);
        $stmtToPage->execute();
        $titlePage = $stmtToPage->fetchAll(PDO::FETCH_COLUMN, 0);
        if ($titlePage == false) {
            return null;
        }

        return $titlePage;
    }
}