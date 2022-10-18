$(document).ready(function () {
    $('.delete-pop-up-btn').on('click', function(){
        $(this).siblings('.delete-pop-up').first().toggleClass('hidden', false)
        $('#delete-pop-up-bg').toggleClass('hidden', false)
    })
    $('.cancel-btn').on('click', function(){
        $(this).parents('.delete-pop-up').toggleClass('hidden', true)
        $('#delete-pop-up-bg').toggleClass('hidden', true)
    })
    $('.delete-btn').on('click', function(){
        $(this).parents('.delete-pop-up-card').remove()
        $('#delete-pop-up-bg').toggleClass('hidden', true)
    })
})