<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mở rộng tài chính</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .card {
            border: none;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            background-color: #eef1f7;
        }

        .btn-confirm {
            background-color: #4e4eff;
            color: white;
            font-weight: bold;
            border-radius: 30px;
            padding: 10px 20px;
            width: 100%;
            border: none;
        }

        .btn-confirm:hover {
            background-color: #3b3bff;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .value {
            float: right;
        }

        .highlight-box {
            background-color: #eef1f7;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .highlight-box p {
            margin: 0;
        }

        .highlight-box .value {
            font-weight: bold;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .highlight-new-limit {
            color: red;
            font-weight: bold;
            float: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h5 class="text-center mt-4">Mở rộng tài chính</h5>

        <!-- Section for initial deposit and limit -->
        <div class="highlight-box">
            <p>Số tiền cọc ban đầu <span class="value" id='deposit'>2.000.000 VND</span></p>
            <p>Giới hạn giao dịch ban đầu <span class="value" id='money'>22.000.000 VND</span></p>
        </div>

        <!-- Input for additional deposit -->
        <div class="section">
            <label class="section-title">Thêm tiền cọc</label>
            <input type="number" class="input-field" placeholder="0">
        </div>

        <!-- Section for management fee and total -->
        <div class="highlight-box">
            <p>Phí quản lý <span class="value" id='fee'>0</span></p>
            <p>Tổng cộng <span class="value" id='sumvalue'>0</span></p>
        </div>

        <!-- New transaction limit -->
        <div class="highlight-box">
            <p>Giới hạn giao dịch mới <span class="highlight-new-limit">0</span></p>
        </div>

        <!-- Confirm button -->
        <button class="btn-confirm" onclick="handleConfirm()">Xác nhận</button>
    </div>

    <script>
        //TODO: lay ti le tư api
        // Example: Add interactivity for updating the new limit
        const inputField = document.querySelector('.input-field');
        const newLimit = document.querySelector('.highlight-new-limit');
        const sumvalue = document.getElementById('sumvalue');
        const fee = document.getElementById('fee');
        const money = document.getElementById('money');
        const deposit = document.getElementById('deposit');
        const managementFee = 0; // Assume there's no management fee for simplicity
        const initialLimit = 22000000; // Initial transaction limit in VND


        const subaccount = @json($subaccount);
       
        const marginRatio = subaccount.money / subaccount.deposit;
        const subaccountId = subaccount.id;

        money.textContent = subaccount.money.toLocaleString() + ' VND';
        deposit.textContent = subaccount.deposit.toLocaleString() + ' VND';

        let isHandlingInput = false;

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        inputField.addEventListener('input', function () {
            // const additionalDeposit = parseFloat(inputField.value) || 0;
            // const totalLimit =  additionalDeposit * marginRatio + subaccount.money;
            // fee.textContent = (additionalDeposit * subaccount.percent/100 >=1?additionalDeposit * subaccount.percent/100 :0).toLocaleString()   ;
            // newLimit.textContent = totalLimit.toLocaleString() + ' VND';
            // sumvalue.textContent = (additionalDeposit + (additionalDeposit * subaccount.percent/100 >=1?additionalDeposit * subaccount.percent/100 :0 )).toLocaleString();
            
            if (isHandlingInput) return; // Prevent recursive calls
                isHandlingInput = true;

                const additionalDeposit = parseFloat(inputField.value) || 0;
                const totalLimit = additionalDeposit * marginRatio + subaccount.money;

                // Update values
                fee.textContent = (additionalDeposit * subaccount.percent / 100 >= 1 ? additionalDeposit * subaccount.percent / 100 : 0).toLocaleString();
                newLimit.textContent = totalLimit.toLocaleString() + ' VND';
                sumvalue.textContent = (additionalDeposit + (additionalDeposit * subaccount.percent / 100 >= 1 ? additionalDeposit * subaccount.percent / 100 : 0)).toLocaleString();

                // Optionally update input value without triggering another `input` event
                // inputField.value = additionalDeposit.toLocaleString(); // Avoid triggering a loop

                isHandlingInput = false;
        
        });


         // Function to handle the confirm button click event
    function handleConfirm() {
        const additionalDeposit = parseFloat(inputField.value) || 0;
        const totalLimit = parseFloat(newLimit.textContent.replace(/,/g, '')) || 0;
        const totalFee = parseFloat(fee.textContent.replace(/,/g, '')) || 0;
        const totalSum = parseFloat(sumvalue.textContent.replace(/,/g, '')) || 0;

        // Log the values (or handle them as needed)
        console.log("Additional Deposit:", additionalDeposit);
        console.log("New Limit:", totalLimit);
        console.log("Management Fee:", totalFee);
        console.log("Total Amount:", totalSum);

        // Example: Show an alert with confirmation details
        // alert(
        //     `Xác nhận thành công!\n` +
        //     `Thêm tiền cọc: ${additionalDeposit.toLocaleString()} VND\n` +
        //     `Giới hạn giao dịch mới: ${totalLimit.toLocaleString()} VND\n` +
        //     `Phí quản lý: ${totalFee.toLocaleString()} VND\n` +
        //     `Tổng cộng: ${totalSum.toLocaleString()} VND`
        // );

       // Create a FormData object
        const formData = new FormData();

        // Add key-value pairs to the FormData object
        formData.append('additionalDeposit', additionalDeposit); // Example value
        formData.append('newLimit', totalLimit); // Example value
        formData.append('managementFee', totalFee); // Example value
        formData.append('totalAmount', totalSum); // Example value
        formData.append('additionalAmount', additionalDeposit * marginRatio);
        formData.append('subaccountId',subaccountId);
        // Perform the AJAX request
        $.ajax({
            url: '/processexpandsubaccount', // Replace with your actual URL
            type: 'POST',
            data: formData,
            contentType: false, // Tell jQuery not to set content type
            processData: false, // Tell jQuery not to process the data
            success: function(response) {
                if (response.status) {
                    alert('Data submitted successfully!');
                    $('#modal_update').modal('hide');
                    location.reload(); // Reload the page to reflect the changes
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error: ', error);
                alert('Có lỗi xảy ra, vui lòng thử lại');
            }
        });

        }
        
    </script>
</body>
</html>
