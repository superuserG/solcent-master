<script>
//call
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
  var data_call_present = <?php echo $callDes;?>;
  var data_ticket = <?php echo $ticket_des;?>;


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
window.onload = function(){
  var dca = document.getElementById("callDec").getContext("2d");
  var callA = new Chart(dca, {
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

  var dcb = document.getElementById("compareCallDec").getContext("2d");
  var callA = new Chart(dcb, {
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
              text: 'Call'
          }
      }
  });

  var dcc = document.getElementById("topQuestionDec").getContext("2d");
  var callA = new Chart(dcc, {
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
              text: 'Category'
          }
      }
  });

  var dcd = document.getElementById("topicDec").getContext("2d");
  var callA = new Chart(dcd, {
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

  var me = document.getElementById("topSubQuestionDec").getContext("2d");
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
