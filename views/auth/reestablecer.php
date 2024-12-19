<div class="contenedor reestablecer">
    <?php include_once __DIR__.'/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca tu nueva contraseña</p>
        <form class="formulario" method="POST" action="/reestablecer">
            <div class="campo">
                <label for="password">Password</label>
                <input  
                    type="password"
                    id="password"
                    placeholder="Tu password nuevo"
                    name="password"
                >
            </div>

            <input type="submit" class="boton" value="Guardar contraseña">
        </form>

        <div class="acciones">
            <a href="/">Si ya tienes cuenta Inicia Sesion</a>
        </div>
    </div>
</div>