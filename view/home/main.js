document.addEventListener('DOMContentLoaded', function () {
  fetch('http://localhost/PERSONAL_MesadePartes/config/getData.php')
      .then(response => response.json())
      .then(data => {
          if (data.error) {
              console.error(data.error);
              return;
          }

          const months = data.map(item => item.month);
          const energyDeltas = data.map(item => item.total_energy);

          const chart1 = echarts.init(document.getElementById('chart1'));

          const option = {
            title: {
              text: 'Producción de Electricidad por Paneles Solares',
              subtext: 'Este dataset es una herramienta valiosa para cualquiera que trabaje para un futuro mas sustentable.'
          },
              xAxis: {
                  type: 'category',
                  data: months
              },
              yAxis: {
                  type: 'value'
              },
              series: [{
                  data: energyDeltas,
                  type: 'line'
              }]
          };

          chart1.setOption(option);
      })
      .catch(error => console.error('Error fetching data:', error));
});
