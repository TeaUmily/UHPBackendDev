<?php
/**
 * Created by PhpStorm.
 * User: Terezija
 * Date: 25. 10. 2018.
 * Time: 18:16
 */


require_once('./Model/User/UserRepository.php');
require_once('./Model/Category/CategoryRepository.php');
$userRepository = new UserRepository();
$categoryRepository = new CategoryRepository();


$user = $userRepository->getById(1111);
echo "<pre>";
var_dump($user->getFirstName());


$category = $categoryRepository -> getByID (1);
echo "<pre>";
var_dump($category -> getName());

//$stmt->execute();