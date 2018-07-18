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
          'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
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
          'rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)','rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
          'rgba(227,123,64, 0.5)',
      ],
  }],
};

window.onload = function(){
  var me = document.getElementById("kcu8").getContext("2d");
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
              text: 'Top Ku'
          }
      }
  });

  var mf = document.getElementById("kcp8").getContext("2d");
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
              text: 'Top kp'
          }
      }
  });
}
</script>
