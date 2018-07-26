<script>
  var month = [
    'January','February','Maret','April',
    'Mei', 'Juni', 'July', 'Agustus',
    'September','Oktober','November','Desember'
  ];

  var kanwil =  <?php echo $labelKanwil; ?>;
  var data_kanwil = <?php echo $kanwil; ?>;
  var ticketKanwil = {
    labels: kanwil,
    datasets:
    [{
        label: 'Kanwil',
        data: data_kanwil,
        backgroundColor:
          [
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
          ],
      }],
  };

  var calljan = <?php echo $calljan;?>;
  var callFeb = <?php echo $callFeb;?>;
  var callMar = <?php echo $callMar;?>;
  var callApr = <?php echo $callApr;?>;
  var callMei = <?php echo $callMei;?>;
  var callJun = <?php echo $callJun;?>;
  var callJul = <?php echo $callJul;?>;
  var callAug = <?php echo $callAug;?>;
  var callSep = <?php echo $callSep;?>;
  var callOct = <?php echo $callOct;?>;
  var callNov = <?php echo $callNov;?>;
  var callDec = <?php echo $callDec;?>;

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
          label: 'Call',
          data: [calljan, callFeb, callMar, callApr, callMei, callJun, callJul, callAug, callSep, callOct, callNov, callDec],
          backgroundColor:
          [
              'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
              'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
              'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',

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
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
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
          data: [calljan, callFeb, callMar, callApr, callMei, callJun, callJul, callAug, callSep, callOct, callNov, callDec],
          backgroundColor:
          [
            'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
            'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
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
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
            'rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)','rgba(50,77,92, 1)',
          ],
      }],

  };

  var ticket_cabang = <?php echo $cabang;?>;
  var label_cabang = <?php echo $labelCabang;?>;
  var data_cabang = {
    labels: label_cabang,
    datasets:
    [{
      label: 'Cabang',
      data: ticket_cabang,
      backgroundColor:
        [
          'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
          'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
          'rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)','rgba(227,123,64, 1)',
        ],
    }],
  }


  window.onload = function() {
    //report call per-bulan compare dengan ticket
    var cta = document.getElementById("compareCalls").getContext("2d");
    var compareBar = new Chart(cta, {
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
            },
        }
    });

    //call
    var ctb = document.getElementById("callMonths").getContext("2d");
    var callBar = new Chart(ctb, {
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
                text: 'Tickets'
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

    //kanwil
    var ctd = document.getElementById("ticketKanwils").getContext("2d");
    var kanwilBar = new Chart(ctd, {
        type: 'bar',
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

    //Cabang
    var ctd = document.getElementById("ticketCabang").getContext("2d");
    var kanwilBar = new Chart(ctd, {
        type: 'bar',
        data: data_cabang,
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
