<?php
class home extends Controller {
    public function index() {
        if(!isset($_SESSION['username'])){
            header('Location: /qlsv/public/auth/login');
            exit;
        }
        $svModel = $this->model('sinhvienModel');
        $lopModel = $this->model('lopModel');

        $this->view("layout/masterlayout", [
            'viewname' => 'home/index',
            'totalSV' => $svModel->countAll(),
            'totalLop' => $lopModel->countAll()
        ]);
    }
}