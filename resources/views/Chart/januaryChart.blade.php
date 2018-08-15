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
  var data_call_present = <?php echo $calljan;?>;
  var data_ticket = <?php echo $ticket_jan;?>;


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
  var data_topic = <?php echo $kanwil;?>;

  var d = {
    labels: label_D,
    datasets:
    [{
        label: 'Top Kanwil',
        data: data_topic,
        backgroundColor:
        [
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };
  //Top Topic

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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };

  window.onload = function(){
    var ja = document.getElementById("callJanuary").getContext("2d");
    var callA = new Chart(ja, {
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
                text: 'Calls and Tickets'
            }
        }
    });

    var jb = document.getElementById("compareCallJan").getContext("2d");
    var compareB = new Chart(jb, {
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

    var jc = document.getElementById("topQuestionJan").getContext("2d");
    var compareC = new Chart(jc, {
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

    var jd = document.getElementById("topicJan").getContext("2d");
    var compareD = new Chart(jd, {
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

    var me = document.getElementById("topSubQuestionJan").getContext("2d");
    var compareD = new Chart(me, {
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
            animation: {
                duration: 3,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            }
        }
    });

    var jaf = document.getElementById("topKcuAll").getContext("2d");
    var kcuF = new Chart(jaf, {
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
            animation: {
                duration: 3,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            }
        }
    });

    var jag = document.getElementById("topKcpAll").getContext("2d");
    var kcpg = new Chart(jag, {
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
            animation: {
                duration: 3,
                onComplete: function () {
                    var chartInstance = this.chart,
                        ctx = chartInstance.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            }
        }
    });
  }

</script>
