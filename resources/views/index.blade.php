<style>
    *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.row{
    display: grid;
    grid-template-columns: 2fr 2fr;
    gap: 20px;
}

.col-50{
    width: 300px;
}
form{
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-50">
            <form action="/login">
                <div>
                    <h2>Logeate:</h2>
                </div>
                <div>
                    <input type="text" name="dniLogin" id="dniLogin" placeholder="dni...">
                </div>
                <div>
                    <input type="text" name="nameLogin" id="nameLogin" placeholder="name...">
                </div>
                <div>
                    <button>Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-50">
                <form action="/reg">
                    <div>
                        <h2>Registrate</h2>
                    </div>
                    <div>
                        <input type="text" name="nameReg" id="nameReg" placeholder="name...">
                    </div>
                    <div>
                        <input type="text" name="last_nameReg" id="last_nameReg" placeholder="last_name...">
                    </div>
                    <div>
                        <input type="number" name="edadReg" id="edadReg" placeholder="30 años">
                    </div>
                    <div>
                     <input type="number" name="cuentaReg" id="cuentaReg" placeholder="nº Cuenta">
                    </div>
                    <div>
                        <button>Enviar</button>
                    </div>
                </form>
            </div>
        </div>
</div>
