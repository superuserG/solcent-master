<script>
  var label_A = ['Present','Handle','abandon'];
  var data_prensent = [1000];
  var data_handle = [575];
  var data_abandon = [425];

  var a = {
      labels: label_A,
      datasets:
      [{
          label: 'Call',
          data: [data_prensent,
                data_handle,
                data_abandon],
          backgroundColor:
          [
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };
  // Call

  var label_B = ['Present'];
  var data_call_present = [500];
  var data_ticket = [250];


  var b = {
      labels: label_B,
      datasets:
      [{
          label: 'Call',
          data: data_call_present,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }
    ],

  };
  // Compare call and ticket

  var label_C = <?php echo $cat;?>;
  var data_top = <?php echo $question;?>;

  var c = {
    labels: label_C,
    datasets:
    [{
        label: 'Top Category',
        data: data_top,
        backgroundColor:
        [
            'rgba(0,128,0, 0.5)'
        ],
    }],
  };
  // Top question

  var label_D = ['Present'];
  var data_topic = [200];

  var d = {
    labels: label_D,
    datasets:
    [{
        label: 'Top Topic',
        data: data_top,
        backgroundColor:
        [
            'rgba(0,128,0, 0.5)'
        ],
    }],
  };
  //Top Topic

  window.onload = function(){
    var mya = document.getElementById("callMay").getContext("2d");
    var callA = new Chart(mya, {
        type: 'bar',
        data: a,
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

    var myb = document.getElementById("compareCallMay").getContext("2d");
    var compareB = new Chart(myb, {
        type: 'bar',
        data: b,
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

    var myc = document.getElementById("topQuestionMay").getContext("2d");
    var compareC = new Chart(myc, {
        type: 'bar',
        data: c,
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
                text: 'Top Question'
            }
        }
    });

    var myd = document.getElementById("topicMay").getContext("2d");
    var compareD = new Chart(myd, {
        type: 'bar',
        data: d,
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
                text: 'Top Topic'
            }
        }
    });
  }

</script>