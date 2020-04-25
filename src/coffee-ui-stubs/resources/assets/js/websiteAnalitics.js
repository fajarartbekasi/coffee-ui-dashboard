var ctx = document.getElementById('analytics');
var analytics = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September','Ocktober', 'November','Desember'],
        datasets: [{
            label: 'Website Analytics',
            backgroundColor: 'rgb(163, 160, 251)',
            data: [15, 25, 15, 25, 35, 15, 20, 30, 20, 10, 15, 25]
        }]
    },

    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        responsive: true,
        legend: {
            display: false,
        }
    }
});
