<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar with Date Range and Prices</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Datepicker CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        .date-price {
            font-weight: bold;
            color: red;
            font-size: 10px;
            margin-top: 20px;
            padding: 10px;
            display: inline-block;
            background-color: #f8f9fa;
            border-radius: 4px;
            border: 1px solid #ced4da;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Select Dates and Check Prices</h2>
    <div id="datepicker"></div>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap Datepicker Plugin Extensions -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.en-GB.min.js"></script>
<script>
    $(document).ready(function(){
        $('#datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            startDate: 'today',
            endDate: '+1m',
            beforeShowDay: function(date){
                var currentDate = new Date();
                var currentMonth = currentDate.getMonth();
                var nextMonth = new Date(currentDate.getFullYear(), currentMonth + 1, 0);
                var nextMonthStartDate = new Date(currentDate.getFullYear(), currentMonth + 1, 1);
                var nextMonthEndDate = new Date(currentDate.getFullYear(), currentMonth + 2, 0);

                return {
                    startDate: nextMonthStartDate,
                    endDate: nextMonthEndDate,
                    enabled: date >= nextMonthStartDate && date <= nextMonth,
                    classes: 'has-price',
                    content: date.getDate() + ' $100'
                };
            }
        });
    });
</script>

</body>
</html>
