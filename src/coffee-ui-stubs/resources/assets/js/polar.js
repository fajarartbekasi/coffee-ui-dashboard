var ctx = document.getElementById('bubble');
var bubble = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Target', 'Feb', 'Mart'],
        datasets: [{
            data: [30, 30, 50],
            backgroundColor: [
                'rgba(255, 218, 131)',
                'rgba(163, 160, 251)',
                'rgba(255, 126, 71)'
            ],
        }]
    },

    options: {
        responsive: true,
        legend: {
            position: 'bottom'
        }

    }
});
