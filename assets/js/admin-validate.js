function validOptions() {
    $("#saveoptions").validate({
        onfocusout: function(element) {
            if (!($(element).valid()))
            {
                binds.validDisable();
            }
        },

        rules: {
            sitename: "required"
        },

        messages: {
            sitename: 'Пожалуйста заполните поле'
        }

    });
}






