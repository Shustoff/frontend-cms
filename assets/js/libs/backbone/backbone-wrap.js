/**
 * Обертка Backbone для Require.js
 */
define(['libs/backbone/backbone'], function(){
  _.noConflict();
  $.noConflict();
  return Backbone.noConflict();
});