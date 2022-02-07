<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Categories.php';

class CategoriesRepository extends Repository
{
    public function getCategories ()
    {
        $stmt = $this->database->prepare('
            SELECT * FROM categories
        ');

        $stmt->execute();

        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }


}