function loadDoc() {
    var http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState == 4 && http.status == 200) {
            var chuyenJSONThanhObject = JSON.parse(http.responseText);
            //tao 1 mang array gom cac Key obj 
            var arrayKeyOfEachRow = Object.keys(chuyenJSONThanhObject.users[0]);
            console.log(arrayKeyOfEachRow);
            // BAT TABLE BODY DUA TREN ID
            var tableBody = document.getElementById('body');
            for (var i = 0; i < chuyenJSONThanhObject.users.length; i++) {
                //tao tr 
                var tableRow = document.createElement('tr');
                tableBody.appendChild(tableRow);
                //tao td cho tr
                for (var j = 0; j < arrayKeyOfEachRow.length - 2; j++) {
                    var tableData = document.createElement('td');
                    tableData.innerHTML = chuyenJSONThanhObject.users[i][arrayKeyOfEachRow[j]];
                    tableRow.appendChild(tableData);
                }
            }

        }
    };
    http.open("GET", "https://namcoi.com/aptech-demo/user-crud-laravel/public/api/users", true);
    http.send();
}