<script>
  var label_A = ['Present','Handle','abandon'];
  var data_prensent = <?php echo $present;?>;
  var data_handle = <?php echo $handle;?>;
  var data_abandon = <?php echo $abandon;?>;

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
            'rgba(255, 99, 132, 0.9)',
            'rgba(89, 158, 207, 0.9)',
            'rgba(255, 206, 86, 0.9)',
          ],
      }],

  };
  // Call

  var label_B = ['Present'];
  var data_call_present = <?php echo $callMar;?>;
  var data_ticket = <?php echo $ticket_mar;?>;


  var b = {
      labels: label_B,
      datasets:
      [{
          label: 'Call',
          data: data_call_present,
          backgroundColor:
          [
            'rgba(227,123,64, 1)'
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
            'rgba(50,77,92, 1)'
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
          'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
          'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
          'rgba(50,77,92, 1)','rgba(50,77,92, 1)'
        ],
    }],
  };
  // Top question

  var label_D = <?php echo $labelKanwil;?>;
  var data_topic = <?php echo $kanwil;?>;

  var d = {
    labels: label_D,
    datasets:
    [{
        label: 'Top Kanwil',
        data: data_topic,
        backgroundColor:
        [
            'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)',
        ],
    }],
  };
  //Top Topic



  window.onload = function(){

    var ma = document.getElementById("callMarch").getContext("2d");
    var callA = new Chart(ma, {
        type: 'doughnut',
        data: a,
        options: {
            elements: {
                rectangle: {
                    borderColor: 'rgb(0, 255, 0)',
                    borderSkipped: 'bottom'
                }
            },
            responsive: true,
            title: {
                display: true,
                text: 'Calls Report'
            }
        }
    });

    var mb = document.getElementById("compareCallMar").getContext("2d");
    var compareB = new Chart(mb, {
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

    var mc = document.getElementById("topQuestionMar").getContext("2d");
    var compareC = new Chart(mc, {
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

    var md = document.getElementById("topicMar").getContext("2d");
    var compareD = new Chart(md, {
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
                text: 'Top Kanwil'
            }
        }
    });



  }

</script>
