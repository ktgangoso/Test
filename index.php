<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
<style>
    body.dark-mode {
    background-color: #121212;
    color: #ffffff;
    }
    .card.dark-mode {
        background-color: #1e1e1e;
    }
    .table.dark-mode th,
    .table.dark-mode td {
        background-color: #5c5b5b;
        color: #121212;
    }
    .form-select.dark-mode {
        background-color: #1e1e1e;
        color: #ffffff;
        border-color: #2e2e2e;
    }
    .dark-mode h3 {
            color: #ffffff;
        }
</style>

</head>
<body>
    
<div class="container">            
    <div class="card">
        <table class="table" id="dataTable">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="m-2 w-auto">DELAYED QUOTES</h3>
                <div class="d-flex align-items-center ms-auto">
                    <select class="form-select w-auto m-2" aria-label="Default select example" >
                        <option value="1">SGX</option>
                        <option value="2">Bursa</option>
                    </select>
                    <button class="btn btn-dark d-flex justify-content-between align-items-center w-auto m-2" id="darkModeToggle">
                    <i class="bi bi-brightness-low"></i> Dark Mode
                    </button>
                </div>
        <thead>            
            <tr>
            <th scope="col">Top <br>Volume</th>
            <th scope="col">Top <br>Gainers</th>
            <th scope="col">Top <br>Losers</th>
            <th scope="col">Top % <br>Gainer</th>
            <th scope="col">Top % <br>Loser</th>
            </tr>

            <tr>
            <th scope="col">Stocks <br>Code</th>
            <th scope="col" style='text-align: end'>Last <br>Vol</th>
            <th scope="col" style='text-align: end'>+/- <br>%Chng</th>
            <th scope="col" style='text-align: end'>Buy <br>Buy Vol</th>
            <th scope="col" style='text-align: end'>Sell <br>Sell Vol</th>
        </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>
        </table>
    </div>
</div>

<script src="script.js"></script>
<script>
    document.getElementById('darkModeToggle').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    document.querySelector('.card').classList.toggle('dark-mode');
    document.querySelector('.form-select').classList.toggle('dark-mode');
    document.querySelector('.table').classList.toggle('dark-mode');
});

</script>
</body>
</html>