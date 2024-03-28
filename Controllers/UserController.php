<?php
require_once '/opt/lampp/htdocs/Login-sys/Config/dbconn.php';
require_once '/opt/lampp/htdocs/Login-sys/Models/UserModel.php';

class UserController {
    
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "root","", "userinfo");
        $this->db->getConnection();
    }
    public function userExists($username,$email) {
        $userModel = new UserModel();
        $result = $userModel->getUser($username,$email);
        if ($result !== null) {
            return true;
        } else {
            return false;
        }
    }
    public function userNotExists($username, $hashPass, $email) {
        if (!$this->userExists($username,$email)) {
           $userModel = new UserModel();
           $userModel->addUser($username, $hashPass, $email);
           return true;
        }
        return false; 
    }
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $hashPass = password_hash($password, PASSWORD_DEFAULT);

            if ($this->userExists($username,$email)) {
                $message = "User with this username already exists.";
            } else {
                $success = $this->userNotExists($username, $hashPass, $email);

                if ($success) {
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $email;
                    $message = "User registered successfully.";
                    header("Location: /Login-sys/Views/welcome.php");
                    exit();
                } else {
                    $message = "Error occurred while registering user.";
                }
            }
        }
    }
}

$controller = new UserController();
$controller->register();





















































// require_once '/var/www/html/mysite/Models/UserModel.php';

// class UserController {
    
//     public function register() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $username = $_POST['username'];
//             $password = $_POST['password'];
//             $email = $_POST['email'];
//             $userModel = new UserModel();

//             if ($userModel->userExists($username, $email)) {
//                 $message = "User with this username or email already exists.";
//             } else {
//                 $success = $userModel->addUser($username, $password, $email);

//                 if ($success) {
//                     $message = "User registered successfully.";
//                     header("Location: ../Views/welcome.php");
//                 exit();
//                 } else {
//                     $message = "Error occurred while registering user.";
//                 }
//             }
//         }
//         include '../Views/register_view.php'; 
//     }

//     public function login() {
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $email = $_POST['email'];
//             $password = $_POST['password'];

//             $userModel = new UserModel();

//             $user = $userModel->getUserByEmail($email);
//             if ($user && password_verify($password, $user['password'])) {
//                 header("Location: ../Views/welcome.php");
//                 exit();
//             } else {
//                 $message = "Invalid email or password.";
//             }
//         }
//         include '../Views/login_view.php'; 
//     }
//}


// $controller = new UserController();
// $controller->register();

// $controller = new UserController();
// $controller->login();
?>








