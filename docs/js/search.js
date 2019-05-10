$(function() {
                  var href = "https://olp-cat.jp/index.cfm";
                  $('#srh_ken_param,#srh_year_money_param,#srh_jobtype_param').on('change', function() {
                    var srh_ken_param = $('#srh_ken_param').val();
                    var srh_year_money_param = $('#srh_year_money_param').val();
                    var srh_jobtype_param = $('#srh_jobtype_param').val();

                    $('#test').prop('href', href + "?fuseaction=job.joblist&srh_ken_param=" + srh_ken_param + "&srh_year_money_param=" + srh_year_money_param + "&srh_jobtype_param=" + srh_jobtype_param);
                  });
                });
