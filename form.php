<?php
session_start();
include "valid/Validator.php";
include "valid/Annotation.php";
include "valid/Category.php";
include "valid/Content.php";
include "valid/Date.php";
include "valid/Email.php";
include "valid/Publish.php";
include "valid/Title.php";
include "valid/Views.php";


    $title = $_POST['title'];
    $annotation = $_POST['annotation'];
    $content = $_POST['content'];
    $email = $_POST['email'];
    $views = (int)$_POST['views'];
    $date = $_POST['date'];
    $category = $_POST['category'];
    $publish = $_POST['publish_in_index'];


    $categoryValidator = new \valid\Category($category);
    $viewsValidator = new \valid\Views($views);
    $titleValidator = new \valid\Title($title);
    $dateValidator = new \valid\Date($date);
    $annotationValidator = new \valid\Annotation($annotation);
    $contentValidator = new \valid\Content($content);
    $emailValidator = new \valid\Email($email);
    $publishValidator = new \valid\Publish($publish);




    $publishResult = $publishValidator->validate();
    $emailResult = $emailValidator->validate();

    $contentResult = $contentValidator->validate();

    $annotationResult = $annotationValidator->validate();

    $dateResult = $dateValidator->validate();

    $titleResult = $titleValidator->validate();

    $categoryResult = $categoryValidator->validate();

    $viewsResult = $viewsValidator->validate();

    if (!$titleResult) {
        $_SESSION['title'] = "Title must be long 3 symvols ";
    }
    if (!$annotationResult) {
        $_SESSION['annotation'] = "Annotation don't have more 500 symbols";
    }
    if (!$contentResult) {
        $_SESSION['content'] = "Content don't have more 30000 symbols";
    }

    if (!$emailResult) {
        $_SESSION['email'] = "Bad email!";
    }

    if (!$dateResult) {
        $_SESSION['date'] = "Date is not valid or dimm current date";
    }

    if (!$viewsResult) {
        $_SESSION["views"] = "Count views must be integer ano > 0";
    }
    if (!$categoryResult) {
        $_SESSION['category'] = 'Please select one on the List';
    }

    if (!$publishResult) {
        $_SESSION['publish_in_index'] = "No radio buttons were checked.";
    }

    if($_SESSION === [])
    {
        $_SESSION['success'] = true;
    }
    header('Location: ' . "index.php");

