$(function() {
$('#srh_jobtype_param').change(function() {
  var val = $(this).val();
  switch (val) {
    case '1':
    $('#box1').show();
    $('div[id^="box"]:not("#box1")').hide();
    break;

    default:
    $('div[id^="box"]').hide();
  }
});
});
