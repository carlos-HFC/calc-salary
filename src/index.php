<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calcular salário líquido</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
  <div class="bg-primary">
    <div class="container p-3">
      <div class="display-3 text-center">Calcular salário</div>
    </div>
  </div>

  <div class="container d-flex flex-column align-items-center justify-content-center p-5">
    <form class="col-6 mb-5" method="POST">
      <div class="row mb-5">
        <div class="col">
          <label for="salary" class="form-label">Salário Bruto</label>
          <input type="number" class="form-control" id="salary" name="salary" value="0" min="0" />
        </div>
      </div>

      <div class="row mb-5">
        <div class="col">
          <label for="dependentes" class="form-label">Número de dependentes</label>
          <input type="number" class="form-control" id="dependentes" name="dependentes" value="0" min="0" />
        </div>
        <div class="col">
          <label for="assist" class="form-label">Assistência médica</label>
          <input type="number" class="form-control" id="assist" name="assist" value="0" min="0" max="250" />
        </div>
      </div>

      <div class="row gap-2 justify-content-center">
        <button type="submit" class="btn btn-primary col-4">
          Enviar
        </button>
        <button type="reset" class="btn btn-secondary col-4">
          Cancelar
        </button>
      </div>
    </form>

    <?php 
    include "functions.php";

    if (isset($_POST['salary']) && isset($_POST['dependentes']) && isset($_POST['assist'])) {
      $salary = $_POST['salary'];
      $dependentes = $_POST['dependentes'];
      $assist = $_POST['assist'];

      $inss = calcularINSS($salary);
      $irrf = calcularIRRF($salary, $dependentes);
      $liquido = $salary - $inss - $irrf - $assist;

      echo '
      <div>
        <h2 class="mb-3">Resultado do cálculo:</h2>

        <div class="row">
          <p>
            <strong>Seu salário bruto:</strong>
            R$ ' . number_format($salary, 2, ',', '.') . '
          </p>
        </div>

        <div class="row">
          <p>
            <strong>INSS:</strong>
            R$ ' . number_format($inss, 2, ',', '.') . '
          </p>
        </div>

        <div class="row">
          <p>
            <strong>IRRF:</strong>
            R$ ' . number_format($irrf, 2, ',', '.') . '
          </p>
        </div>

        <div class="row">
          <p>
            <strong>Assitência médica:</strong>
            R$ ' . number_format($assist, 2, ',', '.') . '
          </p>
        </div>

        <div class="row">
          <p>
            <strong>Salário Líquido:</strong>
            R$ ' . number_format($liquido, 2, ',', '.') . '
          </p>
        </div>
      </div>
    ';
    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>