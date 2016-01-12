$(document).ready(function () {

    //datepicker
    $('.datepicker').datepicker();

    //set infant number
    $('#adult').on('change', function () {
        $('#infant').find('option').remove();
        $adult_choosen = $("#adult").val();
        for ($i = 0; $i <= $adult_choosen; $i++)
        {
            $('<option>').val($i).text($i).appendTo('#infant');
        }
    });

    //flight-tab
    $('#charter-tab').css('background-color', '#0c1b6e');
    $('#international').hide();
    $('#system').hide();
    
    $('#international-tab').click(function () {
        $(this).css('background-color', '#0c1b6e');
        $('#charter-tab').css('background-color' , '#6e6e6e');
        $('#system-tab').css('background-color' , '#6e6e6e');
        $('#charter').hide();
        $('#system').hide();
        $('#international').fadeIn()();
    });
    $('#charter-tab').click(function () {
        $(this).css('background-color', '#0c1b6e');
        $('#international-tab').css('background-color' , '#6e6e6e');
        $('#system-tab').css('background-color' , '#6e6e6e');
        $('#international').hide();
        $('#system').hide();
        $('#charter').fadeIn()();
    });
    $('#system-tab').click(function () {
        $(this).css('background-color', '#0c1b6e');
        $('#charter-tab').css('background-color' , '#6e6e6e');
        $('#international-tab').css('background-color' , '#6e6e6e');
        $('#international').hide();
        $('#charter').hide();
        $('#system').fadeIn();
    });

});
