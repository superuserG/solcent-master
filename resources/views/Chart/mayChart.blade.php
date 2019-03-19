<script>
var label_A = ['Handle','Present','abandon'];
var data_present = <?php echo $present;?>;
var data_handle = <?php echo $handle;?>;
var data_abandon = <?php echo $abandon;?>;

var a = {
    labels: label_A,
    datasets:
    [{
        label: 'Call',
        data: [
              data_handle,
              data_present,
              data_abandon],
        backgroundColor:
        [
          'rgba(7,204,204, 1)',
          'rgba(119,45,127, 1)',
          'rgba(255,203,0, 1)'
        ],
    }],
};
  // Call

  var label_B = ['Present'];
  var data_call_present = <?php echo $callMay;?>;
  var data_ticket = <?php echo $ticket_may;?>;


  var b = {
      labels: label_B,
      datasets:
      [{
          label: 'Call',
          data: data_call_present,
          backgroundColor:
          [
            'rgba(7,204,204, 1)'
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
            'rgba(255,203,0, 1)'
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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };
  // Top question

  var label_D = <?php echo $labelKanwil;?>;
  var data_kanwil = <?php echo $kanwil;?>;

  var d = {
    labels: label_D,
    datasets:
    [{
        label: 'Top Kanwil',
        data: data_kanwil,
        backgroundColor:
        [
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };
  //Top Kanwil

  var label_E = <?php echo $cat2;?>;
  var data_topic = <?php echo $subQuestion;?>;

  var e = {
    labels: label_E,
    datasets:
    [{
        label: 'Top Sub Question',
        data: data_topic,
        backgroundColor:
        [
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };
  //Top Sub Question

  var label_F = <?php echo $labelKcu;?>;
  var data_kcu = <?php echo $kcu;?>;

  var f = {
    labels: label_F,
    datasets:
    [{
        label: 'Top All KCU',
        data: data_kcu,
        backgroundColor:
        [
          'rgba(0,201,167, 1)',
          'rgba(251,234,255, 1)',
          'rgba(179,156,208, 1)',
          'rgba(227,123,64, 1)',
          'rgba(214,93,177, 1)',
          'rgba(132,94,194, 1)',
          'rgba(255,111,145, 1)',
          'rgba(255,150,113, 1)',
          'rgba(255,199,95, 1)',
          'rgba(249,248,113, 1)',
        ],
    }],
  }

  var label_G = <?php echo $labelKcp;?>;
  var data_kcp = <?php echo $kcp;?>;

  var g = {
    labels: label_G,
    datasets:
    [{
        label: 'Top All KCP',
        data: data_kcp,
        backgroundColor:
        [
          'rgba(0,201,167, 1)',
          'rgba(251,234,255, 1)',
          'rgba(179,156,208, 1)',
          'rgba(227,123,64, 1)',
          'rgba(214,93,177, 1)',
          'rgba(132,94,194, 1)',
          'rgba(255,111,145, 1)',
          'rgba(255,150,113, 1)',
          'rgba(255,199,95, 1)',
          'rgba(249,248,113, 1)',
        ],
    }],
  }

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
                text: 'Calls'
            },
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
    var topQuestionC = new Chart(myc, {
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
            },
        }
    });

    var myd = document.getElementById("kanwilMay").getContext("2d");
    var kanwilD = new Chart(myd, {
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
            },
        }
    });

    var mye = document.getElementById("topSubQuestionMay").getContext("2d");
    var topSubQuestionD = new Chart(mye, {
        type: 'bar',
        data: e,
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
                text: 'Top Sub Question'
            },
        }
    });

    var myf = document.getElementById("topKcuAll").getContext("2d");
    var kcuF = new Chart(myf, {
        type: 'bar',
        data: f,
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
                text: 'Top KCU'
            },
        }
    });

    var myg = document.getElementById("topKcpAll").getContext("2d");
    var kcpg = new Chart(myg, {
        type: 'bar',
        data: g,
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
                text: 'Top KCP'
            },
        }
    });
  }

</script>
