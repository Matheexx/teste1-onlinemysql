<?php

try {
    $connection = mysqli_connect("3ht.h.filess.io", "teste_diecoffee", "f1fe7f0e3c02444f1eae39a07aecac5d52b4b828", "teste_diecoffee", 3307);
    $users = $connection->query("SELECT * FROM users");
    foreach ($users as $user) {
        echo
        "
        <div style='background-color: #d0d0d0; width: 200px; padding: 5px; border-radius: 7px; border: 1px solid black;'>
            <p>id: {$user['id']}</p>
            <p>username: {$user['name']}</p>
            <p>email: {$user['email']}</p>
            <p>senha: {$user['password']}</p>
        </div>
        ";
    }
} catch (\Throwable $e) {
    echo $e;
}