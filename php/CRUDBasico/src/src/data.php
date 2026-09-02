<?php

function loadData(string $dataFile): array
{
    return json_decode(file_get_contents($dataFile), true);
}

function saveData(string $dataFile, array $data): void
{
    file_put_contents($dataFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function insertUser(string $dataFile, array $user): array
{
    $data = loadData($dataFile);

    $id = $data['nextId'] ?? 1;
    $data['nextId'] = $id + 1;

    $user['id'] = $id;
    $data['users'][] = $user;

    saveData($dataFile, $data);

    return $user;
}

function updateUser(string $dataFile, int $id, array $fields): ?array
{
    $data = loadData($dataFile);
    $users = $data['users'];

    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] === $id) {
            $data['users'][$i] = array_merge($users[$i], $fields);
            saveData($dataFile, $data);
            return $data['users'][$i];
        }
    }

    return null;
}

function deleteUser(string $dataFile, int $id): ?array
{
    $data = loadData($dataFile);
    $users = $data['users'];

    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] === $id) {
            $user = $users[$i];
            array_splice($users, $i, 1);
            $data['users'] = $users;
            saveData($dataFile, $data);
            return $user;
        }
    }

    return null;
}