$(document).ready(function () {
   'use strict';

    function getAllData() {
        $.ajax({
            url: 'getAllData.php',
            dataType: 'text',
            success: function (data) {
                $('tbody').html(data);
            },
            error: function (xhr, status, error) {
                console.log(error);
                console.log(JSON.parse(xhr.responseText));
                console.log(xhr);
            }
        });
    }
    getAllData();

    $('#search-button').on('click', function () {
        var keyword = $('#search-input').val();
        // alert(keyword);
        if(keyword !=''){
            $.ajax({
               url: 'search.php',
                method: 'POST',
                data: {
                   keyword: keyword
                },
                dataType: 'text',
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        }
    });
});