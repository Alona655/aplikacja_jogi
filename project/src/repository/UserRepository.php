<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__ . '/../models/UserInfo.php';

class UserRepository extends Repository
{
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

    public function getInfoUserByUuid($userUuid)
    {
        $stmt = $this->database->prepare('
            SELECT `user_name`,`user_surname`,`birthday`,`weight`,`growth`,`exercises` FROM user_info WHERE uuid = :uuid
        ');

        $stmt->bindParam(':uuid', $userUuid, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }
        return $user;
    }

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

//    public function getUser(string $email): ?User
//    {
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM public.users WHERE email = :email
//        ');
//
//        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//        $stmt->execute();
//
//        $user = $stmt->fetch(PDO::FETCH_ASSOC);
//
//        if ($user == false) {
//            return null;
//        }
//
//        return new User(
//            $user['email'],
//            $user['password'],
//            $user['name'],
//            $user['surname']
//        );
//    }


}