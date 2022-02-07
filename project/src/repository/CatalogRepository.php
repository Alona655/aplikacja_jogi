<?php
require_once 'Repository.php';

class CatalogRepository  extends Repository
{

    public function getCatalogAll ()
    {
        $stmt = $this->database->prepare('
            SELECT  courses.title, courses.rating,video.url,video.preview_image
            FROM `catalog` 
            JOIN courses ON courses.id = catalog.id_course
            JOIN video ON video.id = courses.id_video
        ');
        $stmt->execute();
        $catalog= $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $catalog;
    }
    public function getCatalogId (int $id)
    {
        $stmt = $this->database->prepare('
            SELECT  courses.title, courses.rating,video.url,video.preview_image
            FROM `catalog` 
            JOIN courses ON courses.id = catalog.id_course
            JOIN video ON video.id = courses.id_video
            WHERE catalog.id_course = :id 
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $catalog= $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $catalog;
    }

}