<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cancelar Cita</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    padding-top: 20px;
  }
  .container {
    max-width: 600px;
  }
  .btn-cancelar {
    background-color: #9f09ef;
    border-color: #b114f4;
  }
  .btn-cancelar:hover {
    background-color: #bf0deb;
    border-color: #9106ee;
  }
</style>
</head>
<body>

<div class="container">
  <h2 class="text-center">Cancelar Cita</h2>
  <form action="/ruta-para-procesar-cancelacion" method="post">
    <div class="mb-3">
      <label for="appointmentId" class="form-label">ID de la Cita:</label>
      <input type="text" class="form-control" id="appointmentId" name="appointmentId" required>
    </div>
    <div class="mb-3">
      <label for="cancelReason" class="form-label">Motivo de la Cancelación:</label>
      <textarea class="form-control" id="cancelReason" name="cancelReason" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-cancelar">Cancelar Cita</button>
  </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>