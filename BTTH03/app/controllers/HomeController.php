<?php 
require_once APP_ROOT.'/app/services/StudentService.php';
class HomeController {
    public function index() {
        //gọi dữ liệu từ StudentService
        $studentService = new StudentService();
        $students = $studentService->getAllStudents();    
        //render dữ liệu ra HomePage
        include APP_ROOT.'/app/views/home/index.php';
    }
}