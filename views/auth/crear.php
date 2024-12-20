<div class="contenedor crear">
    <?php include_once __DIR__.'/../templates/nombre-sitio.php'; ?>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en ZenTask</p>
        <form action="/crear" class="formulario" method="POST">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input  
                    type="text"
                    id="nombre"
                    placeholder="Tu nombre"
                    name="nombre"
                >
            </div>

            <div class="campo">
                <label for="email">Email</label>
                <input  
                    type="email"
                    id="email"
                    placeholder="Tu Email"
                    name="email"
                >
            </div>

            <div class="campo">
                <label for="password">Password</label>
                <input  
                    type="password"
                    id="password"
                    placeholder="Tu password"
                    name="password"
                >
            </div>


            <div class="campo">
                <label for="password2">Repetir Password</label>
                <input  
                    type="password"
                    id="password"
                    placeholder="Repite tu password"
                    name="password2"
                >
            </div>



            <input type="submit" class="boton" value="Crear cuenta">
        </form>

        <div class="acciones">
            <a href="/">Si ya tienes cuenta Inicia Sesion</a>
            <a href="/olvide">Olvidaste tu Password</a>
        </div>
    </div>
</div>