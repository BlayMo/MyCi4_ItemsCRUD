<?php

namespace App\Controllers;

use App\Models\ItemsModel;
use App\Entities\ItemsEnt;
use App\Controllers\BaseController;

class Items extends BaseController {

    private $Items_model;
    private $retorno;
    private $oEnt;

    function __construct() {
        $this->Items_model = new ItemsModel;
        $this->oEnt = new ItemsEnt;
        $this->retorno = 'items';
    }

    public function index() {
        $items = $this->Items_model->findAll();

        $data = array(
            'items_data' => $items,
            'session' => $this->session
        );

        echo view('items/items_list', $data);
    }

    public function read($id) {
        $row = $this->Items_model->find($id);
        if ($row) {
            $data = array(
                'id_item' => $row->id_item,
                'iditem' => $row->iditem,
                'id_categoria' => $row->id_categoria,
                'item' => $row->item,
                'texto_item' => $row->texto_item,
                'created_at' => $row->created_at,
                'updated_at' => $row->updated_at,
                'deleted_at' => $row->deleted_at,
            );
            $data['retorno'] = 'items';
            echo view('items/items_read', $data);
        } else {
            $this->session->setFlashdata('message', 'Record Not Found');
            return redirect()->to(site_url($this->retorno));
        }
    }

    public function create() {
        $data = array(
            'button' => 'Create',
            'action' => site_url('items/create_ok'),
            'id_item' => set_value('id_item'),
            'iditem' => set_value('iditem'),
            'id_categoria' => set_value('id_categoria'),
            'item' => set_value('item'),
            'texto_item' => set_value('texto_item'),
            'created_at' => set_value('created_at'),
            'updated_at' => set_value('updated_at'),
            'deleted_at' => set_value('deleted_at'),
        );
        $data['retorno'] = $this->retorno;
        $data['vista'] = 'items/items_form';
        $data['session'] = $this->session;
        $data['validation'] = $this->validation;

        echo view('items/items_form', $data);
    }

    public function create_ok() {

        if (!$this->_rules()) {
            $this->create();
        } else {
            //Metodo alternativo
            $data = $this->request->getPost();
            $oData = $this->oEnt;
            $oData->fill($data);

            $oData->iditem = $this->request->getPost('iditem', FILTER_SANITIZE_STRING);
            $oData->id_categoria = $this->request->getPost('id_categoria', FILTER_SANITIZE_STRING);
            $oData->item = $this->request->getPost('item', FILTER_SANITIZE_STRING);
            $oData->texto_item = $this->request->getPost('texto_item', FILTER_SANITIZE_STRING);
            $oData->created_at = $this->request->getPost('created_at', FILTER_SANITIZE_STRING);
            $oData->updated_at = $this->request->getPost('updated_at', FILTER_SANITIZE_STRING);
            $oData->deleted_at = $this->request->getPost('deleted_at', FILTER_SANITIZE_STRING);


            $this->Items_model->save($oData);
            $this->session->setFlashdata('message', 'Create Record Success');
            return redirect()->to(site_url($this->retorno));
        }
    }

    public function update($id) {
        $row = $this->Items_model->find($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('items/update_ok'),
                'id_item' => set_value('id_item', $row->id_item),
                'iditem' => set_value('iditem', $row->iditem),
                'id_categoria' => set_value('id_categoria', $row->id_categoria),
                'item' => set_value('item', $row->item),
                'texto_item' => set_value('texto_item', $row->texto_item),
                'created_at' => set_value('created_at', $row->created_at),
                'updated_at' => set_value('updated_at', $row->updated_at),
                'deleted_at' => set_value('deleted_at', $row->deleted_at),
            );
            $data['retorno'] = $this->retorno;
            $data['vista'] = 'items/items_form';
            $data['session'] = $this->session;
            $data['validation'] = $this->validation;

            echo view('items/items_form', $data);
        } else {
            $this->session->setFlashdata('message', 'Record Not Found');
            return redirect()->to(site_url($this->retorno));
        }
    }

    public function update_ok() {
        $id = $this->request->getPost('id_item', FILTER_SANITIZE_NUMBER_INT);
        if (!$this->_rules()) {
            $this->update($id);
        } else {
            $oData = $this->Items_model->find($id);
            //Metodo alternativo    
            $data = $this->request->getPost();
            $oData->fill($data);

            $oData->iditem = $this->request->getPost('iditem', FILTER_SANITIZE_STRING);
            $oData->id_categoria = $this->request->getPost('id_categoria', FILTER_SANITIZE_STRING);
            $oData->item = $this->request->getPost('item', FILTER_SANITIZE_STRING);
            $oData->texto_item = $this->request->getPost('texto_item', FILTER_SANITIZE_STRING);
            $oData->created_at = $this->request->getPost('created_at', FILTER_SANITIZE_STRING);
            $oData->updated_at = $this->request->getPost('updated_at', FILTER_SANITIZE_STRING);
            $oData->deleted_at = $this->request->getPost('deleted_at', FILTER_SANITIZE_STRING);


            $this->Items_model->save($oData);
            $this->session->setFlashdata('message', 'Update Record Success');

            return redirect()->to(site_url($this->retorno));
        }
    }

    public function delete($id) {
        $row = $this->Items_model->find($id);


        if ($row) {
            $this->Items_model->delete($id);
            $this->session->setFlashdata('message', 'Delete Record Success');
        } else {
            $this->session->setFlashdata('message', 'Record Not Found');
        }

        return redirect()->to(site_url($this->retorno));
    }

    private function _rules() {
        $this->validation->reset();

        $rules = array(
            'iditem' => ['label' => 'Iditem', 'rules' => 'trim|required|string'],
            'id_categoria' => ['label' => 'Id Categoria', 'rules' => 'trim|required|string'],
            'item' => ['label' => 'Item', 'rules' => 'trim|required|string'],
            'texto_item' => ['label' => 'Texto Item', 'rules' => 'trim|required|string'],
            'created_at' => ['label' => 'Created At', 'rules' => 'trim|required|string'],
            'updated_at' => ['label' => 'Updated At', 'rules' => 'trim|required|string'],
            'deleted_at' => ['label' => 'Deleted At', 'rules' => 'trim|required|string'],
            'id_item' => 'trim');

        $this->validation->setRules($rules);
        return $this->validate($rules);
    }

}
