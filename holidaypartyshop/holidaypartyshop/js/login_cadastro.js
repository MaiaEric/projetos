function logout() {
    localStorage.removeItem("usuarioLogado");
    window.location.href = "login.html";
}

function validateFormLogin() {
    var username = document.getElementById("usuario").value;
    var password = document.getElementById("senha").value;
    var alerta = document.getElementById("erro");

    if (username === "") {
        alerta.textContent = "Campo nome vazio."
        return false;
    }

    if (password === "") {
        alerta.textContent = "Campo senha vazio."
        return false;
    }

    // Verifica se o usuário existe no localStorage
    var storedUser = localStorage.getItem(username);

    if (storedUser && JSON.parse(storedUser).password === password) {
        alerta.textContent = "Login bem-sucedido!";
        localStorage.setItem("usuarioLogado", username);
        return true;
    } else {
        alerta.textContent = "Usuário ou senha inválidos.";
        return false;
    }
}


function validateFormCadastro() {
    var username = document.getElementById("usuario").value;
    var password = document.getElementById("senha").value;
    var alerta = document.getElementById("erro");

    if (username === "") {
        alerta.textContent = "Campo nome vazio."
        return false;
    }

    if (password === "") {
        alerta.textContent = "Campo senha vazio."
        return false;
    }

    // Verifica se o usuário já existe no localStorage
    if (localStorage.getItem(username)) {
        alerta.textContent = "Nome de usuário já cadastrado. Escolha outro nome.";
        return false;
    }

    // Salva o usuário no localStorage
    var userObject = { username: username, password: password };
    localStorage.setItem(username, JSON.stringify(userObject));

    alerta.textContent = "Cadastro bem-sucedido!";
    return true;
}