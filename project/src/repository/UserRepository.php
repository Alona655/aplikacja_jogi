<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../models/UserInfo.php';

class UserRepository extends Repository
{
    /**
     * @param string $email
     * @return User|null
     */
    public function findUserByEmail(string $email): ?User
    {
        $stmt = $this->database->prepare('
            SELECT * FROM users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['email'],
            $user['password'],
            $user['uuid']
        );
    }

    /**
     * @param string $uuid
     * @return User|null
     */
    public function findUserByUuid(string $uuid): ?User
    {
        $stmt = $this->database->prepare('
            SELECT * FROM users WHERE `uuid` = :uuid
        ');

        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }
        return new User(
            $user['email'],
            $user['password'],
            $user['uuid']
        );
    }

    /**
     * @param $userUuid
     * @return mixed|null
     */
    public function getInfoUserByUuid($userUuid)
    {
        $stmt = $this->database->prepare('
            SELECT `user_name`,`user_surname`,`birthday`,`weight`,`growth`,`exercises`, `photo` FROM user_info WHERE uuid = :uuid
        ');

        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }
        return $user;
    }

    public function getActivity ($userUuid)
    {
        $stmt = $this->database->prepare('
            SELECT * FROM users_courses WHERE uuid = :uuid
        ');

        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

        if ($user == false) {
            return 0;
        }

        return count($user) ;
    }

    public function lastCourse ($userUuid)
    {
        $stmt = $this->database->prepare('
           SELECT `courses`.`title`
            FROM users_courses
           LEFT OUTER JOIN courses ON users_courses.`id_courses` = courses.id
           WHERE uuid = :uuid
           LIMIT 5 ');

        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->execute();
        $course = $stmt->fetchAll(PDO::FETCH_COLUMN, 0);

        if ($course == false) {
            return null;
        }

        return $course;
    }


    /**
     * @param array $data
     * @return string
     */
    public function createUser(array $data): string

    {
        $pass = md5($data['password']);

        $user = new User($data['email'], $data['password']);
        $createUuid = $user->setUuid();

        $stmt = $this->database->prepare('
            INSERT INTO  `users` (`uuid`,`email`,`password`)
                VALUE (:uuid, :email, :password)
        ');
        $stmt->bindParam(':uuid', $createUuid, PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $pass, PDO::PARAM_STR);

        $stmt->execute();
        $this->createInfoUser($data, $createUuid);

        return $createUuid;
    }

    /**
     * @param string $uuid
     * @param array $data
     */
    public function updateInfoUser(string $uuid, array $data)
    {
        $photo = "public/upload/image/no-photo.jpg";
        $stmt = $this->database->prepare('
           UPDATE `user_info` SET `user_name` = :user_name,`user_surname` = :user_surname,
                                  `birthday` = :birthday, `weight` = :weight,
                                  `growth` = :growth, `exercises` = :exercises, `photo` = :photo
                                   WHERE `uuid` = :uuid
        ');

        if(isset($data['photo'])){
            $photo =  $this->uploadPhoto($data['photo'], $uuid);
        }
        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->bindParam(':user_name', $data['user_name'], PDO::PARAM_STR);
        $stmt->bindParam(':user_surname', $data['user_surname'], PDO::PARAM_STR);
        $stmt->bindParam(':birthday', $data['birthday'], PDO::PARAM_STR);
        $stmt->bindParam(':weight', $data['weight'], PDO::PARAM_STR);
        $stmt->bindParam(':growth', $data['growth'], PDO::PARAM_STR);
        $stmt->bindParam(':exercises', $data['exercises'], PDO::PARAM_STR);
        $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);

        $stmt->execute();
    }

    /**
     * @param string $uuid
     * @param string $newPassword
     */
    public function updateUserPassword (string $uuid,string $newPassword)
    {
        $stmt = $this->database->prepare('
           UPDATE `users` SET `password` = :password WHERE `uuid` = :uuid
           ');
        $stmt->bindParam(':password', $newPassword, PDO::PARAM_STR);
        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);

        $stmt->execute();
    }

    public function deleteUserByUuid (string $uuid)
    {
        $stmt = $this->database->prepare('
            DELETE FROM `users` WHERE `uuid` = :uuid
        ');
        $stmt->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmt->execute();

        $stmtInfo = $this->database->prepare('
            DELETE FROM `user_info` WHERE `uuid` = :uuid
        ');
        $stmtInfo->bindParam(':uuid', $uuid, PDO::PARAM_STR);
        $stmtInfo->execute();

    }

    /**
     * @param array $data
     * @param string $userUuid
     */
    private function createInfoUser(array $data, string $userUuid)
    {
        $photo = "public/upload/image/no-photo.jpg";
        $stmt = $this->database->prepare('
            INSERT INTO  `user_info` (`uuid`,`user_name`,`user_surname`,`birthday`,`weight`,`growth`,`exercises`,`sex`,`photo`)
                VALUE (:uuid, :user_name, :user_surname, :birthday, :weight, :growth, :exercises, :sex, :photo)
        ');
        if(isset($data['photo'])){
            $photo =  $this->uploadPhoto($data['photo'], $userUuid);
        }
        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->bindParam(':user_name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':user_surname', $data['surname'], PDO::PARAM_STR);
        $stmt->bindParam(':birthday', $data['birthday'], PDO::PARAM_STR);
        $stmt->bindParam(':weight', $data['weight'], PDO::PARAM_STR);
        $stmt->bindParam(':growth', $data['growth'], PDO::PARAM_STR);
        $stmt->bindParam(':exercises', $data['exercises'], PDO::PARAM_STR);
        $stmt->bindParam(':sex', $data['sex'], PDO::PARAM_STR);
        $stmt->bindParam(':photo', $photo, PDO::PARAM_STR);

        $stmt->execute();
    }

    /**
     * @param $data
     * @param $userName
     * @return string
     * @throws Exception
     */
    private function uploadPhoto ($data,$userName)
    {

        $filePath = "public/upload/image/".$userName;

        if (preg_match('/^data:image\/(\w+);base64,/', $data, $type)) {
            $data = substr($data, strpos($data, ',') + 1);
            $type = strtolower($type[1]); // jpg, png, gif

            if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
                throw new \Exception('invalid image type');
            }
            $data = str_replace( ' ', '+', $data );
            $data = base64_decode($data);

            if ($data === false) {
                throw new \Exception('base64_decode failed');
            }
        } else {
            throw new \Exception('did not match data URI with image data');
        }
        $filepas = $filePath.".".$type;
        file_put_contents("{$filePath}."."{$type}", $data);
        return $filepas;
    }
}
