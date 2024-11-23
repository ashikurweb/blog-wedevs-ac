<?php
session_start(); 
require 'db/database.php';
// Initialize variables for error messages
$errors = [
    'name' => '',
    'email' => '',
    'password' => '',
    'password_confirmation' => ''
];

// Handle Form Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $password_confirmation = trim($_POST['password_confirmation'] ?? '');

    // Validate fields
    if (empty($name)) {
        $errors['name'] = 'Full Name is required.';
    }
    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format.';
    } else {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $email_count = $stmt->fetchColumn();
        
        if ($email_count > 0) {
            $errors['email'] = 'This email is already registered.';
        }
    }

    if (empty($password)) {
        $errors['password'] = 'Password is required.';
    } elseif (strlen($password) < 6) {
        $errors['password'] = 'Password must be at least 6 characters.';
    }
    if (empty($password_confirmation)) {
        $errors['password_confirmation'] = 'Password confirmation is required.';
    } elseif ($password !== $password_confirmation) {
        $errors['password_confirmation'] = "Password don't match.";
    }

    // If no errors, insert into database
    if (!array_filter($errors)) {
        try {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashed_password,
            ]);

            // Redirect to admin dashboard
            header("Location: /admin");
            exit;
        } catch (PDOException $e) {
            echo "Registration failed: " . $e->getMessage();
        }
    }
}
