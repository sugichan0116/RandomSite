$(function() {
  // selector cache
  var
    $dropdownItem = $('.main.container .menu .dropdown .item'),
    $menuItem     = $('.main.container .menu a.item, .right.item .item').not($dropdownItem),
    $dropdown     = $('.main.container .menu .ui.dropdown'),
    // alias
    handler = {

      activate: function() {
        if(!$(this).hasClass('dropdown browse')) {
          $(this)
            .addClass('active')
            .closest('.ui.menu')
            .find('.item')
              .not($(this))
              .removeClass('active')
          ;
        }
      }

    }
  ;

  $('#article')
    .find('.segment')
      .addClass('transition hidden')
      .transition('zoom')
  ;
  $('.ui.dropdown')
    .dropdown()
  ;

  $menuItem
    .on('click', handler.activate)
  ;

});
