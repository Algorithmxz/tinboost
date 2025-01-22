<?php

require 'conf.php';

if (isset($_GET['uid_clientele'])) {

    $uid = mysqli_real_escape_string($con, $_GET['uid_clientele']);

    $query = "SELECT * FROM clientele WHERE uid='$uid'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) == 1) {
        $clients = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Client data fetched successfully.',
            'data' => $clients
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 404,
            'message' => 'Client not found.'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_GET['delete_clientele'])) {

    $uid = mysqli_real_escape_string($con, $_GET['delete_clientele']);

    $query = "DELETE FROM clientele WHERE uid='$uid'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Client deleted successfully.'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'Client not deleted.'
        ];
        echo json_encode($res);
        return;
    }
}


if (isset($_GET['reset_analytics'])) {

    $query = "UPDATE analytics SET visits=0, tinder=0, bots=0, errors=0";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        $res = [
            'status' => 200,
            'message' => 'Analytics reset successfully.'
        ];
        echo json_encode($res);
        return;
    } else {
        $res = [
            'status' => 500,
            'message' => 'An error occured, analytics not reset: ' . mysqli_error($con)
        ];
        echo json_encode($res);
        return;
    }
}