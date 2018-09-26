$(document).ready(function() {

  $('.form-ecom').submit(function() {
    var form_id = '.form-ecom';
    $.ajax({
      type: 'POST',
      dataType: 'json', // html / json,
      url: 'exec.php',
      data: $(form_id).serialize(),
      success: function(json) {
        var status = '<div class="status">Status: ' + json.status + '</div>',
            log    = '',
            data   = '';

        if ('data' in json && json.data) {
          data = '<div class="data">' + json.data + '</div>';
        }
        if ('log' in json && json.log) {
          log = '<div class="log">' + json.log + '</div>';
        }
        $('.show_result').html(status + data + log);
      },
      beforeSend: function() {
        $('.show_result').html('sending...');
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
        $('.show_result').html('error');
      }
    });
    return false;
  });
});