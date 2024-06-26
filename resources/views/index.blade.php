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

h2{
    color: #ffffff;
}

.row{
    display: grid;
    grid-template-columns: 2fr 2fr;
    gap: 20px;
}

.col-50{
    width: 300px;
    background-color: #d8dbce;
    padding: 20px;
    border-radius: 10px;
}
form{
    display: flex;
    align-items: center;
    flex-direction: column;
    gap: 20px;
}

input{
    border: none;
    border-bottom: 2px solid #edf2f5;
    padding: 10px;
}


.button-10 {
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 6px 14px;
  font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  background: #ffc107;
   background-origin: border-box;
   box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-10:hover{
    opacity: 70%;
}

.button-10:active {
  opacity: 100%;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
  outline: 0;
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
                    <input type="text" name="dniLogin" id="dniLogin" placeholder="dni..." required>
                </div>
                <div>
                    <input type="text" name="nameLogin" id="nameLogin" placeholder="name..." required>
                </div>
                <div>
                    <button class="button-10">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-50">
                <form action="/reg">
                    <div>
                        <h2>Registrate</h2>
                    </div>
                    <div>
                        <input type="text" name="nameReg" id="nameReg" placeholder="name..." required>
                    </div>
                    <div>
                        <input type="text" name="last_nameReg" id="last_nameReg" placeholder="last_name..." required>
                    </div>
                    <div>
                        <input type="number" name="edadReg" id="edadReg" placeholder="30 años" required>
                    </div>
                    <div>
                     <input type="number" name="cuentaReg" id="cuentaReg" placeholder="nº Cuenta" required>
                    </div>
                    <div>
                        <button class="button-10">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
</div>
