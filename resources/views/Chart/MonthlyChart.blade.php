<script>
  var month = [
    'January','February','Maret','April',
    'Mei', 'Juni', 'July', 'Agustus',
    'September','Oktober','November','Desember'
  ];

  var kanwil = [
    'Kantor Pusat','Kanwil I','Kanwil II','Kanwil III','Kanwil IV','Kanwil V','Kanwil VI',
    'Kanwil VII','Kanwil VIII','Kanwil IX','Kanwil X','Kanwil XI','Kanwil XII'
  ]

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

  var Kantor_Pusat = <?php echo $Kantor_Pusat; ?>;
  var Kanwil_I = <?php echo $Kanwil_I; ?>;
  var Kanwil_II = <?php echo $Kanwil_II; ?>;
  var Kanwil_III = <?php echo $Kanwil_III; ?>;
  var Kanwil_IV = <?php echo $Kanwil_IV; ?>;
  var Kanwil_V = <?php echo $Kanwil_V; ?>;
  var Kanwil_VI = <?php echo $Kanwil_VI; ?>;
  var Kanwil_VII = <?php echo $Kanwil_VII; ?>;
  var Kanwil_VIII = <?php echo $Kanwil_VIII; ?>;
  var Kanwil_IX = <?php echo $Kanwil_IX; ?>;
  var Kanwil_X = <?php echo $Kanwil_X; ?>;
  var Kanwil_XI = <?php echo $Kanwil_XI; ?>;
  var Kanwil_XII = <?php echo $Kanwil_XII; ?>;


  var compareChart = {
      labels: month,
      datasets:
      [{
          label: 'Call',
          data: [call_jan, call_Feb, call_Mar, call_Apr, call_Feb, call_Mar, call_Apr, call_jan, call_Feb, call_Apr, call_Mar, call_jan],
          backgroundColor:
          [
              'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
              'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
              'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
              // 'rgba(227,123,64, 1.0)',
              // 'rgba(240,202,77, 1.0)',
              // 'rgba(70,178,157, 1.0)',
              // 'rgba(50,77,92, 1.0)',
              // 'rgba(222,91,73, 1.0)',
              // 'rgba(227,123,64, 1.0)',
              // 'rgba(240,202,77, 1.0)',
              // 'rgba(70,178,157, 1.0)',
              // 'rgba(50,77,92, 1.0)',
              // 'rgba(222,91,73, 1.0)',
              // 'rgba(227,123,64, 1.0)',
          ],

      },
      {
          label: 'Ticket',
          data: [
            ticket_jan, ticket_feb, ticket_mar, ticket_apr,
            ticket_mei, ticket_jun, ticket_jul, ticket_aug,
            ticket_sep, ticket_okt, ticket_nov, ticket_des,
          ],
          backgroundColor:
          [
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
            // 'rgba(222,91,73, 1.0)',
            // 'rgba(227,123,64, 1.0)',
            // 'rgba(240,202,77, 1.0)',
            // 'rgba(70,178,157, 1.0)',
            // 'rgba(50,77,92, 1.0)',
            // 'rgba(222,91,73, 1.0)',
            // 'rgba(227,123,64, 1.0)',
            // 'rgba(240,202,77, 1.0)',
            // 'rgba(70,178,157, 1.0)',
            // 'rgba(50,77,92, 1.0)',
            // 'rgba(222,91,73, 1.0)',
            // 'rgba(227,123,64, 1.0)',
          ],
      }
    ],

  };

  var callChart = {
      labels: month,
      datasets:
      [{
          label: 'Call',
          data: [call_jan, call_Feb, call_Mar, call_Apr],
          backgroundColor:
          [
            'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
            'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
            'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
          ],
      }],

  };

  var ticketChart = {
      labels: month,
      datasets:
      [{
          label: 'Ticket',
          data: [
            ticket_jan, ticket_feb, ticket_mar, ticket_apr,
            ticket_mei, ticket_jun, ticket_jul, ticket_aug,
            ticket_sep, ticket_okt, ticket_nov, ticket_des,
          ],
          backgroundColor:
          [
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
            'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
          ],
      }],

  };

  var ticketKanwil = {
    labels: kanwil,
    datasets:
    [{
        label: 'Kanwil',
        data: [
          Kantor_Pusat, Kanwil_I, Kanwil_II, Kanwil_III,
          Kanwil_IV, Kanwil_V, Kanwil_VI, Kanwil_VII,
          Kanwil_VIII, Kanwil_IX, Kanwil_X, Kanwil_XI, Kanwil_XII
        ],
        backgroundColor:
        [
          'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
          'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
          'rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)','rgba(50,77,92, 0.5)',
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
                text: 'Calls and Tickets'
            }
        }
    });

    //call
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
                text: 'Call'
            }
        }
    });

    //ticket
    var ctc = document.getElementById("ticketMonths").getContext("2d");
    var cabBar = new Chart(ctc, {
        type: 'bar',
        data: ticketChart,
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

    //kanwil
    var ctd = document.getElementById("ticketKanwils").getContext("2d");
    var kanwilBar = new Chart(ctd, {
        type: 'horizontalBar',
        data: ticketKanwil,
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

  }

</script>
