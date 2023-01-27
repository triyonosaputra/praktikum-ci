<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $db       = null;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    public function signin()
    {
        return view('/auth/login');
    }
    public function login()
    {
        $form      = $this->request->getPost();
        $v_login = [
            'email'     => 'required',
            'password'  => 'required',
        ];
        $v_errors = [
            'email'     => ['required'    => 'Email harus diisi'],
            'password'  => ['required'    => 'Password harus diisi'],
        ];

        if (!$this->validate($v_login, $v_errors)) {
            // echo('Email harus diisi');
            // return;
            return redirect()->to(base_url('/auth/signin'))->with('error', "Harap isi Email dan Password.");
        }
        $data = $this->db->table('users')->where('email', $form['email'])->get()->getRow();
        if ($data) {
            $pass = $data->hash;
            $hash = hash('sha256', $form['password'] . $data->salt);
            if ($pass == $hash) {
                # password match
                $data = [
                    'id'            => $data->id,
                    'username'      => $data->username,
                    'email'         => $data->email,
                    'logged_in'     => TRUE,
                ];

                # set session data
                // $session = session();
                // $session->set($data);

                # redirect user to dashboard
                return redirect()->to(base_url('/users'));
            } else {
                # password mismatch
                // echo("Password Salah");
                // return;
                return redirect()->to(base_url('/auth/signin'))->with('error', "Password salah.");
            }
        } else {
            # user not found
            // echo("User Belom terdaftar");
            // return;
            return redirect()->to(base_url('/auth/signin'))->with('error', "User Belum terdaftar. Harap Daftar terlebih dahulu.");
        }
    }
    public function signup()
    {
        return view('/auth/register');
    }
    
    public function register()
    {
        # get form data
        $data =  $this->request->getPost();

        $user = [
            // 'id' => getTableID(),
            'status' => 'A',
            'created' => date('Y-m-d H:i:s'),
            'updated' => '',
            'email' => $data['email'],
            'username' => $data['username'],
            'salt' => uniqid(),
            'hash' => '', // calc later
            // 'role' => 'admin',
        ];
        $user['hash'] = hash("sha256", $data['password'] . $user['salt']);

        $this->db->table('users')->insert($user);
        $success = $this->db->table('users')->insert($user);
        echo"<pre>";
        print_r($user);
        echo"</pre>";
        // return;
        if ($success) {
            return redirect()->to(base_url('/auth/signin'));
        } else {
            die("Failed to register new account");
        }
    }
}
