$(function() {

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Calls Handled",
            value: 234
        }, {
            label: "Calls Abandoned",
            value: 20
        }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: 'Kanwil 1',
            a: 262
        }, {
            y: 'Kanwil 2',
            a: 185
        }, {
            y: 'Kanwil 3',
            a:88
        }, {
            y: 'Kanwil 4',
            a: 200
        }, {
            y: 'Kanwil 5',
            a: 70
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Series A'],
        hideHover: 'auto',
        resize: true
    });

    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            tanggal: '2010',
            jumlah: 2666
        },{
            tanggal: '2011',
            jumlah: 6810
        },{
            tanggal: '2012',
            jumlah: 10687
        }, {
            tanggal: '2013',
            jumlah: 8432
        }],
        xkey: 'tanggal',
        ykeys: ['jumlah'],
        labels: ['jumlah'],
        pointSize: 5,
        hideHover: 'auto',
        resize: true
    });

    // Morris.Line([
    //   element: 'morris-line-chart',
    //   data:[{
    //     y: '2006',
    //     a: 100,
    //     b: 90
    //   },{
    //     y: '2007',
    //     a: 80,
    //     b: 100
    //   },{
    //     y: '2008',
    //     a: 70,
    //     b: 85
    //   },{
    //     y: '2009',
    //     a: 60,
    //     b: 90
    //   }],
    //   xkey: 'y',
    //   ykeys: ['a','b'],
    //   labels: ['Series A','Series B']
    //
    // ]);
});
