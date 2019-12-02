<?php

namespace App\Repositories;

interface BaseRepositoryInterface {
    public function all();

    public function show($id);

    public function store($data);

    public function update($id, $data);

    public function destroy($id);
}
