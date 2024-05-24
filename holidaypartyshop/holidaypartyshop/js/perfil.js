function altFundo(btn) {
    const img1 = "url('img/fundoEvento/fundo1.jpg')";
    const img2 = "url('img/fundoEvento/fundo2.jpg')";
    const img3 = "url('img/fundoEvento/fundo3.jpg')";
    const img4 = "url('img/fundoEvento/fundo4.jpg')";

    const img11 = "url('img/fundoEvento/fundo1-1.jpg')";
    const img21 = "url('img/fundoEvento/fundo2-1.jpg')";
    const img31 = "url('img/fundoEvento/fundo3-1.jpg')";
    const img41 = "url('img/fundoEvento/fundo4-1.jpg')";

    const body = document.body;
    const screenWidth = window.innerWidth;

    if (screenWidth < 640) {
        if (btn === "btn1") {
            body.style.backgroundImage = img11;
            localStorage.setItem ("back",img11)
        } else if (btn === "btn2") {
            body.style.backgroundImage = img21;
            localStorage.setItem ("back",img21)
        } else if (btn === "btn3") {
            body.style.backgroundImage = img31;
            localStorage.setItem ("back",img31)
        } else if (btn === "btn4") {
            body.style.backgroundImage = img41;
            localStorage.setItem ("back",img41)
        }
    } else {
        if (btn === "btn1") {
            body.style.backgroundImage = img1;
            localStorage.setItem( "back",img1)
        } else if (btn === "btn2") {
            body.style.backgroundImage = img2;
            localStorage.setItem( "back",img2)
        } else if (btn === "btn3") {
            body.style.backgroundImage = img3;
            localStorage.setItem( "back",img3)
        } else if (btn === "btn4") {
            body.style.backgroundImage = img4;
            localStorage.setItem( "back",img4)
        }
    }
}

function definirFoto() {
    const fotoPerfil = document.getElementById("foto-perfil");
    const inputFoto = document.getElementById("foto");

    inputFoto.addEventListener("change", function (event) {
        const arquivo = event.target.files[0];

        if (arquivo) {
            const leitor = new FileReader();

            leitor.onload = function (e) {
                const fotoPerfilSrc = e.target.result;

                localStorage.setItem("profileImage", fotoPerfilSrc);

                fotoPerfil.src = fotoPerfilSrc;
            };

            leitor.readAsDataURL(arquivo);
        }
    });

    const fotoPerfilArmazenada = localStorage.getItem("profileImage");
    if (fotoPerfilArmazenada) {
        fotoPerfil.src = fotoPerfilArmazenada;
    }
}
