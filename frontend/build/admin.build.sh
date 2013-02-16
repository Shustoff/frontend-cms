r.js -o baseUrl=frontend/js/admin dir=frontend/js/admin/min mainConfigFile=frontend/js/admin/admin.js name=admin
cd frontend/js/admin/min
rm -rf build build.txt collections models templates views addMethods.js ajaxUpload.js Backbone.js config.js Handlebars.js helpers.js jQuery.js jQueryUI.js jQueryUIDatepicker.js jQueryValidate.js Knockout.js Marionette.js router.js text.js Underscore.js
