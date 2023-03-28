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
    <form class="col-6 mb-5">
      <div class="row mb-5">
        <label for="salary" class="form-label">Salário Bruto</label>
        <input type="number" class="form-control" id="salary" name="salary" />
      </div>

      <div class="row mb-5">
        <label for="dependentes" class="form-label">Número de dependentes</label>
        <input type="number" class="form-control" id="dependentes" name="dependentes" />
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

    <div>
      <h2 class="mb-3">Resultado:</h2>

      <div class="row">
        <p>
          <strong>INSS:</strong>
          R$1200,00
        </p>
      </div>

      <div class="row">
        <p>
          <strong>IRRF:</strong>
          R$1200,00
        </p>
      </div>

      <div class="row">
        <p>
          <strong>Salário Líquido:</strong>
          R$1200,00
        </p>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>
</body>

</html>