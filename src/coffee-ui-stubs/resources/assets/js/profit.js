var ctx = document.getElementById('profit');
var profit = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Target', 'Feb'],
        datasets: [{
            data: [50, 50],
            backgroundColor: [
                'rgba(237, 236, 254)',
                'rgba(163, 161, 251)',
            ],
        }]
    },

    options: {
        responsive: true,
        legend: {
            position: 'bottom',
            display: false
        }

    }
});

var ctx = document.getElementById('provit');
var provit = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Target', 'Feb'],
        datasets: [{
            data: [50, 50],
            backgroundColor: [
                'rgba(163, 161, 251)',
                'rgba(237, 236, 254)',

            ],
        }]
    },

    options: {
        responsive: true,
        legend: {
            position: 'bottom',
            display: false
        }

    }
});
