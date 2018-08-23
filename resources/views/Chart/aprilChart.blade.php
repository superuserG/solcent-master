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
          'rgba(51,77,92, 1)','rgba(239,201,76, 1)','rgba(69,178,157, 1)',
        ],
    }],
};
  // Call

  var label_B = ['Present'];
  var data_call_present = <?php echo $callApr;?>;
  var data_ticket = <?php echo $ticket_apr;?>;


  var b = {
      labels: label_B,
      datasets:
      [{
          label: 'Call',
          data: data_call_present,
          backgroundColor:
          [
              'rgba(51,77,92, 1)',
          ],

      },
      {
          label: 'Ticket',
          data: data_ticket,
          backgroundColor:
          [
            'rgba(69,178,157, 1)'
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
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
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
          'rgba(51,77,92, 1)','rgba(69,178,157, 1)','rgba(239,201,76, 1)','rgba(226,122,63, 1)','rgba(223,90,73, 1)',
        ],
    }],
  }


  window.onload = function(){
    var aa = document.getElementById("callApril").getContext("2d");
    var callA = new Chart(aa, {
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

    var ab = document.getElementById("compareCallApr").getContext("2d");
    var compareB = new Chart(ab, {
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

    var ac = document.getElementById("topQuestionApr").getContext("2d");
    var topQuestionC = new Chart(ac, {
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

    var ad = document.getElementById("topicApr").getContext("2d");
    var topicD = new Chart(ad, {
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

    var ae = document.getElementById("topSubQuestionApr").getContext("2d");
    var kanwilD = new Chart(ae, {
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

    var af = document.getElementById("topKcuAll").getContext("2d");
    var kcuF = new Chart(af, {
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

    var ag = document.getElementById("topKcpAll").getContext("2d");
    var kcpg = new Chart(ag, {
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
