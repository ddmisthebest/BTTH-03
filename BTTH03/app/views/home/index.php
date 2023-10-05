<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hệ thống quản lý Sinh Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý sinh viên</h3>
        <a href="<?= DOMAIN.'/app/view/student/add.php'; ?>" class='btn btn-success'>Thêm sinh viên</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sinh viên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">ID Lớp</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student) { ?>
                    <tr>
                        <th scope="row"><?= $student->getId(); ?></th>
                        <td><?= $student->getTenSinhVien(); ?></td>
                        <td><?= $student->getEmail(); ?></td>
                        <td><?= $student->getNgaySinh(); ?></td>
                        <td><?= $student->getIdLop(); ?></td>
                        <td>
                            <a href="<?= DOMAIN. '/app/views/student/edit.php?id='.$student->getId() ?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a href="<?= DOMAIN. '/app/views/student/remove.php?id='.$student->getId() ?>"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
