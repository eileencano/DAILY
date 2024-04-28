<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Citas para Sitio de Belleza</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  
</style>

<link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <h2>Agendar Cita</h2>
  <form id="appointmentForm">
    <div class="form-group">
      <label for="name">Nombre:</label>
      <input type="text" class="form-control" id="name" required>
    </div>
    <div class="form-group">
      <label for="date">Fecha:</label>
      <input type="date" class="form-control" id="date" required>
    </div>
    <div class="form-group">
      <label for="time">Hora:</label>
      <input type="time" class="form-control" id="time" required>
    </div>
    <div class="small"><a href="login.html">Si ya tienes una cita ?</a></div>
</div>
    <button type="submit" class="btn btn-primary">Agendar</button>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  // Aquí iría el código JavaScript para manejar el formulario y comunicarse con el servidor MySQL
</script>
</body>
</html>