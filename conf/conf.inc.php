<?php
date_default_timezone_set('Europe/Paris');

const DB_NAME = "sae202base";
const DB_USER = "sae202user";
const DB_HOST = "localhost";
const DB_PASS = "22400743";


try {
    $dbInstance  = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=UTF8;', DB_USER, DB_PASS);
    $dbInstance->query('SET NAMES utf8;');
    $dbInstance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbInstance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}
