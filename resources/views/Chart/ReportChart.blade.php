<script>
  // Home Chart
// Pie Ticket
  var label = ['2018'];
  var data_presented = <?php echo $presented; ?>;
  var data_completed = <?php echo $completed; ?>;
  var data_in_progress = <?php echo $in_progress; ?>;
  var pieChartData = {
      datasets:
      [{
          data: [data_presented, data_completed, data_in_progress],
          backgroundColor:
          [
              'rgba(255, 99, 132, 1.0)',
              'rgba(89, 158, 207, 1.0)',
              'rgba(255, 206, 86, 1.0)',
          ],
          borderColor:
          [
            'rgba(255, 99, 132, 1.0)',
            'rgba(54, 162, 235, 1.0)',
            'rgba(255, 206, 86, 1.0)',
          ]
      }],

      labels:
        [
            'Presented',
            'completed',
            'in_progress'
        ]


  };

// Bar Question
  var cat = <?php echo $cat; ?>;
  var data_category = <?php echo $question; ?>;
  var questionChartData = {
      labels: cat,
      datasets:
      [{
          label: 'Top Category 1',
          data: data_category,
          backgroundColor:
          [
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
              'rgba(114,175,197, 1.0)',
          ],
      }],

  };


// Kanwil
  var kanwil =  <?php echo $labelKanwil; ?>;
  var data_kanwil = <?php echo $kanwil; ?>;
  var kanwilChartData = {
      labels: kanwil,
      datasets:
      [{
          label: 'Top Calling',
          data: data_kanwil,
          backgroundColor:
          [
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
            'rgba(51,107,135, 1.0)',
          ]
      }],
  };


// Cabang
  var cabang = <?php echo $labelSite; ?>;
  var data_cabang = <?php echo $cabang; ?>;
  var cabangChartData = {
      labels: cabang,
      datasets:
      [{
          label: 'Top Branch Calling',
          data: data_cabang,
          backgroundColor:
          [
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
            'rgba(106,124,126, 1.0)',
          ]
      }],
  };


  window.onload = function() {
      // Report Calls Home
      var ctx = document.getElementById("reportCalls").getContext("2d");
      var callsBar = new Chart(ctx, {
          type: 'doughnut',
          data: pieChartData,
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

      // Report Question Home
      var cty = document.getElementById("reportQuestion").getContext("2d");
      var questionBar = new Chart(cty, {
          type: 'bar',
          data: questionChartData,
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

      // Report Kanwil Home
      var ctz = document.getElementById("reportKanwil").getContext("2d");
      var wilayahBar = new Chart(ctz, {
          type: 'bar',
          data: kanwilChartData,
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
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Kanwil Report'
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

      // Report Cabang Home
      var ctw = document.getElementById("reportCabang").getContext("2d");
      var cabangBar = new Chart(ctw, {
          type: 'bar',
          data: cabangChartData,
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
                      borderColor: 'rgb(0, 255, 0)',
                      borderSkipped: 'bottom'
                  }
              },
              responsive: true,
              title: {
                  display: true,
                  text: 'Cabang Report'
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


  };
</script>
