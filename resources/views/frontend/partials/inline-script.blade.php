<script>
    
    $(document).ready(function() {
        $(document).on('click', '#get_in_touch_submit_btn', function(e) {
            e.preventDefault();
            var myForm = document.getElementById('php-email-form');
            var formData = new FormData(myForm);

            $.ajax({
                type: "POST",
                url: "{{ route('frontend.contact') }}",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                        .removeClass('hide').addClass('show');
                },
                success: function(data) {
                    var errMsgContainer = $('#php-email-form').find('.error-message');
                    $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                        .removeClass('show').addClass('hide');
                    errMsgContainer.html('');

                    if (data.status == '400') {
                        errMsgContainer.append('<span class="text-danger">' + data.msg +
                            '</span>');
                    } else {
                        errMsgContainer.append('<span class="text-success">' + data.msg +
                            '</span>');
                    }
                },
                error: function(data) {
                    var error = data.responseJSON;
                    var errMsgContainer = $('#php-email-form').find('.error-message');
                    errMsgContainer.html('');
                    $.each(error.errors, function(index, value) {
                        errMsgContainer.append('<span class="text-danger">' +
                            value + '</span>');
                    });
                    $('#get_in_touch_submit_btn').parent().find('.ajax-loading-wrap')
                        .removeClass('show').addClass('hide');
                }
            });
        });
    });
</script>