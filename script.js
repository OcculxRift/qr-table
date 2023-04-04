$(document).ready(function(){
  $.getJSON("https://occul.ticketers.club/status", function(data) {
    var table_data = '';
    var count = 1;
    $.each(data, function(key, value) {
      table_data += '<tr>';
      table_data += '<td>' + count + '</td>';
      table_data += '<td>' + value[1] + '</td>';
      table_data += '<td>' + value[2] + '</td>';
      table_data += '<td>' + new Date().toLocaleDateString() + '</td>';
      table_data += '</tr>';
      count++;
    });
    $('#occul_table').append(table_data);
  });
});
