<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;
 
class UserApi extends ResourceController
{
    use ResponseTrait;
    // get semua users
    public function index()
    {
        $model = new UserModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // get users
    public function show($id = null)
    {
        $model = new UserModel();
        $data = $model->getWhere(['id_users' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id'.$id);
        }
    }

    public function create()
    {
        $model = new UserModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'role' => $this->request->getPost('role'),
            'status' => $this->request->getPost('status')
        ];
        $data = json_decode(file_get_contents("php://input"));
        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];

        return $this->respondCreated($data, 201);
    }

    // update product
    public function update($id = null)
    {
        $model = new UserModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'name' => $json->name,
                'username' => $json->username,
                'password' => $json->password,
                'phone' => $json->phone,
                'email' => $json->email,
                'role' => $json->role,
                'status' => $json->status
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'name' => $input['name'],
                'username' => $input['username'],
                'password' => $input['password'],
                'phone' => $input['phone'],
                'email' => $input['email'],
                'role' => $input['role'],
                'status' => $input['status']
            ];
        }
        // insert to Database
        $model->update($id, $data);
        $response = [
            'status' => 200,
            'error' => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];
            return $this->respond($response);
    }

    // delete user
    public function delete($id = null)
    {
        $model = new UserModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }
}