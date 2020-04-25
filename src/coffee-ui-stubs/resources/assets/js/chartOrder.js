var ctx = document.getElementById('order');
var order = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Product Sold',
            backgroundColor: 'rgba(163, 160, 251)',
            data: [15, 10, 15, 15.5, 15, 15, 28.5]
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