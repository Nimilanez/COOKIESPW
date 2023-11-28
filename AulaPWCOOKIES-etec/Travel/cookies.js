const sscaoCookies = document.getElementById('sseccao-de-cookies');

function aceiteicookies() {
    // Salva a preferência do usuário em um cookie
    setCookie("CookiesAceitos", "true", 30);
    
    // Remove a classe para esconder o aviso de cookies
    sscaoCookies.classList.remove('mostrar');
}

// Verifica se o usuário já aceitou os cookies anteriormente
if (getCookie("CookiesAceitos") === "true") {
    sscaoCookies.classList.remove('mostrar');
} else {
    sscaoCookies.classList.add('mostrar');
}

// Função para definir um cookie
function setCookie(nome, valor, diasParaExpirar) {
    var dataExpiracao = new Date();
    dataExpiracao.setTime(dataExpiracao.getTime() + (diasParaExpirar * 24 * 60 * 60 * 1000));
    var expires = "expires=" + dataExpiracao.toUTCString();
    document.cookie = nome + "=" + valor + ";" + expires + ";path=/";
}

// Função para recuperar um cookie
function getCookie(nome) {
    var nomeCookie = nome + "=";
    var cookies = document.cookie.split(';');
    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nomeCookie) == 0) {
            return cookie.substring(nomeCookie.length, cookie.length);
        }
    }
    return "";
}

    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
 
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");