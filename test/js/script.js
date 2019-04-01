$(document).ready(function() {
  $('.form-ecom-submit').submit(function() {
    var form_id = '.form-ecom-submit';
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
          if (json.status === 'accept') {
            data = '<div class="data">' + methods.returnInfo(json.data, json.operation) + '</div>';
          } else {
            data = '<div class="data">Error. Response code: ' + json.data.status + '. </div>';
          }
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

  var methods = {
    returnInfo: function(data, operation) {
      var str = '';
      if (operation == 'CreateOrder') {
        str = '<a href="' + data.urlFull + '" target="_blank">перейти на страницу оплаты</a>';
      } else if (operation == 'GetOrderStatus') {
        str = 'OrderId: ' + data.OrderID + '<br>OrderStatus: ' + data.OrderStatus;
      } else {
        str = data;
      }

      return str
    }
  }
});