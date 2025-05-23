<?php
require_once('db.php');

function getAllEvents() {
    $con = getConnection();
    $sql = "SELECT event, id, date, category, sponsor, discount FROM events";
    $result = mysqli_query($con, $sql);

    $events = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $events[] = $row;
    }

    return $events;
}

function getFilteredEvents($view, $category) {
    $con = getConnection();

    $sql = "SELECT event, id, date, category, sponsor, discount FROM events WHERE 1=1";

    
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

function addEvent($ename, $edate, $ecat) {
    $con = getConnection();
    $ename = mysqli_real_escape_string($con, $ename);
    $edate = mysqli_real_escape_string($con, $edate);
    $ecat = mysqli_real_escape_string($con, $ecat);

    $sql = "INSERT INTO events (event, date, category) VALUES ('$ename', '$edate', '$ecat')";
    $result = mysqli_query($con, $sql);

    return $result;
}


function addDiscountToEvent($eventid, $sponsor, $discount, $promo1, $promo2, $promo3, $promo4, $promo5) {
    $con = getConnection();

    $sql = "UPDATE events SET 
                sponsor = ?, 
                discount = ?, 
                promo1 = ?, 
                promo2 = ?, 
                promo3 = ?, 
                promo4 = ?, 
                promo5 = ?,
                promo1_status = 'unapplied',
                promo2_status = 'unapplied',
                promo3_status = 'unapplied',
                promo4_status = 'unapplied',
                promo5_status = 'unapplied'
            WHERE id = ?";

    $stmt = mysqli_prepare($con, $sql);
    
    // Corrected to match 8 variables: 7 fields + 1 id
    mysqli_stmt_bind_param($stmt, "sdsssssi", $sponsor, $discount, $promo1, $promo2, $promo3, $promo4, $promo5, $eventid);

    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $status;
}



?>
