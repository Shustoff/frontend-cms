$(function(){
    _.templateSettings = {
        interpolate: /\{\{(.+?)\}\}/g
    };

    // Шаблонизатор
    var template = {
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
    // Рендерим верхнюю строчку
    template.topRender();


    // Ajax объект
    aRequest = {
        request: function() {
            $.ajax({
                type: 'POST',
                url: '/front-end/admin/options',
                dataType: 'html',
                success: function(html)
                {
                    $('.main').html(html);
                }
            });
        }
    }




});