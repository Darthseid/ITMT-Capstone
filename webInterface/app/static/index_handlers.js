//check if js working
console.log('pizza pasta put it in a box')

$(function() {

    $('a#shodanOpen').on('click', function() {


        $.get('/api/get_public_ip', function(data) {

        window.open('https://shodan.io/search?query='+data);
          console.log(data);
        });

    });

  $('a#test').on('click', function() {
    $.get('/api/background_process_test',
        function(data) {
      window.alert(data);
    });
    return false;
  });

});