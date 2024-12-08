
//função que impede o envio do formulário de tarefas vazio
function validaForm(){
    var Nome = document.forms["formulario"]["nome_tarefa"].value;
    var Prioridade = document.forms["formulario"]["pri_tarefa"].value;
    var Inicio = document.forms["formulario"]["datatempo_inicial"].value;
    var Entrega = document.forms["formulario"]["datatempo_final"].value;

    if(Nome == '' || Prioridade == '' || Inicio == '' || Entrega == ''){
        alert('Por favor, preencha todos os campos');
        return false;
    }
}

//função que impede o envio do formulário de funcionários vazio
function validaForm2(){
    var Nome = document.forms["formulario2"]["nome"].value;
    var Cpf = document.forms["formulario2"]["cpf"].value;
    var Funcao = document.forms["formulario2"]["funcao"].value;
    var Turno = document.forms["formulario2"]["turno"].value;

    if(Nome == '' || Cpf == '' || Funcao == '' || Turno == ''){
        alert('Por favor, preencha todos os campos');
        return false;
    }
}

function abreAviso(cpf){
    var aviso = document.createElement("div");
    var form = document.createElement("form");
    var btnFechar = document.createElement("button");
    var btnEnviar = document.createElement("button");
    var inputCpf = document.createElement("input");
    var inputTitulo = document.createElement("input");
    var inputCorpo = document.createElement("textarea");

    // div
  aviso.style.width = "220px";
  aviso.style.height = "220px";
  aviso.style.position = "fixed";
  aviso.style.top = "50%";
  aviso.style.left = "50%";
  aviso.style.transform = "translate(-50%, -50%)";
  aviso.style.backgroundColor = "white";
  aviso.style.padding = "10px";
  aviso.style.border = "1px solid black";
  aviso.innerHTML = " ";

  //form 
  form.style.width = "100%";
  form.style.height = "100%";
  form.action = "../back/enviar_aviso.php";
  form.method = "post";
  aviso.appendChild(form);

  // botões
  btnFechar.style.width = "100px";
  btnFechar.style.height = "20px";
  btnFechar.style.backgroundColor = "red";
  btnFechar.innerHTML = "Fechar";
  btnFechar.addEventListener("click", function(){
    aviso.remove();
  });
  

  btnEnviar.style.width = "100px";
  btnEnviar.style.height = "20px";
  btnEnviar.style.backgroundColor = "green";
  btnEnviar.innerHTML = "Enviar";
  btnEnviar.type = "submit";
  

  //inputs
  inputCpf.name = "cpf";
  inputCpf.value = cpf;
  inputCpf.readOnly = true;
  inputTitulo.name = "titulo";
  inputTitulo.type = "text";
  inputTitulo.style.width = "200px";
  inputTitulo.style.height = "20px";
  inputTitulo.maxLength = 50;
  inputCorpo.name = "corpo";
  inputCorpo.type = "textarea";
  inputCorpo.style.height = "20px";
  inputCorpo.style.width = "200px";
  inputCorpo.maxLength = 100;

  
  form.appendChild(inputCpf);
  form.appendChild(inputTitulo);
  form.appendChild(inputCorpo);
  form.appendChild(btnFechar);
  form.appendChild(btnEnviar);

  document.body.appendChild(aviso);
}



