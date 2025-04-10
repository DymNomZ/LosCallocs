function getRandomHexColor() {
    return '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
}

(async function() {
    const data = [
        { year: 2010, count: 10 },
        { year: 2011, count: 20 },
        { year: 2012, count: 15 },
        { year: 2013, count: 25 },
        { year: 2014, count: 22 },
        { year: 2015, count: 30 },
        { year: 2016, count: 28 },
    ];

    Chart.defaults.color = '#fff'

  new Chart(
    document.getElementById('positionChart'),
    {
      type: 'pie',
      data: {
        labels: positionData.map(x=>x.name),
          datasets: [{
            label: 'Users',
            data: positionData.map(x=>x.number),
            backgroundColor: positionData.map(x=>getRandomHexColor()),
            hoverOffset: 40
          }],
      }
    }
  );

  new Chart(
    document.getElementById('soldChart'),
    {
      type: 'bar',
      data: {
        labels: soldData.map(x=>x.name),
          datasets: [{
            label: 'Sold',
            backgroundColor: soldData.map(x=>getRandomHexColor()),
            data: soldData.map(x=>x.number),
          }],
      },
      options: {
        plugins: {
          legend: {
            display: false
          }
        }
      }
    }
  );
})();