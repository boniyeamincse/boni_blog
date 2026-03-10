<?php

namespace App\Models;

use Core\Model;

class User extends Model
{
    // Find user by email
    public function findUserByEmail($email)
    {
        $stmt = self::$db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }

    // Register user
    public function register($data)
    {
        $stmt = self::$db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        return $stmt->execute([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);
    }

    // Login user
    public function login($email, $password)
    {
        $user = $this->findUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {
            return $user;
        }
        return false;
    }

    // Get user by ID
    public function getUserById($id)
    {
        $stmt = self::$db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
