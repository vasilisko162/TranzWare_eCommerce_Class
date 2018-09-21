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
            log    = '<div class="log">' + json.log + '</div>',
            data   = '<div class="data">' + json.data + '</div>';
        $('.show_result').html(status + data + log);
      },
      beforeSend: function() {
        $('.show_result').html('sending...');
      },
      error: function(data) {
        $('.show_result').html('error');
      }
    });
    return false;
  });
});