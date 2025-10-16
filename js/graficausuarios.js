const ctx = document.getElementById('graficoUsuarios');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
    datasets: [{
      label: 'Usuarios nuevos',
      data: [10, 20, 15, 30, 25],
      backgroundColor: '#4e73df'
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: { beginAtZero: true }
    }
  }
});