<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;

class ManageController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $listUserWaiting = $this->userRepository->getAllPendingRequest();
        return view('manage', ['listUserWaiting' => $listUserWaiting ]);
    }

    public function acceptForm(Request $request, $id) {
        $this->userRepository->handleRequest($id, $request->status);
        return redirect()->back();
    }
}
