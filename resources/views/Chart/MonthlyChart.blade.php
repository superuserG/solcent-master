<script>
  var month = [
    'January','February','Maret','April',
    'Mei', 'Juni', 'July', 'Agustus',
    'September','Oktober','November','Desember'
  ];

  var call_jan = <?php echo $calljan;?>;
  var call_Feb = <?php echo $callFeb;?>;
  var call_Mar = <?php echo $callMar;?>;
  var call_Apr = <?php echo $callApr;?>;
  var ticket_jan = <?php echo $ticket_jan;?>;
  var ticket_feb = <?php echo $ticket_feb;?>;
  var ticket_mar = <?php echo $ticket_mar;?>;
  var ticket_apr = <?php echo $ticket_apr;?>;
  var ticket_mei = <?php echo $ticket_mei;?>;
  var ticket_jun = <?php echo $ticket_jun;?>;
  var ticket_jul = <?php echo $ticket_jul;?>;
  var ticket_aug = <?php echo $ticket_aug;?>;
  var ticket_sep = <?php echo $ticket_sep;?>;
  var ticket_okt = <?php echo $ticket_okt;?>;
  var ticket_nov = <?php echo $ticket_nov;?>;
  var ticket_des = <?php echo $ticket_des;?>;

  var compareChart = {
      labels: month,
      datasets:
      [{
          data: [call_jan, call_Feb, call_Mar, call_Apr],
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],

      },
      {
          data: [
            ticket_jan, ticket_feb, ticket_mar, ticket_apr,
            ticket_mei, ticket_jun, ticket_jul, ticket_aug,
            ticket_sep, ticket_okt, ticket_nov, ticket_des,
          ],
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }
    ],

  };
  var callChart = {
      labels: month,
      datasets:
      [{
          data: [call_jan, call_Feb, call_Mar, call_Apr],
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var cab_data = [1,2,3];
  var cabChart = {
      labels: month,
      datasets:
      [{
          data: cab_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var question_data = [1,2,3];
  var questionChart = {
      labels: month,
      datasets:
      [{
          data: question_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };


  window.onload = function() {
    //report call per-bulan compare dengan ticket
    var cta = document.getElementById("compareCalls").getContext("2d");
    var callBar = new Chart(cta, {
        type: 'bar',
        data: compareChart,
        options: {
          scales: {
             yAxes: [{
                ticks: {
                  beginAtZero: true
                }
             }],
             xAxes: [{
                     ticks: {
                      fontSize: 10
                     }
                    }]
            },
            elements: {
                rectangle: {
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Calls'
            }
        }
    });

    //top kanwil
    var ctb = document.getElementById("callMonths").getContext("2d");
    var kanwilBar = new Chart(ctb, {
        type: 'bar',
        data: callChart,
        options: {
          scales: {
             yAxes: [{
                ticks: {
                  beginAtZero: true
                }
             }],
             xAxes: [{
                     ticks: {
                      fontSize: 10
                     }
                    }]
            },
            elements: {
                rectangle: {
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Kanwil'
            }
        }
    });

    //top cabang
    var ctc = document.getElementById("monthCab").getContext("2d");
    var cabBar = new Chart(ctc, {
        type: 'bar',
        data: cabChart,
        options: {
          scales: {
             yAxes: [{
                ticks: {
                  beginAtZero: true
                }
             }],
             xAxes: [{
                     ticks: {
                      fontSize: 10
                     }
                    }]
            },
            elements: {
                rectangle: {
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Cabang'
            }
        }
    });

    //FAQ
    var ctd = document.getElementById("monthQuestion").getContext("2d");
    var questionBar = new Chart(ctd, {
        type: 'bar',
        data: questionChart,
        options: {
          scales: {
             yAxes: [{
                ticks: {
                  beginAtZero: true
                }
             }],
             xAxes: [{
                     ticks: {
                      fontSize: 10
                     }
                    }]
            },
            elements: {
                rectangle: {
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Question Report'
            }
        }
    });
  }

</script>
