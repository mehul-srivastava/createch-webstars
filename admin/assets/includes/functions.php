<?php
session_start();
require('assets/includes/db.php');

//check login status
function loginStatus() {
    if(!isset($_SESSION['admin'])) {
        header('location: ./login.php');
        die();
    } else {
        session_regenerate_id();
    }
}


//login
function login() {
    $email = $password = null;

    global $formErrors;
    $formErrors = array();


    if(empty($_POST['email'])) {
        array_push($formErrors, 'Please enter the email!');
    }

    if(empty($_POST['password'])) {
        array_push($formErrors, 'Please enter the passsword!');
    }

    if(empty($formErrors)) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'superadmin@cors.tech' && $password == 'corstech') {
            $_SESSION['admin'] = true;
            header('location: ./');
            exit();
        } else {
            array_push($formErrors, 'Please enter valid credentials!');
        }
    }
}



//logout
function logout() {
    unset($_SESSION['admin']);
    header('location: ./login.php');
    exit();
}


//show contact queries
function getContactQueries() {
    global $conn;
    $rows = array();

    $stmt = $conn->prepare('SELECT * FROM `contact_queries` ORDER BY `id` DESC');
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            while($row = $result->fetch_assoc()) {
                array_push($rows, $row);
            }
            return $rows;
        }
    }
}

//show payments along with user details
function getPaymentDetails($category) {
    global $conn;
    $rows = array();

    $stmt = $conn->prepare("SELECT users.name, users.email, users.phone, bookings.amount, bookings.payment_status, bookings.added_on FROM `bookings` JOIN `users` ON bookings.user_id = users.id WHERE bookings.category = ?");
    $stmt->bind_param('s', $category);
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            while($row = $result->fetch_assoc()) {
                array_push($rows, $row);
            }
            return $rows;
        }
    }
}


//show recent 5 payments
function recentPayments() {
    global $conn;
    $rows = array();

    $stmt = $conn->prepare("SELECT users.name, users.email, users.phone, bookings.amount, bookings.payment_status, bookings.added_on, bookings.category FROM `bookings` JOIN `users` ON bookings.user_id = users.id");
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            while($row = $result->fetch_assoc()) {
                array_push($rows, $row);
            }
            return $rows;
        }
    }
}


//admin analytics
function getsale() {
    global $conn;
    $stmt = $conn->prepare("SELECT SUM(amount) as total_sale FROM `bookings`");
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            $row = $result->fetch_assoc();
            if($row) {
                echo $row['total_sale'] / 100;
            }
        }
    }
}

function getUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT COUNT(id) as total_users FROM `users`");
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            $row = $result->fetch_assoc();
            if($row) {
                echo $row['total_users'];
            }
        }
    }
}

function unattendedQueries() {
    global $conn;
    $rows = array();
    $stmt = $conn->prepare("SELECT COUNT(id) as total_queries FROM `contact_queries` WHERE `status` = 'unattended'");
    $stmt->execute();

    if($stmt) {
        $result = $stmt->get_result();
        if($result) {
            $row = $result->fetch_assoc();
            if($row) {
                echo $row['total_queries'];
            }
        }
    }
}

function updateContactQueries() {
    global $conn;
    $stmt = $conn->prepare("UPDATE `contact_queries` SET `status` = 'attended'");
    $stmt->execute();
}
?>