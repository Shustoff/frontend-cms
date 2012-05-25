$(function(){
    _.templateSettings = {
        interpolate: /\{\{(.+?)\}\}/g
    };

// Шаблонизатор
var Template = {
    topRender: function() { // Рендер верхней строчки в админке
        var topTemplate = $('.top').html();
        var template = _.template(topTemplate);
        $('.top').html(template({
                sitename: "Админ-панель",
                ipadress: ipadress,
                email: "dima116@rambler.ru"
        }));
    }


};

Template.topRender();






});