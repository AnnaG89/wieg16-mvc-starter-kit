<?php
/**
 * Created by PhpStorm.
 * User: annagustafsson
 * Date: 2017-04-26
 * Time: 10:25
 */
require ('config.php');


if (isset($_POST['sName'])) {
    $sql = "INSERT INTO `Artists`(`name`, `birthyear`, `city`)
VALUES(:name, :birthyear, :city)";
    $stm_insert = $pdo->prepare($sql);
    $stm_insert->execute(['name' => $_POST['Sname'], 'birthyear' => $_POST['sBirthyear'], 'city' => $_POST['sCity']]);
    echo "Fotografen är tillagd";
} else {
    echo "Något gick fel";
}