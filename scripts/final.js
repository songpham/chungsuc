$(document).ready(function () {
    $('.container > .row > .col-md-6 .right').on('blur', function () {
        if (parseInt($(this).val()) > 0) {
            $("#sound-open")[0].play();
        } else if (parseInt($(this).val()) === 0) {
            $("#sound-wrong")[0].play();
        }
    });
    $('.container > .row > .col-md-6 .right').on('change', function () {
        var total = 0;
        $('.container > .row > .col-md-6 .right').each(function () {
            var val = parseInt($(this).val());
            if (val) {
                total += val;
            }
        });
        $('.total').val(total);
        if (total >= 150) { // win
            $('.congratulation, .background-congratulation').show('slow', function () {
                $("#sound-votay")[0].play();
                setTimeout(function () {
                    $("#sound-welcome")[0].play();
                }, 5000);
            });
        }
    });
    $('textarea.left[tabindex="11"]').focus(function () {
        $('textarea.left').each(function () {
            if (jQuery.inArray(parseInt($(this).attr('tabindex')), [1, 2, 3, 4, 5]) > -1) {
                $(this).val(null);
            }
        });
    });

    var clock, interVal1, timeOut = 40;
    // Instantiate a counter
    clock = $('.clock').FlipClock(timeOut, {
        clockFace: 'Counter'
    });
    // Attach a click event to a button a increment the clock
    $('button').click(function() {
        clearInterval(interVal1);
        clock.setValue($(this).data('min'));
        if ($(this).data('type') === 'start') {
            interVal1 = setInterval(function () {
                clock.decrement();
                $("#sound-countdown")[0].play();
                if (clock.time.time === -1) {
                    clearInterval(interVal1);
                    clock.setValue(timeOut);
                }
            }, 1000);
        }
    });
    $(document).keypress(function (event) {
        console.log(event.which);
        if (event.which === 66) { /* B */
            $("#sound-match")[0].play();
        }
        if (event.which === 71) { /* G */
            $("#sound-welcome")[0].play();
        }
        if (event.which === 72) { /* H */
            $("#sound-welcome")[0].pause();
            $("#sound-welcome")[0].currentTime = 0;
        }
        if (event.which === 74) { /* J */
            $("#sound-silent-1")[0].play();
        }
        if (event.which === 75) { /* K */
            $("#sound-silent-1")[0].pause();
            $("#sound-silent-1")[0].currentTime = 0;
        }
        if (event.which === 84) { /* T */
            $("#sound-silent-2")[0].play();
        }
        if (event.which === 89) { /* Y */
            $("#sound-silent-2")[0].pause();
            $("#sound-silent-2")[0].currentTime = 0;
        }
        if (event.which === 85) { /* T */
            $("#sound-silent-3")[0].play();
        }
        if (event.which === 73) { /* Y */
            $("#sound-silent-3")[0].pause();
            $("#sound-silent-3")[0].currentTime = 0;
        }
    });
});