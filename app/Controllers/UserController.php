<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
  protected $UserModel;
  public function __construct()
  {
    $this->UserModel = new UserModel();
  }
  public function index()
  {
    $data = ['title' => 'Edit Profil', 'back' => '/Settings'];
    return view('Home/view/v_edit_profil', $data);
  }
  public function addUser($id)
  {
    // dd($this->request->getVar());
    $data = [
      'username' => $this->request->getVar('username'),
      'email' => $this->request->getVar('email'),
      'no_telp' => $this->request->getVar('no_telp'),
      'kab' => $this->request->getVar('kab'),
      'prov' => $this->request->getVar('prov'),
      'alamat' => $this->request->getVar('alamat'),
    ];
    $this->UserModel->update($id, $data);
    session()->setFlashData('success', 'Profil berhasil diupdate!');
    return redirect()->to('/EditProfile');
  }
}
