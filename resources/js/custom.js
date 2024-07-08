

$("#contact-us").click(function () {

    let footer = document.getElementById('footer')

    footer.scrollIntoView({ 'behavior': 'smooth', 'block': 'end' });
    $('#address').addClass('contact-address');
    setTimeout(function () {
        $('#address').removeClass('contact-address');
    }, 5000);

}); 