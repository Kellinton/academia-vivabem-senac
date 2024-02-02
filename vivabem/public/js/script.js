function showAlert(mensagem, targetElementId, timeout = 3000) {
    var messageDiv = document.getElementById(targetElementId);
    messageDiv.innerHTML = mensagem;
    messageDiv.classList.remove('msgContato');

    setTimeout(function() {
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros) {
    let todosOsErros = "";

    for (const [key, value] of Object.entries(erros)) {
        todosOsErros += `<div class="alert alert-danger">${value.join(", ")}</div>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }
}

/*
document.getElementById('formContato').addEventListener('submit', function (e) {
     e.preventDefault();

    var data = {
        nomeContato       :   document.getElementById('nomeContato').value,
        emailContato      :   document.getElementById('emailContato').value,
        foneContato       :   document.getElementById('foneContato').value,
        assuntoContato    :   document.getElementById('assuntoContato').value,
        mensContato       :   document.getElementById('mensContato').value,
    }

    fetch('/contato/enviar', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(!response.ok){ // se resposta não for ok
            return response.json().then(errorData => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            showAlert(
            `
            </br>
            <div class="alert alert-success">${data.success}</div>`,
             "contatoMensagem"
            );
            document.getElementById("formContato").reset(); // reset nos campos do form
        } else {
            showAlert(
            `
            </br>
            <div class="alert alert-danger">Erro ao enviar email.</div>`,
             "contatoMensagem"
            );
        }
    })
    .catch((error) => { // o catch recolhe os erros imprevistos
        if (error.errors) {
            displayError(error.errors);
        } else {
                console.log("Erro desconhecido", error);
        }
    });
});

*/

// formulário
function formContato(e){
    e.preventDefault();

   var data = {
       nomeContato       :   document.getElementById('nomeContato').value,
       emailContato      :   document.getElementById('emailContato').value,
       foneContato       :   document.getElementById('foneContato').value,
       assuntoContato    :   document.getElementById('assuntoContato').value,
       mensContato       :   document.getElementById('mensContato').value,
   }

   fetch('/contato/enviar', {
       method: 'POST',
       headers: {
           'Content-Type': 'application/json',
           'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
       },
       body: JSON.stringify(data)
   })
   .then(response => {
       if(!response.ok){ // se resposta não for ok
           return response.json().then(errorData => {
               throw errorData;
           });
       }
       return response.json();
   })
   .then(data => {
       if (data.success) {
           showAlert(
           `
           </br>
           <div class="alert alert-success">${data.success}</div>`,
            "contatoMensagem"
           );
           document.getElementById("formContato").reset(); // reset nos campos do form
       } else {
           showAlert(
           `
           </br>
           <div class="alert alert-danger">Erro ao enviar email.</div>`,
            "contatoMensagem"
           );
       }
   })
   .catch((error) => { // o catch recolhe os erros imprevistos
       if (error.errors) {
           displayError(error.errors);
       } else {
               console.log("Erro desconhecido", error);
       }
   });
};



// Newsletter
function newsForm(e){
    e.preventDefault();

    var data = {
        emailNewsletter     :   document.getElementById('emailNewsletter').value,
    }

    fetch('/contato/enviarnew', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify(data)
    })
    .then(response => {
        if(!response.ok){ // se resposta não for ok
            return response.json().then(errorData => {
                throw errorData;
            });
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            showAlert(
            `
            </br>
            <div class="alert alert-success">${data.success}</div>`,
             "newsletterMensagem"
            );
            document.getElementById("newsForm").reset(); // reset nos campos do form
        } else {
            showAlert(
            `
            </br>
            <div class="alert alert-danger">Erro ao enviar email.</div>`,
             "newsletterMensagem"
            );
        }
    })
    .catch((error) => { // o catch recolhe os erros imprevistos
        if (error.errors) {
            displayError(error.errors);
        } else {
                console.log("Erro desconhecido", error);
        }
    });
};
