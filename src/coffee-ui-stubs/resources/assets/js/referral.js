var ctx = document.getElementById('referral');
var referral = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Agu', 'Sep', 'Ock', 'Nov', 'Des'],
        datasets: [{
            label: 'Website Analytics',
            pointBackgroundColor: 'rgb(163, 160, 251)',
            pointBorderColor: 'rgb(163, 160, 251)',
            backgroundColor: 'transparent',
            borderColor: 'rgb(163, 160, 251)',
            data: [15, 25, 15, 25, 35, 15, 20, 30, 20, 10, 15, 25]
        }]
    },

    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                },
                stacked: true
            }]
        },
        responsive: true,
        legend: {
            display: false,
        }
    }
});
