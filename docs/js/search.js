$(function() {
                  var href = "https://olp-medical.jp/index.cfm";
                  $('#srh_ken_param,.srh_city_param,.srh_jobtype_child_param,.srh_shift_param,.srh_room_type_param').on('change', function() {
                    var srh_ken_param = $('#srh_ken_param').val();
                    var srh_city_param = $('.srh_city_param:checked').map(function() {
                      return $(this).val();
                    }).get();
                    var srh_jobtype_child_param = $('.srh_jobtype_child_param:checked').map(function() {
                      return $(this).val();
                    }).get();
                    var srh_shift_param = $('.srh_shift_param:checked').map(function() {
                      return $(this).val();
                    }).get();
                    var srh_room_type_param = $('.srh_room_type_param:checked').map(function() {
                      return $(this).val();
                    }).get();

                    $('#test').prop('href', href + "?fuseaction=job.joblist&srh_ken_param=" + srh_ken_param + "&srh_city_param=" + srh_city_param + "&srh_jobtype_child_param=" + srh_jobtype_child_param + "&srh_shift_param=" + srh_shift_param + "&srh_room_type_param=" + srh_room_type_param);
                  });
                });