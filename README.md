# 🎰 Api-Loteria

Este é um projeto desenvolvido para fins de estudo, focado no consumo de APIs externas utilizando **PHP 8.4**. O objetivo principal foi colocar em prática conhecimentos de requisições HTTP, manipulação de dados JSON e boas práticas de desenvolvimento.

## 🚀 Tecnologias Utilizadas

* **PHP 8.4.10**: Versão mais recente, explorando o uso de objetos `CurlHandle`.
* **cURL**: Biblioteca utilizada para realizar as requisições de forma robusta.
* **HTML/CSS**: Para a visualização básica dos resultados.
* **Git/GitHub**: Para versionamento e controle de histórico.

## 🧠 O que eu aprendi neste projeto?

Durante o desenvolvimento deste projeto, foquei em resolver desafios reais de integração:

1.  **Manipulação de cURL no PHP 8.4**: Implementei o uso de `curl_setopt_array` para uma configuração mais limpa e organizada das requisições.
2.  **Ciclo de vida do CurlHandle**: Compreendi que nas versões recentes do PHP, o fechamento manual (`curl_close`) torna-se opcional devido ao gerenciamento automático de objetos pelo Garbage Collector.
3.  **Tratamento de Dados**: Recebimento e decodificação de strings JSON em arrays associativos para exibição dinâmica.
4.  **Versionamento**: Configuração correta de arquivos `.gitignore` para manter o repositório leve e profissional, removendo dependências desnecessárias (como a pasta `vendor`).

## 🛠️ Como executar o projeto

1.  Clone este repositório:
    ```bash
    git clone [https://github.com/davidtav/Api-Loteria.git](https://github.com/davidtav/Api-Loteria.git)
    ```
2.  Acesse a pasta do projeto:
    ```bash
    cd Api-Loteria
    ```
3.  (Opcional) Se houver dependências via Composer:
    ```bash
    composer install
    ```
4.  Inicie um servidor PHP local:
    ```bash
    php -S localhost:8000
    ```
5.  Acesse `http://localhost:8000` no seu navegador.

## 📝 Licença

Este projeto está sob a licença [MIT](./LICENSE). sendo para fins de estudo e prática. Sinta-se à vontade para usar como referência!

---
Desenvolvido por [David Tavares](https://github.com/davidtav) 🚀
