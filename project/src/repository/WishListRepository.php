<?php

require_once 'Repository.php';

class WishListRepository extends Repository
{
    public function getWishList (string $userUuid)
    {
        $stmtToPage = $this->database->prepare('SELECT video.url,video.preview_image,video.description
            FROM wish_list
           RIGHT OUTER JOIN video ON video.id = wish_list.id_video
            WHERE `wish_list`.`uuid_user` = :uuid_user');

        $stmtToPage->bindParam(':uuid_user', $userUuid, PDO::PARAM_STR);
        $stmtToPage->execute();
        $listUser = $stmtToPage->fetchAll(PDO::FETCH_ASSOC);
        if ($listUser == false) {
            return null;
        }
        return $listUser;
    }
}