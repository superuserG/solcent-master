<script>
var label_kcu = <?php echo $labelKcu;?>;
var data_kcu = <?php echo $kcu;?>;

var dataKcu = {
  labels: label_kcu,
  datasets:
  [{
      label: 'KCU',
      data: data_kcu,
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

var label_kcp = <?php echo $labelKcp;?>;
var data_kcp = <?php echo $kcp;?>;

var dataKcp = {
  labels: label_kcp,
  datasets:
  [{
      label: 'KCP',
      data: data_kcp,
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

window.onload = function(){
  var me = document.getElementById("kp").getContext("2d");
  var compareE = new Chart(me, {
      type: 'bar',
      data: dataKcu,
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

  var mf = document.getElementById("kp2").getContext("2d");
  var compareF = new Chart(mf, {
      type: 'bar',
      data: dataKcp,
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
