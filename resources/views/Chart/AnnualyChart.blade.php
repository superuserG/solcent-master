<script>
  var year = ['2018','2019','2020'];
  var call_data = [123,456,789];
  var callChart =
  {
    labels: year,
    datasets:
    [{
      data: call_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  var year2 = ['2018','2019','2020'];
  var question_data = [123,456,789];
  var questionChart =
  {
    labels: year2,
    datasets:
    [{
      data: question_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  var year3 = ['2018'];
  var kanwil_data = [123,456,789];
  var kanwilChart =
  {
    labels: year3,
    datasets:
    [{
      data: kanwil_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  var year4 = ['2018'];
  var cab_data = [123,456,789];
  var cabBar =
  {
    labels: year4,
    datasets:
    [{
      data: cab_data,
      backgroundColor:
      [
        'rgba(0,0,128, 0.5)',
        'rgba(0,0,255, 0.5)',
        'rgba(0,128,0, 0.5)'
      ]
    }]
  };

  window.onload = function ()
  {
    var aca = document.getElementById("annualCalls").getContext("2d");
    var callBar = new Chart(aca,{
      type: 'bar',
      data: call_data,
      options: {
        scales:{
          yAxes:[{
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
        elements:{
          rectangle:{
            borderSkipped:'bottom'
          }
        },
        responsive:true,
        title:{
          display: true,
          text: 'Calls'
        }
      }
    });

    var acb = document.getElementById("reportQuestion").getContext("2d");
    var kanwilBar = new Chart(acb, {
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
                text: 'Kanwil Calls Report'
            }
        }
    });
  }
</script>
