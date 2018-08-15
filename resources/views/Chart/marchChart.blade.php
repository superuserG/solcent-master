<script>
  var label_A = ['Handle','abandon'];

  var data_handle = <?php echo $handle;?>;
  var data_abandon = <?php echo $abandon;?>;

  var a = {
      labels: label_A,
      datasets:
      [{
          label: 'Call',
          data: [data_handle,
                data_abandon],
          backgroundColor:
          [
            'rgba(0,67,88, 1)',
            'rgba(31,138,112, 1)',
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
            'rgba(190,219,57, 1)'
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
            'rgba(255,225,26, 1)'
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
          'rgba(0,67,88, 1)','rgba(31,138,112, 1)','rgba(190,219,57, 1)','rgba(255,225,26, 1)','rgba(253,116,0, 1)',
          'rgba(0,67,88, 1)','rgba(31,138,112, 1)','rgba(190,219,57, 1)','rgba(255,225,26, 1)','rgba(253,116,0, 1)',
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
          'rgba(46,9,39, 1)','rgba(217,0,0, 1)','rgba(255,45,0, 1)','rgba(255,140,0, 1)','rgba(4,117,111, 1)',
          'rgba(46,9,39, 1)','rgba(217,0,0, 1)','rgba(255,45,0, 1)','rgba(255,140,0, 1)','rgba(4,117,111, 1)',
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
        ],
    }],
  };
  //Top Sub Question

  window.onload = function(){

    var ma = document.getElementById("callMarch").getContext("2d");
    var callA = new Chart(ma, {
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
            },
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

    var me = document.getElementById("topSubQuestionMar").getContext("2d");
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

  }

</script>
