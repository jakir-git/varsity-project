jQuery(document).ready(function($){
  'use strict';
 
    $('.leave-status-tab').each(function () {
        var $that = $(this);
        $(this).find('button').on('click', function () {
            $that.find('button').removeClass('active');
            $(this).addClass('active');
            $that.find("[data-tab-content]").hide();
            $that.find('[data-tab-content="'+ $(this).data('tab-toggle') +'"]').fadeIn(400);
        });
    });
 
 
});