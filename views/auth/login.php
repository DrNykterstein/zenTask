<div class="contenedor login">
    <h1 class="zentask">ZenTask</h1>
    <p class="tagline">Crea y Administra tus proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesion</p>
        <form action="/" class="formulario" method="POST">
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


            <input type="submit" class="boton" value="Iniciar Sesison">
        </form>

        <div class="acciones">
            <a href="/crear">Obtner Una cuenta</a>
            <a href="/olvide">Olvidaste tu Password</a>
        </div>
    </div>
</div>