define([
    'Marionette',
    'Handlebars',
    '../../models/email',
    'text!../../templates/blocks/email.hbs',
    'Helpers',
    'Knockout',
    'jQueryValidate',
    'addMethods',
    'jQueryUI',
    'jQueryUIDatepicker'
], function(Marionette, Handlebars, Email, EmailTemplate, Helpers, ko) {
    return Frontend.Views.EmailView = Backbone.Marionette.ItemView.extend({

        initialize: function() {
            this.render();
            this.preValidate();
            Helpers.initEditor(this);
        },

        ui: {
            form: 'form#email',
            datepicker: '#datepicker',
            editor: '#editor',
            editorFailMessage: '.editorfail',
            btn: '.btn-success',
            errorBody: '.error-body'
        },

        events: {
            'submit #email': 'sendEmail'
        },

        template: Handlebars.compile(EmailTemplate),

        render: function() {
            $('.main').html( this.template( this.model.toJSON() ));
            Helpers.today( this.ui.datepicker );
            this.setElement('.w-email');
            return this;
        },

        preValidate: function() {
            var self = this;

            $( this.ui.form ).validate({
                onfocusout: function(element) { $(element).valid(); },
                rules: { subject: "required" },
                messages: { subject: "Пожалуйста введите тему" }
            });

            function EmailModel() {
                this.subject = ko.observable();
                this.to = ko.observable();
                this.date = ko.observable( $( self.ui.datepicker ).val() );
                this.isValid = ko.computed(function() {
                    return this.subject() && this.to() && this.date() && $( self.ui.form ).valid();
                }, this);
            }

            this.emailModel = new EmailModel();
            ko.applyBindings( this.emailModel );
        },

        sendEmail: function(e) {
            e.preventDefault();
            this.model.urlRoot = Frontend.adminURL + '/email/send';
            if ( editor.getData() ) {
                this.model.unset('users');
                this.model.unset('useremail');
                this.model.save({
                    to: this.emailModel.to(),
                    subject: this.emailModel.subject(),
                    message: $( this.ui.editor ).val(),
                    date: this.emailModel.date(),
                    isSaveEmail: $('.saveemail:checked').val()
                }, {success: this.onSave, error: this.onSaveError});
            } else {
                $( this.ui.editorFailMessage ).show().delay(5000).hide(100);
            }
        },

        onSave: function() {
            Helpers.completeSave();
            $( this.ui.btn ).text('Отправлено!').removeAttr('data-bind');
        },

        onSaveError: function(model, error) {
            $( this.ui.errorBody ).text(error);
            Helpers.errorSave();
        }

    });
});