<?php

namespace App\Repositories\User;

use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function register($userId)
    {
        return DB::table($this->table)->where('id', $userId)->update(['status' => 1]);
    }

    public function getAllPendingRequest()
    {
        return DB::table($this->table)->where('status', 1)->get();
    }

    public function handleRequest($userId, $action)
    {
        return DB::table($this->table)->where('id', $userId)->update(['status' => $action]);
    }
}
