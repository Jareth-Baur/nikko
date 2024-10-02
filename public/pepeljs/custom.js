var baseUrl = window.location.origin;
$(document).ready(function() {
   
    $('#orderDataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/orders",
        columns: [
            { data: 'orderNumber', name: 'orderNumber' },
            { data: 'customerName', name: 'customerName' },
            { data: 'productName', name: 'productName' },
            { data: 'quantityOrdered', name: 'quantityOrdered' },
            { data: 'priceEach', name: 'priceEach' },
            { data: 'orderDate', name: 'orderDate' }, 
        ]
    });
});
$(document).ready(function() {

    $('#officesDataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/offices",
        columns: [
            { data: 'officeCode', name: 'officeCode' },
            { data: 'city', name: 'city' },
            { data: 'phone', name: 'phone' },
            { data: 'country', name: 'country' },
            { data: 'territory', name: 'territory' },

        ]
    });
});
$(document).ready(function() {

    $('#productDataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/products",
        columns: [
            { data: 'productCode', name: 'productCode' },
            { data: 'productName', name: 'productName' },
            { data: 'productLine', name: 'productLine' },
            { data: 'quantityInStock', name: 'quantityInStock' },
            { data: 'buyPrice', name: 'buyPrice' },

        ]
    });
});

$(document).ready(function() {

    $('#customerDataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/customers",
        columns: [
            { data: 'customerNumber', name: 'customerNumber' },
            { data: 'customerName', name: 'customerName' },
            { data: 'city', name: 'city' },
            { data: 'country', name: 'country' },
            { data: 'manageby', name: 'manageby' },

        ]
    });
});

$(document).ready(function() {

    $('#employeesDataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: baseUrl + "/employees",
        columns: [
            { data: 'officeCode', name: 'officeCode' },
            { data: 'city', name: 'city' },
            { data: 'phone', name: 'phone' },
            { data: 'addressLine1', name: 'addressLine1' },
            { data: 'addressLine2', name: 'addressLine2' },
            { data: 'country', name: 'country' },
            { data: 'territory', name: 'territory' },


        ]
    });
});

new DataTable('#employees')



