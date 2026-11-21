const totalAlunos = 10;
let alunoAtual = 0;
const dadosAlunos = [];

function proximoAluno() {
    // Pega os valores dos inputs atuais
    const nome = document.getElementById('input-nome').value;
    const matricula = document.getElementById('input-matricula').value;
    const endereco = document.getElementById('input-endereco').value;
    const media = document.getElementById('input-media').value;

    // Validação simples se preencheu
    if (!nome || !matricula || !endereco || !media) {
        alert("Por favor, preencha todos os campos.");
        return;
    }

    // Salva no array temporário
    dadosAlunos.push({nome, matricula, endereco, media});
    alunoAtual++;

    if (alunoAtual < totalAlunos) {
        // Atualiza o título e limpa os campos para o próximo
        document.getElementById('titulo-passo').innerText = `Cadastro do ${alunoAtual + 1}º Aluno`;
        document.getElementById('input-nome').value = '';
        document.getElementById('input-matricula').value = '';
        document.getElementById('input-endereco').value = '';
        document.getElementById('input-media').value = '';
    } else {
        // Terminou os 10! Cria os inputs ocultos e envia o formulário para o PHP
        const form = document.getElementById('form-cadastro');

        dadosAlunos.forEach((aluno, index) => {
            form.appendChild(criarInputOculto(`nome[${index}]`, aluno.nome));
            form.appendChild(criarInputOculto(`matricula[${index}]`, aluno.matricula));
            form.appendChild(criarInputOculto(`endereco[${index}]`, aluno.endereco));
            form.appendChild(criarInputOculto(`media_geral[${index}]`, aluno.media));
        });

        // Remove os inputs visuais antigos para não duplicar no POST
        document.getElementById('campos-dinamicos').remove();
        document.querySelectorAll('label, input:not([type=hidden]), button').forEach(el => el.remove());

        // Adiciona um aviso e envia
        const aviso = document.createElement('p');
        aviso.innerText = "Enviando dados para o processamento...";
        form.appendChild(aviso);

        form.submit();
    }
}

function criarInputOculto(nome, valor) {
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = nome;
    input.value = valor;
    return input;
}
