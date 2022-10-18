$(document).ready(function(){
    $('.image-btn').on('click', function(event){
        event.preventDefault()
        $(this).siblings('.image-pop-up').first().toggleClass('hidden', false)
        $('#image-pop-up-bg').toggleClass('hidden', false)
    })
    $('#image-pop-up-bg').on('click', function(){
        $(this).toggleClass('hidden', true)
        $('.image-pop-up').each(function(){
            $(this).toggleClass('hidden', true)
        })
    })
})