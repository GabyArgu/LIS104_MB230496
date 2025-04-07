<?php
require_once 'Controller.php';
require_once 'Models/AutoresModel.php';
class AutoresController extends Controller
{
    private $model;
    private $base = "/MVC";

    function __construct()
    {
        $this->model = new AutoresModel();
    }

    public function index()
    {
        $viewBag = [];
        $viewBag['autores'] = $this->model->get();
        $this->render("index.php", $viewBag);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $result = $this->model->insert($_POST);
            header("Location: $this->base/Autores");
        } else {
            $this->render("form.php");
        }
    }

    public function update($id)
    {
        if (isset($id)) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $result = $this->model->update($_POST);
                header("Location: $this->base/Autores");
            } else {
                $viewBag = [];
                $viewBag['autor'] = $this->model->get($id[0]);
                $this->render("form.php", $viewBag);
            }
        } else {
            header("Location: /Autores");
        }
    }

    public function delete($id)
    {
        $result = $this->model->delete($id[0]);
        header("Location: $this->base/Autores");
    }
}
