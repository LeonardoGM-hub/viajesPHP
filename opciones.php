<html>
<head></head>
<body>
    <form action="recibe.php" method="POST">
        <h1>Viajes el chino</h1>
        <p>Bievenido a nuestra agencia de viajes,
            porfavor planee su viaje deseado:</p>
            <h3>Destinos</h3>
        <select id="destino" name="destino[] " multiple>
            <option value="cancun">Cancún</option>
            <option value="vallarta">Puerto Vallarta</option>
            <option value="acapulco">Acapulco</option>
            <option value="cabos">Los Cabos</option>
            <option value="mazatlan">Mazatlán</option>
            <option value="huatulco">Huatulco</option>
            <option value="escondido">Puerto escondido</option>
        </select><br>

            <h3>actividades</h3>
        <select id="actividad" name="actividad[] " checkbox>
            <option value="buceo">Buceo</option>
            <option value="lancha">Paseo en lancha</option>
            <option value="arqueologia">Visita a zonas arqueológicas</option>
            <option value="senderismo">Senderismo</option>
            <option value="pesca">Pesca deportiva</option>
            <option value="gastronomia">Recorrido gastronómico</option>
            <option value="museos">Visita a museos</option>
        </select><br>

        <h3>Servicio Adicional</h3>
        <select id="actividad" name="actividad[] " checkbox>
            <option value="aeropuerto">Transporte al aeropuerto</option>
            <option value="desayuno">Desayuno incluido</option>
            <option value="hospedaje">Hospedaje de lujo</option>
            <option value="seguro">Seguro de viajero</option>
            <option value="automovil">Renta de automóvil</option>
            <option value="guia">Guía turístico</option>
        </select><br>
        
        <h3></h3>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>