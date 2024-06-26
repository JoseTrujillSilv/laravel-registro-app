<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    div{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #161616;
        flex-direction: column;
        gap: 20px;
    }
    h2{
        font-family: Arial, Helvetica, sans-serif;
        color: greenyellow;
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
  background: greenyellow;
   background-origin: border-box;
   box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  color: #161616;text-decoration: none;
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

<div>
    <h2>Se ha registrado con éxito <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
</svg></h2>
<h2>Su dni para entrar es: {{$dni}}</h2>
<a class="button-10" href="/">Back</a>
</div>
