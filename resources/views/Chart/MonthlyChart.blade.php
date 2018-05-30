<script>
  var cat1 = ['January','February','March'];
  var call_data = [1,2,3];
  var callChart = {
      labels: cat1,
      datasets:
      [{
          data: call_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var cat2 = ['January','February','March'];
  var kanwil_data = [1,2,3];
  var kanwilChart = {
      labels: cat2,
      datasets:
      [{
          data: kanwil_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var cat3 = ['January','February','March'];
  var cab_data = [1,2,3];
  var cabChart = {
      labels: cat3,
      datasets:
      [{
          data: cab_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };

  var cat4 = ['January','February','March'];
  var question_data = [1,2,3];
  var questionChart = {
      labels: cat4,
      datasets:
      [{
          data: question_data,
          backgroundColor:
          [
              'rgba(0,0,128, 0.5)',
              'rgba(0,0,255, 0.5)',
              'rgba(0,128,0, 0.5)'
          ],
      }],

  };


  window.onload = function() {
    //report call per-bulan
    var cta = document.getElementById("monthCalls").getContext("2d");
    var callBar = new Chart(cta, {
        type: 'bar',
        data: call_data,
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
            }
        }
    });

    //top kanwil
    var ctb = document.getElementById("monthKanwil").getContext("2d");
    var kanwilBar = new Chart(ctb, {
        type: 'bar',
        data: kanwil_data,
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
            }
        }
    });

    //top cabang
    var ctc = document.getElementById("monthCab").getContext("2d");
    var cabBar = new Chart(ctc, {
        type: 'bar',
        data: cab_data,
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
            }
        }
    });

    //FAQ
    var ctd = document.getElementById("monthQuestion").getContext("2d");
    var questionBar = new Chart(ctd, {
        type: 'bar',
        data: question_data,
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
  }

</script>
