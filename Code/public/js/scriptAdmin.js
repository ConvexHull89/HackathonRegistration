$(document).ready(function () {
    $('.image-btn').on('click', function(){
        $(this).siblings('.image-pop-up').first().toggleClass('hidden', false)
        $('#image-pop-up-bg').toggleClass('hidden', false)
    })
    $('#image-pop-up-bg').on('click', function(){
        $(this).toggleClass('hidden', true)
        $('.image-pop-up').each(function(){
            $(this).toggleClass('hidden', true)
        })
    })
    $('.payment-status-btn').on('click', function(){
        $(this).siblings('.payment-status-pop-up').first().toggleClass('hidden', false)
        $('#payment-status-pop-up-bg').toggleClass('hidden', false)
    })
    $('.close-btn').on('click', function(){
        $(this).parent().toggleClass('hidden', true)
        $('#payment-status-pop-up-bg').toggleClass('hidden', true)
    })
    // $('.approve-btn').on('click', function(){
    //     const paymentStatusText = $(this).parents('.payment-status-content').find('.payment-status-text')
    //     paymentStatusText.toggleClass('text-green-500', true)
    //     paymentStatusText.toggleClass('text-red-500', false)
    //     paymentStatusText.html('Verified')
    // })
    // $('.reject-btn').on('click', function(){
    //     const paymentStatusText = $(this).parents('.payment-status-content').find('.payment-status-text')
    //     paymentStatusText.toggleClass('text-green-500', false)
    //     paymentStatusText.toggleClass('text-red-500', true)
    //     paymentStatusText.html('Reject')
    // })
});