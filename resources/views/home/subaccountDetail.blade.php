<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết tài khoản</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card-header h1, .card-header h2 {
            font-size: 1.5rem; /* Responsive font size for mobile */
        }
        .back-button {
            position: absolute;
            top: 15px;
            left: 15px;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
        <div class="card-header text-center bg-primary text-white position-relative">
                <a href="javascript:history.back()" class="back-button">&#8592;</a>
                <h5 class="mb-2">Chi tiết tài khoản</h5>
                <h2><strong>Tổng tài sản (VND)</strong></h2>
                <h1 class="mt-2"><strong>{{ number_format($total_value, 0, ',', '.') }}</strong></h1>
            </div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <h6 class="text-muted">Tài khoản giao dịch</h6>
                        <div class="d-flex align-items-center">
                            <span class="mr-2"><strong>{{ $id }}</strong></span>
                            <span class="badge badge-success">Giao dịch</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <!-- <h6 class="text-muted">Thời gian giao dịch</h6>
                        <strong></strong> -->
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <h6 class="text-muted">Loại tài chính</h6>
                        <strong>
                            <?php
                                $type = 1; // Example value, you can change it dynamically

                                switch ($type) {
                                    case 1:
                                        echo 'Hằng ngày';
                                        break;
                                    case 3:
                                        echo 'Hằng tuần';
                                        break;
                                    case 4:
                                        echo 'Hằng tháng';
                                        break;
                                    default:
                                        echo 'Không xác định'; // Default case for unsupported types
                                }
                            ?>
                        </strong>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <h6 class="text-muted">Thị trường giao dịch</h6>
                        <strong>Cổ phiếu Việt/VN</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <h6 class="text-muted">Vốn ban đầu</h6>
                        <strong>{{ number_format($init_money, 0, ',', '.') }}</strong>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <h6 class="text-muted">Định vị giá thị trường</h6>
                        <strong>{{ number_format($stock_value, 0, ',', '.') }}</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <h6 class="text-muted">Cảnh báo</h6>
                        <strong>{{ number_format($warning, 0, ',', '.') }}</strong>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <h6 class="text-muted">Khoảng cách cảnh báo</h6>
                        <strong>{{ number_format($warning_distance, 0, ',', '.') }}</strong>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <h6 class="text-muted">Thanh lý</h6>
                        <strong>{{ number_format($liquity, 0, ',', '.') }}</strong>
                    </div>
                    <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <h6 class="text-muted">Khoảng cách thanh lý</h6>
                        <strong> {{ number_format($break_distance, 0, ',', '.') }}</strong>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100" id='hisotry-btn'>Lịch sử giao dịch</button>
                    </div>
                    <!-- <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100">Chi tiết giao dịch</button>
                    </div> -->
                    <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100" id='expand-btn'>Kết thúc giao dịch sớm</button>
                    </div>
                    <!-- <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100">Thêm tiền cọc</button>
                    </div> -->
                    <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100" id='extend-finance-btn'>Mở rộng tài chính</button>
                    </div>
                    <!-- <div class="col-12 col-md-4 mb-3">
                        <button class="btn btn-outline-primary w-100">Yêu cầu rút lãi</button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
    console.log("alo");

    document.addEventListener('DOMContentLoaded', function() {
        // Add event listener to the "Mở rộng tài chính" button
        console.log("DOMContentLoaded");

         // Pass PHP data to JavaScript
        const id = <?php echo json_encode($id); ?>;

     
        document.getElementById('extend-finance-btn').addEventListener('click', function() {
            // Redirect to the specified URL
            window.location.href = '/expandsubaccount/'+id;
        });

        document.getElementById('hisotry-btn').addEventListener('click', function() {
            // Redirect to the specified URL
            window.location.href = '/subaccountHistory/'+id;
        });

        document.getElementById('expand-btn').addEventListener('click', function() {
            // Redirect to the specified URL
            window.location.href = '/subaccountterminate/'+id;
        });
    });
</script>
</body>
</html>
