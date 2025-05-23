<?php
session_start();
require_once('../model/eventModel.php');

$view = $_SESSION['view'];
$category = $_SESSION['category'];

$filteredEvents = getFilteredEvents($view, $category);

$_SESSION['filteredEvents'] = $filteredEvents;

header('location: ../View/Event_Cards.php');
exit;
