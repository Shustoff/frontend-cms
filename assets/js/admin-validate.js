// Проверяем валидны ли Настройки
function validOptions() {
    $("#saveoptions").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid() ) {
                binds.validDisable();
            }
        },
        rules: {sitename: "required"},
        messages: {sitename: 'Пожалуйста заполните поле'}
    });
}

// Проверяем валидна ли форма добавления страницы
function validAddPages() {
    $("#additem").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#additem').valid() ) {
                    binds.checkValidForm('pages');
                }
            }
        },
        rules: {
            pagename: "required",
            alias: "required"
        },
        messages: {
            pagename: 'Пожалуйста заполните поле',
            alias: 'Пожалуйста заполните поле'
        }
    });
}

// Проверяем валидна ли форма добавления каталога
function validAddCatalog() {
    $("#additem").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#additem').valid() ) {
                    binds.checkValidForm('catalogs');
                }
            }
        },
        rules: {
            catname: "required",
            alias: "required"
        },
        messages: {
            catname: 'Пожалуйста заполните поле',
            alias: 'Пожалуйста заполните поле'
        }
    });
}

// Проверяем валидна ли форма добавления пользователя
function validAddUser() {
    $("#additem").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#additem').valid() ) {
                    binds.checkValidForm('users');
                }
            }
        },
        rules: {
            username: "required",
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirm: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            username: 'Пожалуйста введите логин',
            email: {
                required: 'Пожалуйста введите email',
                email: 'Email должен быть валидным'
            },
            password: {
                required: "Пожалуйста введите пароль",
                minlength: 'Пароль должен быть минимум 8 символов'
            },
            password_confirm: {
                required: "Пожалуйста повторите пароль",
                equalTo: "Пожалуйста повторите пароль"
            }
        }
    });
}

// Проверяем валидна ли форма добавления роли
function validAddRole() {
    $("#additem").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#additem').valid() ) {
                    binds.checkValidForm('roles');
                }
            }
        },
        rules: {
            name: {
                required: true,
                lettersonly: true
            },
            description: "required"
        },
        messages: {
            name: {
                required: 'Пожалуйста введите название роли (например admin)',
                lettersonly: 'Допустимы только латинские символы'
            },
            description: 'Пожалуйста введите описание роли (например Администратор)'
        }
    });
}

// Проверяем валидна ли форма добавления модуля
function validAddModule() {
    $("#additem").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#additem').valid() ) {
                    binds.checkValidForm('modules');
                }
            }
        },
        rules: {
            name: "required",
            systemname: {
                required: true,
                lettersonly: true
            }
        },
        messages: {
            name: "Введите название модуля",
            systemname: {
                required: 'Пожалуйста введите описание роли (например Администратор)',
                lettersonly: 'Допустимы только латинские символы'
            }
        }
    });
}

// Проверяем валидна ли форма отправки емейла
function validSendEmail() {
    $("#email").validate({
        onfocusout: function(element) {
            if ( ! $(element).valid()) {
                binds.validDisable();
            } else {
                if ( $('#email').valid() ) {
                    $('#sendemailbtn').removeAttr('disabled').attr('onclick', 'req.initEditor(); req.sendEmail(); return false;');
                }
            }
        },
        rules: {
            subject: "required"
        },
        messages: {
            subject: "Пожалуйста введите тему"
        }
    });
}
