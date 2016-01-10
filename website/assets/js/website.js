$(document).ready(function () {

    $(".datepicker").datepicker();

    $("#adult").on('change', function () {
        $('#infant').find('option').remove();
        $adult_choosen = $("#adult").val();
        for ($i = 0; $i <= $adult_choosen; $i++)
        {
            $("<option>").val($i).text($i).appendTo("#infant");
        }
    });

});
