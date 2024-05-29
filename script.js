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

function Exchange() {
    var selectBox = document.getElementById("optionDropdown");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    
    if(selectedValue === "1") {
        // Send AJAX request
        $.ajax({
            url: 'fetch_data.php', // URL to your PHP script
            method: 'POST',
            success: function(response) {
                // Update the result container with fetched data
                displayData(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
    // Add similar conditions for other options if needed
}

function displayData(data) {
    // Clear previous content
    $('#resultContainer').empty();
    
    // Append new data to the result container
    $.each(data, function(index, item) {
        $('#resultContainer').append('<div class="stock-item">' +
            '<p>' + item.StockCode + '</p>' +
            '<p>' + item.LastVol + '</p>' +
            '<p>' + item.Chng + '</p>' +
            '<p>' + item.BuyVol + '</p>' +
            '<p>' + item.SellVol + '</p>' +
            '</div>');
    });
}
