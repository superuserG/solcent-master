<script>
  var cat = ['January'];
  var data_category = <?php echo $ticket_january; ?>;
  var questionChartData = {
      labels: cat,
      datasets:
      [{
          data: data_category,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)',
              'rgba(0,128,128, 0.5)',
              'rgba(0,255,0, 0.5)',
              'rgba(0,255,255, 0.5)',
              'rgba(128,128,0, 0.5)',
              'rgba(128,128,128, 0.5)',
              'rgba(255,0,255, 0.5)',
              'rgba(255,255,0, 0.5)'
          ],
      }],

  };



  window.onload = function() {
    //report call per-bulan
    var cta = document.getElementById("monthCalls").getContext("2d");
    var questionBar = new Chart(cta, {
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
            }
        }
    });

    // report compare call report dan jumlah ticket
  //   var ctb = document.getElementById("reportCalls").getContext("2d");
  //   var questionBar = new Chart(ctb, {
  //       type: 'bar',
  //       data: questionChartData,
  //       options: {
  //         scales: {
  //            yAxes: [{
  //               ticks: {
  //                 beginAtZero: true
  //               }
  //            }],
  //            xAxes: [{
  //                    ticks: {
  //                     fontSize: 10
  //                    }
  //                   }]
  //           },
  //           elements: {
  //               rectangle: {
  //                   borderSkipped: 'bottom'
  //               }
  //           },
  //           responsive: true,
  //           title: {
  //               display: true,
  //               text: 'Question Report'
  //           }
  //       }
  //   });
  //
  //   //top pertanyaan bulan ini
  //   var ctc = document.getElementById("reportCalls").getContext("2d");
  //   var questionBar = new Chart(ctc, {
  //       type: 'bar',
  //       data: questionChartData,
  //       options: {
  //         scales: {
  //            yAxes: [{
  //               ticks: {
  //                 beginAtZero: true
  //               }
  //            }],
  //            xAxes: [{
  //                    ticks: {
  //                     fontSize: 10
  //                    }
  //                   }]
  //           },
  //           elements: {
  //               rectangle: {
  //                   borderSkipped: 'bottom'
  //               }
  //           },
  //           responsive: true,
  //           title: {
  //               display: true,
  //               text: 'Question Report'
  //           }
  //       }
  //   });
  //
  //   //report top pertanyaan dari category 2
  //   var ctd = document.getElementById("reportCalls").getContext("2d");
  //   var questionBar = new Chart(ctd, {
  //       type: 'bar',
  //       data: questionChartData,
  //       options: {
  //         scales: {
  //            yAxes: [{
  //               ticks: {
  //                 beginAtZero: true
  //               }
  //            }],
  //            xAxes: [{
  //                    ticks: {
  //                     fontSize: 10
  //                    }
  //                   }]
  //           },
  //           elements: {
  //               rectangle: {
  //                   borderSkipped: 'bottom'
  //               }
  //           },
  //           responsive: true,
  //           title: {
  //               display: true,
  //               text: 'Question Report'
  //           }
  //       }
  //   });
  // };

</script>
