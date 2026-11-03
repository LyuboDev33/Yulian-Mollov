$(document).ready(function () {
    $('#contact_form').submit(function (e) {
        e.preventDefault();

        let formData = {
            user_names: $('#name').val(),
            user_email: $('#email').val(),
            user_phone: $('#telephone').val(),
            user_message: $('#review').val(),
        }
        
        if (!formData.user_names.trim() ||
            !formData.user_email.trim() ||
            !formData.user_phone.trim() ||
            !formData.user_message.trim()) {

            $('.errorMsg').text('Всички полета са задължителни');
        } else { 

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/mail/contact-form',
                data: formData,
                dataType: 'json',
                success: function (response) {
    
                    console.log(response)
    
                    if (response.status == "success") {
    
                        $('#name').val('');
                        $('#email').val('');
                        $('#telephone').val('');
                        $('#review').val('');
    
                        $('.errorMsg').text('');
                        $('.msgForm').text('Вашето запитване беше изпратено успешно! Ще се свържем с вас при първа възможност');
    
                    }
    
                },
                error: function (xhr, status, error) {
    
                    console.error(xhr.responseText);
                }
            });
        }

    });
});