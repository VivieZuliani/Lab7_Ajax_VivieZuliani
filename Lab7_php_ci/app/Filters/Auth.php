<?php namespace App\Filters;

use CodeIginter\HTTP\RequestInterface;
use CodeIginter\HTTP\ResponseInterface;
use CodeIginter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        if(!session()->get('logged_in')){
            //maka redirect ke halaman login
            return redirect()->to('/user/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}