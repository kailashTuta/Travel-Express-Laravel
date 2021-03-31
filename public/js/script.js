$(document).ready(function () {
    $(".gallery").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('#editUsers').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var fname = button.data('myfname')
        var lname = button.data('mylname')
        var name = button.data('myname')
        var email = button.data('myemail')
        var role_as = button.data('myrole_as')
        var uid = button.data('myid')

        var modal = $(this)

        modal.find('.modal-body #fname').val(fname)
        modal.find('.modal-body #lname').val(lname)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #email').val(email)
        modal.find('.modal-body #uid').val(uid)
        modal.find('.modal-body #role_as').val(role_as)
    })

    $('#editTours').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var name = button.data('myname')
        var description = button.data('mydescription')
        var tid = button.data('myid')
        var price = button.data('myprice')

        var modal = $(this)

        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #description').val(description)
        modal.find('.modal-body #price').val(price)
        modal.find('.modal-body #tid').val(tid)
    })
    $('#viewTour').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var name = button.data('myname')
        var description = button.data('mydescription')
        var tid = button.data('myid')
        var price = button.data('myprice')
        var image = button.data('myimage')

        var priceTag = price + '/- per person';
        var imgpth = "/images/tour-package-images/" + image;

        var modal = $(this)
        modal.find('.modal-header #viewTourLabel').text(name)
        modal.find('.modal-body #viewTourDescription').text(description)
        modal.find('.modal-body #viewTourPrice').text(priceTag)
        modal.find('.modal-body #viewTourImg').attr('src', imgpth)
        modal.find('.modal-body #viewTourImg').attr('alt', name)

        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #description').val(description)
        modal.find('.modal-body #price').val(price)
        modal.find('.modal-body #tid').val(tid)
    })
})
