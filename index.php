<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluacion</title>
    <!-- NOMBRE DEL ALUMNO: AVIÑA NERI LEONARDO DANIEL
    GRUPO:5PRAM -->
</head>
<body>
    <form method="post" action="evaluacion.php">
        <label for="interes">intereses en %:
            <input type="number" name="interes" min="1" required>
        </label><br><br>
        <label for="p">Préstamo:
            <input type="number" name="p" min="1" required>
        </label><br><br>
        <label for="meses">meses:
            <input type="number" name="meses" min="1" max="12" required>
        </label>
        <br>
        <button>enviar</button>
    </form>
</body>
</html>
<style>
    input{
        width: 39px;
    }
    label{
        width: 200px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    form{
        width: 200px;
        margin: auto;
        padding: 5px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 3px solid red;
    }
</style>