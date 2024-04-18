<?php
    function checar() {
    
    $paym = [
        "produto" => "Camisa DnD - Tamanho M",
        'dia_pag' => 1,
        'mes_pag' => 2,
        'ano_pag' => 2024,
        "pago" => false
    ];
    
    if ($paym['dia_pag'] < 2 and
        $paym['mes_pag'] <= 2 and 
        $paym['ano_pag'] <= 2024) {
        $paym['pago'] = true;
    }
    
    echo $paym['pago'] ? 'Verdadeiro' : 'Falso';
}

checar();
--------------------------------------------------------------------------------------------------------------


 function media() {
    $aluno =[
        "nome" => "João",
        "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9
        ]
    ];
    
   $med = $aluno['notas']['prova1']+$aluno['notas']['prova2']+$aluno['notas']['prova3']+$aluno['notas']['prova4'];
    $mediafinal = $med/4;
    
    echo $mediafinal;
    
    }
    media();
--------------------------------------------------------------------------------------------------------------

  function mostrarNomeIdadeAlunos($alunos) {
    foreach ($alunos as $aluno) {
        echo "Nome: " . $aluno['nome'] . ", Idade: " . $aluno['idade'] . "\n";
        }
    }

    $alunos = [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ];
mostrarNomeIdadeAlunos($alunos);

--------------------------------------------------------------------------------------------------------------


 function cadastrarUsuario($usuarios, $newUsuario) {
        if (strlen($newUsuario['nome']) <= 3) {
            echo "Erro: O nome do usuário deve ter mais que 3 caracteres.";
            return;
        }
    
        if ($newUsuario['idade'] <= 18) {
            echo "Erro: A idade do usuário deve ser maior que 18.";
            return;
        }
    
        if (strlen($newUsuario['email']) <= 10) {
            echo "Erro: O email do usuário deve ter mais que 10 caracteres.";
            return;
        }
    
        if (strlen($newUsuario['senha']) <= 8) {
            echo "Erro: A senha do usuário deve ter mais que 8 caracteres.";
            return;
        }
    
        foreach ($usuarios as $usuario) {
            if ($usuario['email'] === $newUsuario['email']) {
                echo "Erro: Este email já está cadastrado.";
                return;
            }
    }

    $usuarios[] = $newUsuario;
    echo "Usuário cadastrado com sucesso!";
    return $usuarios;
    }
    
    $usuarios = [
        [
            "nome" => "João",
            "idade" => 20,
            "email" => "email@email.com",
            "senha" => "12345678"
        ],
        [
            "nome" => "Guilherme",
            "idade" => 17,
            "email" => "meu.email@email.com",
            "senha" => "abc12312312"
        ]
    ];
    
    $novoUsuario = [
        "nome" => "John Doe",
        "idade" => 25,
        "email" => "johndoe@email.com",
        "senha" => "pass54321"
    ];
    
    cadastrarUsuario($usuarios, $novoUsuario);

?>
