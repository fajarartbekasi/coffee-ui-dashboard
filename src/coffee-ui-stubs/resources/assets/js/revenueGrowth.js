var ctx = document.getElementById('revenueGrowth');
var revenueGrowth = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Revenue Growth',
            backgroundColor: 'rgb(255, 99, 132)',
            data: [50, 10, 5, 2, 20, 30, 45]
        }]
    },

    options: {
        responsive: true,
        legend: {
            padding: [10],
            position: 'bottom'
        }
    }
});