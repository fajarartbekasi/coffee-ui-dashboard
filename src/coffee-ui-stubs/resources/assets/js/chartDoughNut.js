var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Target', 'Feb', 'Mart', 'Ebay'],
        datasets: [{
            data: [50, 30, 30, 30],
            backgroundColor: [
                'rgba(100, 181, 246)',
                'rgba(163, 160, 251)',
                'rgba(175, 68, 72)',
                'rgba(255, 126, 71)'
            ],
        }]
    },
    options: {
        respinsive: true,
        legend: {
            padding: [10],
            position: 'bottom'
        }
    }
});