<?php
namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\model\Category_repository;

Class CategoryController extends Controller
{

    protected $db;
    public function __construct()
    {
        $this->db = new Category_repository(); 
    }

    // get form category
    public function category()
    {
        $category = $this->db->get();
        // $parent_child = [];
  
        return $this->render('/category/categories', $category);
    }

    // insert category
    public function addCategory(Request $request)
    {
        $body = $request->getBody();
        $name = $body['name'];
        $parent = $body['parent'];
        $this->db->insert($name, $parent);

        
        return $this->category();
    }

    // copy category
    public function copyCategory(Request $request)
    {
        $body = $request->getBody();
        $name = $body['name'];
        $parent = $body['parent'];
        $this->db->insert($name, $parent);

        return $this->category();
    }

    //edit category
    public function editCategory(Request $request)
    {
        $body = $request->getBody();
        $name = $body['name'];
        $parent = $body['parent'];
        $this->db->update($name, $parent);

        return $this->category();
    }
}
?>