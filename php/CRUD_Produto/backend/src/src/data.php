<?php

require_once __DIR__ . '/../config/config.php';

function loadData(): array
{
    return json_decode(file_get_contents(DATA_FILE), true);
}

function saveData(array $data): void
{
    file_put_contents(DATA_FILE, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

function insertUser(array $user): array
{
    $data = loadData();

    $id = $data['nextId'] ?? 1;
    $data['nextId'] = $id + 1;

    $user['id'] = $id;
    $data['products'][] = $user;

    saveData($data);

    return $user;
}

function updateProduct(int $id, array $fields): ?array
{
    $data = loadData();
    $products = $data['products'];

    for ($i = 0; $i < count($products); $i++) {
        if ($products[$i]['id'] === $id) {
            $data['products'][$i] = array_merge($products[$i], $fields);
            saveData($data);
            return $data['products'][$i];
        }
    }

    return null;
}

function deleteUser(int $id): ?array
{
    $data = loadData();
    $products = $data['products'];

    for ($i = 0; $i < count($products); $i++) {
        if ($products[$i]['id'] === $id) {
            $user = $products[$i];
            array_splice($products, $i, 1);
            $data['products'] = $products;
            saveData($data);
            return $user;
        }
    }

    return null;
}