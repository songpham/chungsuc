$(document).ready(function () {
    var col = $('.container > .row > .col-md-6');
    col.height(col.find('.number').outerHeight() + 20);
    col.find('.number').click(function () {
        $(this).hide('slow', function () {
            $("#sound-open")[0].play();
            $(this).next().show();
            var scoreSpan = $('.score span'),
                totalLabel = $('.score label');
            scoreSpan.text(parseInt(scoreSpan.text()) + parseInt($(this).next().find('.point').text()));
            if (totalLabel.length > 0) {
                totalLabel.text(parseInt(scoreSpan.text()) * 2);
            }
            if ($('.container > .row > .col-md-6 .number').is(':visible') === false) {
                setTimeout(function () {
                    $("#sound-welcome")[0].play();
                }, 500);
            }
        });
    });
    /**
     * count down
     */
    var clock, interVal1, timeOut = 5;
    // Instantiate a counter
    clock = $('.clock').FlipClock(timeOut, {
        clockFace: 'Counter'
    });
    // Attach a click event to a button a increment the clock
    $('button.start-countdown').click(function() {
        $("#sound-human-countdown")[0].play();
        interVal1 = setInterval(function () {
            clock.decrement();
            if (clock.time.time === -1) {
                $("#sound-lost")[0].play();
                clearInterval(interVal1);
                clock.setValue(timeOut);
                setTimeout(function () {
                    $("#sound-human-countdown")[0].pause();
                    $("#sound-human-countdown")[0].currentTime = 0;
                }, 1000);
                showError();
            } else {
                $("#sound-countdown")[0].play();
            }
        }, 1000);
    });
    $('button.end-countdown').click(function() {
        clearInterval(interVal1);
        clock.setValue(timeOut);
        $("#sound-human-countdown")[0].pause();
        $("#sound-human-countdown")[0].currentTime = 0;
    });
    $(document).keypress(function (event) {
        console.log(event.which);
        if (event.which === 98) { /* b */
            event.preventDefault();
            showError();
        }
        if (event.which === 110) { /* n */
            $('.error').addClass('an');
        }
        if (event.which === 109) { /* m */
            /**
             * reset
             */
            $('.error').addClass('an');
            $('.error').children().addClass('an');
        }
        if (event.which === 103) { /* g */
            $("#sound-welcome")[0].play();
        }
        if (event.which === 104) { /* h */
            $("#sound-welcome")[0].pause();
            $("#sound-welcome")[0].currentTime = 0;
        }
        if (event.which >= 49 && event.which <= 56) { /* 1 */
            $('.container > .row > .col-md-6:eq(' + (event.which - 49) + ') .number').click();
        }
    });
});
function showError () {
    $('.error').children().each(function () {
        if ($(this).hasClass('an') === true) {
            $(this).removeClass('an');
            $(this).parent().removeClass('an');
            $("#sound-wrong")[0].play();
            if ($('.error').children().hasClass('an') === false) {
                setTimeout(function () {
                    $("#sound-error")[0].play();
                    setTimeout(function () {
                        $('.error').addClass('an').children().last().addClass('an');
                    }, 2000);
                }, 500);
            }
            return false;
        }
    });
}