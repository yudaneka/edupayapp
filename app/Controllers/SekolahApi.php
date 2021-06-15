<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SekolahModel;
 
class SekolahApi extends ResourceController
{
    use ResponseTrait;
    // get semua sekolah
    public function index()
    {
        $model = new SekolahModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // get sekolah
    public function show($id = null)
    {
        $model = new SekolahModel();
        $data = $model->getWhere(['id_school' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id'.$id);
        }
    }

    public function create()
    {
        $model = new SekolahModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'slug' => $this->request->getPost('slug'),
            'alamat' => $this->request->getPost('alamat'),
            'phone' => $this->request->getPost('phone'),
            'invoice' => $this->request->getPost('invoice'),
            'gedung' => $this->request->getPost('gedung')
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
        $model = new SekolahModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'name' => $json->name,
                'slug' => $json->slug,
                'alamat' => $json->alamat,
                'phone' => $json->phone,
                'invoice' => $json->invoice,
                'gedung' => $json->gedung
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'name' => $input['name'],
                'slug' => $input['slug'],
                'alamat' => $input['alamat'],
                'phone' => $input['phone'],
                'invoice' => $input['invoice'],
                'gedung' => $input['gedung']
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

    // delete sekolah
    public function delete($id = null)
    {
        $model = new SekolahModel();
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