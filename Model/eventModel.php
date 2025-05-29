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
    } 
    elseif ($view == "week") {
        $sql .= " AND WEEK(date, 1) = WEEK(CURDATE(), 1) AND YEAR(date) = YEAR(CURDATE())";
    } 
    elseif ($view == "day") {
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
                promo1_status = 'available',
                promo2_status = 'available',
                promo3_status = 'available',
                promo4_status = 'available',
                promo5_status = 'available'
            WHERE id = ?";

    $stmt = mysqli_prepare($con, $sql);

    mysqli_stmt_bind_param($stmt, "sdsssssi", $sponsor, $discount, $promo1, $promo2, $promo3, $promo4, $promo5, $eventid);

    $status = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    return $status;
}




function deleteEventById($eventid) {
    $con = getConnection();
    $eventid = trim($eventid);

    $sql = "DELETE FROM events WHERE id = ?";
    $stmt = mysqli_prepare($con, $sql);

    if (!$stmt) {
        return false;
    }

    mysqli_stmt_bind_param($stmt, "i", $eventid);

    $status = mysqli_stmt_execute($stmt);

    if (!$status) {
        mysqli_stmt_close($stmt);
        return false;
    }

    $affectedRows = mysqli_stmt_affected_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($affectedRows > 0) {
        return true;
    } 
    else {
        return false;
    }
}



function getAvailablePromoCode($sponsor, $discount) {
    $con = getConnection();
    $sponsor = mysqli_real_escape_string($con, $sponsor);
    $discount = mysqli_real_escape_string($con, $discount);

    $sql = "SELECT id, promo1, promo2, promo3, promo4, promo5, 
                   promo1_status, promo2_status, promo3_status, promo4_status, promo5_status 
            FROM events 
            WHERE sponsor = '$sponsor' AND discount = '$discount'";

    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $promoFields = ['promo1', 'promo2', 'promo3', 'promo4', 'promo5'];
        $statusFields = ['promo1_status', 'promo2_status', 'promo3_status', 'promo4_status', 'promo5_status'];

        for ($i = 0; $i < 5; $i++) {
            if ($row[$statusFields[$i]] === 'available') {
                $promoCode = $row[$promoFields[$i]];
                $statusField = $statusFields[$i];

                $updateSql = "UPDATE events SET $statusField = 'taken' WHERE id = $id";
                mysqli_query($con, $updateSql);

                return $promoCode;
            }
        }
        return "ALL_TAKEN";
    }

    return "NOT_FOUND";
}


function discountEntry($promoCode) {
    $con = getConnection();
    $promoCode = mysqli_real_escape_string($con, $promoCode);

    $sql = "SELECT discount, 
                   promo1, promo2, promo3, promo4, promo5,
                   promo1_status, promo2_status, promo3_status, promo4_status, promo5_status
            FROM events
            WHERE promo1 = '$promoCode' OR 
                  promo2 = '$promoCode' OR 
                  promo3 = '$promoCode' OR 
                  promo4 = '$promoCode' OR 
                  promo5 = '$promoCode'";

    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        for ($i = 1; $i <= 5; $i++) {
            $promoField = "promo{$i}";
            $statusField = "promo{$i}_status";

            if ($row[$promoField] === $promoCode) {
                $status = $row[$statusField];
                $discount = $row['discount'];

                if ($status === 'used') {
                    return ['status' => 'used', 'discount' => $discount];
                } else if ($status === 'taken') {
                    return ['status' => 'taken', 'discount' => $discount];
                } else {
                    return ['status' => 'invalid', 'discount' => $discount];
                }
            }
        }
    }

    return ['status' => 'invalid', 'discount' => false];
}



function updatePromoStatus($eventId, $promoCode) {
    $conn = getConnection();

    $promoFields = ['promo1', 'promo2', 'promo3', 'promo4', 'promo5'];
    $statusField = "";

    foreach ($promoFields as $index => $field) {
        $query = "SELECT $field, {$field}_status FROM events WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $eventId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $value, $status);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if ($value === $promoCode && $status === 'taken') {
            $statusField = $field . "_status";
            break;
        }
    }

    if ($statusField != "") {
        $updateQuery = "UPDATE events SET $statusField = 'used' WHERE id = ?";
        $updateStmt = mysqli_prepare($conn, $updateQuery);
        mysqli_stmt_bind_param($updateStmt, "i", $eventId);
        $result = mysqli_stmt_execute($updateStmt);
        mysqli_stmt_close($updateStmt);
        mysqli_close($conn);
        return $result;
    } else {
        mysqli_close($conn);
        return false;
    }
}






?>
