<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);


.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}

.form select {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}

.form textarea {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
}

.form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #4CAF50;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}

.form button:hover,
.form button:active,
.form button:focus {
    background: #43A047;
}

body {
    background: #181818;
    /* fallback for old browsers */

    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
</style>

<div class="login-page">
    <div class="form">



        <form class="login-form">
            <input type="text" placeholder="nombre" />
            <input type="text" placeholder="pseudonimo" />
            <input type="text" placeholder="email" />
            <select id="reg-type">
                <option>SLECCIONE GENERO</option>
                <option value="">Ell@s</option>
                <option value="">GENERO 1</option>
                <option value="">Y ASI</option>
            </select>
            <input type="password" placeholder="password" />
            <textarea placeholder="descriopcion"></textarea>

            <button>Registrate</button>
            <p class="message">YA esras registrado?? <a href="#">Ingresa al club</a></p>
        </form>
    </div>
</div>