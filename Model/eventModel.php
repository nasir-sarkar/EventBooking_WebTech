<?php
require_once('db.php');

function getAllEvents() {
    $con = getConnection();
    $sql = "SELECT event, date, category, sponsor, discount FROM events";
    $result = mysqli_query($con, $sql);

    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }

    return $events;
}

function getFilteredEvents($view, $category) {
    $con = getConnection();

    $sql = "SELECT event, date, category, sponsor, discount FROM events WHERE 1=1";

    
    if (strtolower($category) !== "all") {
        $category = mysqli_real_escape_string($con, $category);
        $sql .= " AND category = '{$category}'";
    }

    
    if ($view == "month") {
        $sql .= " AND MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())";
    } elseif ($view == "week") {
        $sql .= " AND WEEK(date, 1) = WEEK(CURDATE(), 1) AND YEAR(date) = YEAR(CURDATE())";
    } elseif ($view == "day") {
        $sql .= " AND DATE(date) = CURDATE()";
    }

    $result = mysqli_query($con, $sql);

    $filteredEvents = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $filteredEvents[] = $row;
    }

    return $filteredEvents;
}
