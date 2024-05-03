//TODO: Funcion para iniciar el proceso de inicio de secion con Google
function startGoogleSignIn(){
    //TODO: Obtener la instancia de autenticacion de Google
    const auth = gapi.auth2.getAuthInstance();
    //Iniciar sesion con google
    auth.signIn();
}

function handleCredentialResponse(response){
    
    $.ajax({
        type: 'POST',
        url: 'controller/usuario.php?op=registrargoogle',
        contentType: 'application/json',
        headers: { "Content-Type": "application/json" },
        data: JSON.stringify({
            request_type: 'user_auth',
            credential: response.credential
        }),
        succes: function(data){
            console.log(data);
            if(data === "0"){
                window.location.href = 'view/home/'
            }elseif (data === "1"){
                window.location.href = 'view/home/'
            }
        }
    })

    if(response && response.credential){
        const credentialToken = response.credential;
        //TODO: Decodificar el token manualmente para obtener datos del usuario
        const decodedToken = JSON.parse(atob(credentialToken.split('.')[1]));
        //TODO: imprimir en la consola los datos del usuario
        //console.log(decodedToken);
    }
}