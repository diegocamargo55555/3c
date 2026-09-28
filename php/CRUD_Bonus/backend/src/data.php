<?php

require_once __DIR__ . '/../config/config.php';


function db(): PDO {
    static $pdo = null;
    
    if ($pdo === null){
        $pdo = new PDO('sqlite:' . DB_FILE);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
    
    $pdo->exec('CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        age INTEGER NOT NULL,
        email TEXT NOT NULL
    )');
    return $pdo;
}

function normalizeUser(array $user): array
{
    $user['id'] = (int) $user['id'];
    $user['age'] = (int) $user['age'];

    return $user;
}

function loadData(): array
{
    $users = db()->query('SELECT id, name, age, email FROM users ORDER BY id')->fetchAll();

    return ['users' => array_map('normalizeUser', $users)];
}

function findUserById(int $id): ?array
{
    $stmt = db()->prepare('SELECT id, name, age, email FROM users WHERE id = ?');
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    return $user === false ? null : normalizeUser($user);
}


function insertUser(array $user): array
{
    $stmt = db()->prepare('INSERT INTO users (name, age, email) VALUES (?, ?, ?)');
    $stmt->execute([$user['name'], $user['age'], $user['email']]);

    $user['id'] = (int) db()->lastInsertId();

    return $user;
}


function updateUser(int $id, array $fields): ?array
{
    if (findUserById($id) === null) {
        return null;
    }

    $columns = [];
    $values = [];

    // Os nomes de coluna vêm do array_intersect_key do services.php:
    // só 'name', 'age' e 'email' chegam aqui. Os VALORES vão por placeholder.
    foreach ($fields as $column => $value) {
        $columns[] = "$column = ?";
        $values[] = $value;
    }

    $values[] = $id;

    $stmt = db()->prepare('UPDATE users SET ' . implode(', ', $columns) . ' WHERE id = ?');
    $stmt->execute($values);

    return findUserById($id);
}

function deleteUser(int $id): ?array
{
    $user = findUserById($id);

    if ($user === null) {
        return null;
    }

    db()->prepare('DELETE FROM users WHERE id = ?')->execute([$id]);

    return $user;
}