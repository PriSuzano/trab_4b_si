/**
 * Simple (ugly) code to handle the comment vote up/down
 */
 var $container = $('.js-vote-arrows');
 $container.find('a').on('click', function(e) {
     e.preventDefault();
     var $link = $(e.currentTarget);
     $.ajax({
         url: '/comentarios/10/voto/'+$link.data('direction'),
         method: 'POST'
     }).then(function(response) {
         $container.find('.js-vote-total').text(response.votes);
     });
 });