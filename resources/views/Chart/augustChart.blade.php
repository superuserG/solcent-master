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
  var data_call_present = <?php echo $callAug;?>;
  var data_ticket = <?php echo $ticket_aug;?>;


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
  var data_topic = <?php echo $kanwil;?>;

  var d = {
    labels: label_D,
    datasets:
    [{
        label: 'Top Kanwil',
        data: data_topic,
        backgroundColor:
        [
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  };

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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
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
          'rgba(127,45,91, 1)','rgba(	46, 0, 79, 1)','rgba(93, 96, 173, 1)','rgba(0, 0, 255, 1)','rgba(98,211,255, 1)',
          'rgba(0, 255, 0, 1)','rgba(174,225,0, 1)','rgba(255, 255, 0, 1)','rgba(255, 127, 0, 1)','rgba(255, 0 , 0, 1)',
        ],
    }],
  }

window.onload = function(){
  var aua = document.getElementById("callAug").getContext("2d");
  var callA = new Chart(aua, {
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

  var aub = document.getElementById("compareCallAug").getContext("2d");
  var compareB = new Chart(aub, {
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

  var auc = document.getElementById("topQuestionAug").getContext("2d");
  var topQuestionC = new Chart(auc, {
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

  var aud = document.getElementById("kanwilAug").getContext("2d");
  var kanwilD = new Chart(aud, {
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

  var aue = document.getElementById("topSubQuestionAug").getContext("2d");
  var topSubQuestionE = new Chart(aue, {
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
      }
  });

  var auf = document.getElementById("topKcuAll").getContext("2d");
  var kcuF = new Chart(auf, {
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
      }
  });

  var aug = document.getElementById("topKcpAll").getContext("2d");
  var kcpg = new Chart(aug, {
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
      }
  });

}
</script>
