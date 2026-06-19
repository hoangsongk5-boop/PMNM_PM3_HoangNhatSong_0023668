<?php
class sinhvien extends Controller {
    public function index() {
        $limit = isset($_GET['pageSize']) ? (int)$_GET['pageSize'] : 5;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
        $search = $_GET['search'] ?? '';

        $model = $this->model('sinhvienModel');
        $result = $model->paging($limit, $offset, $search);

        $this->view("layout/masterlayout", [
            'viewname' => 'sinhvien/index',
            'sinhviens' => $result['sinhviens'],
            'totalPages' => $result['totalPages'],
            'currentPage' => $page,
            'pageSize' => $limit,
            'search' => $search
        ]);
    }

    public function tao() {
        $lopModel = $this->model('lopModel');
        $lops = $lopModel->getAll();
        $this->view('sinhvien/tao', ['lops' => $lops]);
    }
public function edit($id) {
    $model = $this->model('sinhvienModel');
    $lopModel = $this->model('lopModel');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $model->update($id, $_POST);
        header("Location: /qlsv/public/sinhvien/index");
        exit;
    }

    $sv = $model->edit($id); 
    $lops = $lopModel->getAll();
    $this->view('sinhvien/edit', ['sv' => $sv, 'lops' => $lops]);
}
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $model = $this->model('sinhvienModel');
            $data = [
                ':ma_sv' => $_POST['ma_sv'],
                ':ho_ten' => $_POST['ho_ten'],
                ':gioi_tinh' => $_POST['gioi_tinh'],
                ':ngay_sinh' => $_POST['ngay_sinh'],
                ':ma_lop' => $_POST['ma_lop']
            ];
            $model->create($data);
            header('Location: /qlsv/public/sinhvien/index');
            exit;
        }
    }

    public function delete($id) {
        $model = $this->model('sinhvienModel');
        $model->delete($id);
        header('Location: /qlsv/public/sinhvien/index'); 
        exit;
    }

}