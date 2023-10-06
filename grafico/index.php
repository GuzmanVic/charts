<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Graficas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                Graficos con chars
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-2">
                        <button class="btn btn-primary" onclick="loadDatos()"> Obtener graficas</button>
                    </div>
                </div>
                <canvas id="myChart"></canvas>
                <a class="btn btn-primary">Go graficas</a>
              
            </div>
        </div>
     
    </div>
    <div>
       
      </div>
    <script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function loadDatos(){
        var etiquetas=[];
        var datos=[];
        $.ajax({
            url:"controlador_grafico.php",
            type:'POST'
        }).done(function(resp){
            
            var arr=JSON.parse(resp)
            console.log(arr)
            arr.forEach(element => {
                etiquetas.push(element[1])
                datos.push(element[2])
          });
          new Chart(ctx, {
      type: 'bar',
      data: {
        labels: etiquetas,
        datasets: [{
          label: '# of Votes',
          data: datos,
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
 
        })
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
  

  </script>
</body>
</html>