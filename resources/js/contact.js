$(document).ready(function() {
    $('contact-submit').click(function(e) {
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('metan[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ route('contact') }}",
            method: 'POST',
            data: {
                name: $('#name').val(),
                
            }
        });
    });
});
