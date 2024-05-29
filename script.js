document.addEventListener("DOMContentLoaded", function() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "data.php", true); 
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            if (xhr.status == 200) {
                var data = JSON.parse(xhr.responseText); 

                // Populate the table with data
                var tableBody = document.getElementById("tableBody");
                data.forEach(function(rowData) {
                    var row = document.createElement("tr");
                    row.innerHTML = "<td>" + rowData.StockCode + "</td>" +
                                     "<td>" + rowData.LastVol + "</td>" +
                                     "<td>" + rowData.Chng + "</td>" +
                                     "<td>" + rowData.BuyVol + "</td>" + 
                                     "<td>" + rowData.SellVol + "</td>" ;
                    tableBody.appendChild(row);
                });
            } else {
                console.error("Request failed: " + xhr.status);
            }
        }
    };
    xhr.send();
});

///////////////////////////////////


