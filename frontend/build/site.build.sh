r.js -o baseUrl=frontend/js/site dir=frontend/js/site/min mainConfigFile=frontend/js/site/site.js name=site
cd frontend/js/site/min
rm -rf build build.txt collections models templates views addMethods.js ajaxUpload.js Backbone.js config.js Handlebars.js helpers.js jQuery.js jQueryUI.js jQueryUIDatepicker.js jQueryValidate.js Knockout.js Marionette.js router.js text.js Underscore.js mediaelement-and-player.min.js SpecRunner.js specs.js
