<?php
session_start();
require 'db/database.php';
// Initialize variables for error messages
$errors = [
    'email' => '',
    'password' => ''
];

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Validate fields
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format.';
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    }
    
    // If no errors, check email and password
    if (!array_filter($errors)) {
        try {
            // Check if user exists in the database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];  
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_email'] = $user['email'];

                // Redirect to the dashboard after successful login
                header("Location: /admin"); 
                exit;
            } else {
                $errors['password'] = 'Invalid credentials. Please try again.';
            }
        } catch (PDOException $e) {
            echo "Login failed: " . $e->getMessage();
        }
    }
}
