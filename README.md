# SOLID

SOLID é um acrônimo para cinco princípios de design **orientado a objetos** que podem ser usados para criar software mais flexível, reutilizável e fácil de manter.


- **Single Responsibility Principle (SRP)**: Uma classe deve ter apenas uma responsabilidade.
- **Open-Closed Principle (OCP)**: Uma classe deve estar aberta para extensão, mas fechada para modificação.
- **Liskov Substitution Principle (LSP)**: Substitutos devem ser substituíveis.
- **Interface Segregation Principle (ISP)**: Não force uma interface que não precisa ser implementada.
- **Dependency Inversion Principle (DIP)**: Depender de abstrações, não de implementações.

### **Single Responsibility Principle (SRP)**

Este princípio afirma que uma classe deve ter apenas uma responsabilidade. Isso significa que uma classe deve ser responsável por uma única tarefa ou conjunto de tarefas relacionadas. Se uma classe tiver mais de uma responsabilidade, ela se tornará mais difícil de entender e manter. *Uma classe deve ter um e apenas um motivo para mudar, se você tiver mais de um motivo para mudar a classe tem mais de um responsabilidade*. 

[SOLID — Single Responsibility Principle — SRP | by Vitor Ribeiro | Medium](https://vitorhpribeiro.medium.com/solid-single-responsibility-principle-srp-27d74ece8195)

### **Open-Closed Principle (OCP)**:

Este princípio afirma que uma classe deve estar aberta para extensão, mas fechada para modificação. Isso significa que uma classe deve ser projetada para permitir que novos comportamentos sejam adicionados sem modificar o código existente. *Toda vez que eu implemento algo novo no sistema, eu preciso alterar essa classe, aumentar ela de tamanho adicionando novas condições. Nesse principio, cria-se uma classe base e toda vez que for necessário adicionar alguma funcionalidade nova, basta usar o **Extend** e conseguir o mesmo efeito com uma forma mais componentizada.*

[SOLID — Open Closed Principle — OCP | by Vitor Ribeiro | Medium](https://vitorhpribeiro.medium.com/solid-open-closed-principle-ocp-e077041c5927)

### **Liskov Substitution Principle (LSP)**:

Este princípio afirma que um substituto deve ser substituível. Isso significa que um objeto de um tipo específico deve poder ser substituído por um objeto de um tipo derivado sem afetar o comportamento do programa. *Basicamente* u*ma classe base deve poder ser substituída pela sua classe derivada*

[SOLID — Liskov Substitution Principle — LSP | by Vitor Ribeiro | Medium](https://vitorhpribeiro.medium.com/solid-liskov-substitution-principle-lsp-ef29811ccf8c)

### **Interface Segregation Principle (ISP)**:

Este princípio afirma que não force uma interface que não precisa ser implementada. Isso significa que uma interface deve ser projetada para ser consistente com os requisitos de seus usuários. *Ou seja, uma classe não precisa implementar uma interface se ela não for utilizar todos os métodos dessa interface. Caso exista um método que não será utilizado, deve-se segregar/criar uma nova interface apenas com esse método.*

[SOLID de verdade – Interface Segregation Principle (ISP) | iMasters](https://imasters.com.br/arquitetura-da-informacao/solid-de-verdade-interface-segregation-principle-isp)

[Solid — I.S.P — Interface Segregation Principle | by Thiago Aragão | Medium](https://medium.com/@tbaragao/solid-i-s-p-interface-segregation-principle-c0b25d7dccf9)

### **Dependency Inversion Principle (DIP):**

Este princípio afirma que depender de abstrações, não de implementações. Isso significa que um objeto deve depender de interfaces, não de classes específicas. *A implementação é uma classe concreta (dei um **new class** e já gera o objeto dessa classe). Já a abstração é o modelo da classe em si, quando se fala para ”depender de abstrações”, é para não ficar preso em uma classe especifica.*

[Solid — D.I.P — Dependency Inversion Principle | by Thiago Aragão | Medium](https://medium.com/@tbaragao/solid-d-i-p-dependency-inversion-principle-e87527f8d0be)