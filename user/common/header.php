<?php
include('../db_functions.php');
if(!isset($_SESSION['user'])){
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"  />
    </head>
    <body class="bg-light">
<header>
            <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container">
                    <a class="navbar-brand" href="#"><i class="fa-solid fa-camera"></i> Photogram</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../user/my_creations.php">
                                    <i class="fa-solid fa-list"></i> My Creations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="./create.php"><i class="fa-solid fa-square-plus"></i> Create</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>