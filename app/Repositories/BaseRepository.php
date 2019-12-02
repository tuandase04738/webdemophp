<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class BaseRepository implements BaseRepositoryInterface
{
    protected $table;

    public function __construct()
    {

    }

    public function all()
    {
        return DB::table($table)->get();
    }

    public function show($id)
    {
        return DB::table($table)->where('id', $id)->first();
    }

    public function store($data)
    {
        return DB::table($table)->store($data);
    }

    public function update($id, $data)
    {
        return DB::table($table)->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return DB::table($table)->where('id', $id)->delete();
    }
}
