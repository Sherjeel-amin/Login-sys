<?php
require_once '/opt/lampp/htdocs/Login-sys/Config/dbconn.php';
require_once '/opt/lampp/htdocs/Login-sys/Models/UserModel.php';

class LoginController {
    
    private $db;

    public function __construct() {
        $this->db = new Database("localhost", "root", "", "userinfo");
        $this->db->getConnection();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                $message = "Email and password are required.";
            } else {
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                $userModel = new UserModel();
                $user = $userModel->getUserEmail($email);
                
                if ($user) {
                    if ($password == $user['password']) {
                        session_start();
                        $_SESSION['loggedin'] = true;
                        $_SESSION['username'] = $email;
                        $message = "Logged in";
                        header("Location: ../Views/welcome.php");
                        exit();
                    } else {
                        // Invalid password
                        $message = "Invalid Credentials";
                        // It's better to redirect with a message
                        header("Location: ../Views/login.php?message=$message");
                        exit();
                    }
                } else {
                    // User not found
                    $message = "User not found";
                    // It's better to redirect with a message
                    header("Location: ../Views/login.php?message=$message");
                    exit();
                }           
            }
        } else {
            // Redirect if not POST request
            header("Location: ../Views/login.php");
            exit();
        }
    }    
}

$controller = new LoginController();
$controller->login();
?>
