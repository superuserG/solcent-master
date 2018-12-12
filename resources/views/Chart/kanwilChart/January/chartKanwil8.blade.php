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
  var e = document.getElementById("kcu8").getContext("2d");
  var compareE = new Chart(e, {
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

  var f = document.getElementById("kcp8").getContext("2d");
  var compareF = new Chart(f, {
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
