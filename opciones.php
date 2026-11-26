<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <form action="resivo.php" method="POST">
        <h1>Viajes el chino</h1>
        <p>Bievenido a nuestra agencia de viajes,
            porfavor planee su viaje deseado:</p>

            <h3>Datos del cliente</h3>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

            <h3>Destinos</h3>
            <select id="destino" name="destino[]" type="multiple">
            <option value="Cancún">Cancún</option>
            <option value="Puerto Vallarta">Puerto Vallarta</option>
            <option value="Acapulco">Acapulco</option>
            <option value="Los Cabos">Los Cabos</option>
            <option value="Mazatlán">Mazatlán</option>
            <option value="Huatulco">Huatulco</option>
            <option value="Puerto escondido">Puerto escondido</option>
            </select><br>

            <h3>Actividades</h3>
            <label><input type="checkbox" name="actividad[]" value="Buceo">Buceo</label><br>
            <label><input type="checkbox" name="actividad[]" value="Paseo en lancha">Paseo en lancha</label><br>
            <label><input type="checkbox" name="actividad[]" value="Visita a zonas arqueológicas">Visita a zonas arqueológicas</label><br>
            <label><input type="checkbox" name="actividad[]" value="Senderismo">Senderismo</label><br>
            <label><input type="checkbox" name="actividad[]" value="Pesca deportiva">Pesca deportiva</label><br>
            <label><input type="checkbox" name="actividad[]" value="Recorrido gastronómico">Recorrido gastronómico</label><br>
            <label><input type="checkbox" name="actividad[]" value="Visita a museos">Visita a museos</label><br>

        <h3>Servicio Adicional</h3>
            <label><input type="checkbox" name="servicios[]" value="Transporte al aeropuerto">Transporte al aeropuerto</label><br>
            <label><input type="checkbox" name="servicios[]" value="desaDesayuno incluidoyuno">Desayuno incluido</label><br>
            <label><input type="checkbox" name="servicios[]" value="Hospedaje de lujo">Hospedaje de lujo</label><br>
            <label><input type="checkbox" name="servicios[]" value="Seguro de viajero">Seguro de viajero</label><br>
            <label><input type="checkbox" name="servicios[]" value="Renta de automóvil">Renta de automóvil</label><br>
            <label><input type="checkbox" name="servicios[]" value="Guía turístico">Guía turístico</label><br>

        </select><br>
        
        <h3></h3>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>