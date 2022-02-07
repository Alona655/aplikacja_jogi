<?php

require_once 'AppController.php';
require_once 'DefaultController.php';
require_once __DIR__.'/../repository/CatalogRepository.php';
require_once __DIR__.'/../repository/CategoriesRepository.php';

class SearchController extends AppController
{

    public function searchInfo ()
    {
        $catalog = new CatalogRepository();
        $categories = new CategoriesRepository();

        $categoriesList = $categories->getCategories();
        $catalogList = $catalog->getCatalogAll();

        $this->returnInfo(['list' => $catalogList, 'categories' => $categoriesList]);
    }

    public function searchCatalogById ()
    {
        $data = $this->PostDataJson();
        $id = (int)$data['categories'];
        $catalog = new CatalogRepository();
        if($id === 6){
            $catalogList = $catalog->getCatalogAll();
        }else{
            $catalogList = $catalog->getCatalogId($id);
        }
        $this->returnInfo(['list' => $catalogList]);
    }

}