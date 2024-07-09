

$("#contact-us").click(function () {

    let footer = document.getElementById('footer')

    footer.scrollIntoView({ 'behavior': 'smooth', 'block': 'end' });
    setTimeout(function () {
        $('#address').addClass('contact-address');

    }, 1000);
    setTimeout(function () {
        $('#address').removeClass('contact-address');
    }, 6000);

}); 