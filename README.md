# EnvioDeEmailAJAX

Um formulário de contato simples que envia e-mail sem recarregar a página. A ideia foi praticar a integração entre front-end e back-end usando AJAX: o usuário preenche os campos, clica em enviar e recebe o retorno ali mesmo, sem sair da tela.

## O que ele faz

O formulário tem os campos de nome, assunto, e-mail e mensagem. Antes de enviar, o jQuery confere se está tudo preenchido e avisa caso falte alguma coisa. Estando ok, os dados vão por uma requisição AJAX para o PHP, que monta o e-mail e dispara usando o PHPMailer via SMTP.

## Tecnologias

- PHP
- PHPMailer (envio via SMTP)
- JavaScript com jQuery (requisição AJAX)
- HTML e CSS

## Como rodar

1. Clone o repositório:
   ```
   git clone https://github.com/Gui-Porto/EnvioDeEmailAJAX.git
   ```
2. Coloque os arquivos em um servidor com PHP (XAMPP, WAMP ou similar).
3. No `EnviaEmail.php`, preencha suas credenciais de SMTP (host, usuário e senha do e-mail) e o e-mail de destino.
4. Abra o `index.html` pelo servidor local e teste o envio.

> Para o envio funcionar, você precisa de um servidor SMTP válido e das credenciais corretas. Por segurança, nunca suba senhas reais para o repositório.

## Estrutura

- `index.html` — formulário e o script com a validação e a chamada AJAX
- `EnviaEmail.php` — recebe os dados e envia o e-mail com o PHPMailer
- `phpmailer/` — biblioteca usada para o envio

## Observação

No `index.html` a chamada AJAX aponta para `enviar.php`, mas o arquivo no repositório se chama `EnviaEmail.php`. Para o envio funcionar, ajuste a URL no script ou renomeie o arquivo.
