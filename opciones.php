<html>
<head></head>
<body>
    <form action="recibe.php" method="POST">
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
            <option value="cancun">Cancún</option>
            <option value="vallarta">Puerto Vallarta</option>
            <option value="acapulco">Acapulco</option>
            <option value="cabos">Los Cabos</option>
            <option value="mazatlan">Mazatlán</option>
            <option value="huatulco">Huatulco</option>
            <option value="escondido">Puerto escondido</option>
            </select><br>

            <h3>Actividades</h3>
            <labe><input type="checkbox" name="actividad[]" value="buceo">Buceo</label><br>
            <label><input type="checkbox" name="actividad[]" value="lancha">Paseo en lancha</label><br>
            <label><input type="checkbox" name="actividad[]" value="arqueologia">Visita a zonas arqueológicas</label><br>
            <label><input type="checkbox" name="actividad[]" value="senderismo">Senderismo</label><br>
            <label><input type="checkbox" name="actividad[]" value="pesca">Pesca deportiva</label><br>
            <label><input type="checkbox" name="actividad[]" value="gastronomia">Recorrido gastronómico</label><br>
            <label><input type="checkbox" name="actividad[]" value="museos">Visita a museos</label><br>

        <h3>Servicio Adicional</h3>
            <label><input type="checkbox" name="servicios[]" value="aeropuerto">Transporte al aeropuerto</label><br>
            <label><input type="checkbox" name="servicios[]" value="desayuno">Desayuno incluido</label><br>
            <label><input type="checkbox" name="servicios[]" value="hospedaje">Hospedaje de lujo</label><br>
            <label><input type="checkbox" name="servicios[]" value="seguro">Seguro de viajero</label><br>
            <label><input type="checkbox" name="servicios[]" value="automovil">Renta de automóvil</label><br>
            <label><input type="checkbox" name="servicios[]" value="guia">Guía turístico</label><br>

        </select><br>
        
        <h3></h3>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>