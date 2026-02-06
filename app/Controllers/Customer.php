<?php

namespace App\Controllers;
use App\Models\CustomerModel;

class Customer extends BaseController
{
    public function index()
    {
        return view('customer_form');
    }

    public function save()
    {
        $model = new CustomerModel();
        $model->insert([
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone'),
            'address' => $this->request->getPost('address'),
        ]);

        return redirect()->to('/customer/list');
    }

    public function list()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customer_list', $data);
    }
}