$(document).ready(function(){
    $('.toggle-btn').on('click', function(){
        $(this).siblings('.toggle-content').first().toggleClass('hidden')
        console.log($(this).siblings('.toggle-content'));
    })
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
})