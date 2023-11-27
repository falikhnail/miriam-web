<?php


namespace App\Repository;

interface BaseRepository {

    public function getAll();

    public function getById($id);

    public function store();

    public function update();

    public function delete();
}
