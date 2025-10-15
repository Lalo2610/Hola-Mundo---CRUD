<?php
class Mensaje{
    public static function all(): array{
        $pdo = Database::getConnection();
        $st = $pdo->query("select * from mensaje order by id_mensaje desc");
        return $st->fetchAll();
    }
    public static function find(int $id): ?array{
        $pdo = Database::getConnection();
        $st = $pdo->query("select * from mensaje where id_mensaje = ?");
        $st -> execute([$id]);
        $r = $st -> fetch();
        return $r ?: null;
    }
    public static function create(array $d):int {
        $pdo = Database::getConnection();
        $st = $pdo->query("insert into mensaje(titulo, descripcion, imagen, fecha) values (?,?,?,?)");
        $st -> execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }
    public static function updateById(int $id, array $d):bool {
        $pdo = Database::getConnection();
        $st = $pdo->query("update mensaje set titulo=?, descripcion=?, imagen=?, fecha=? where id_mensaje = ?");
        $st -> execute([$d['titulo'], $d['descripcion'], $d['imagen'], $d['fecha']]);
        return (int)$pdo->lastInsertId();
    }
    public static function deleteById(int $id):bool {
        $pdo = Database::getConnection();
        $st = $pdo->query("delete from mensaje where id_mensaje = ?");
        $st -> execute([ $id ]);
        return $st;
    }
}