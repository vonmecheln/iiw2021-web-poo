<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conteudo">

        <?php

        class ContaBancaria
        {
            private $saldo = 0;
            private $historicoMovimentacao = [];

            function imprimirValor()
            {
                echo ("<p>R$" . $this->saldo . "</p>");
            }

            function exibirHistorico()
            {
                // echo ("<pre>");
                // var_dump($this->historicoMovimentacao);

        ?>
                <section class="extrato">
                    <table>
                        <thead></thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < sizeof($this->historicoMovimentacao); $i++) {
                                echo ("<tr><td>" . $this->historicoMovimentacao[$i] . "</td></tr>");
                            }

                            foreach ($this->historicoMovimentacao as $historico) {
                                echo ("<tr><td>$historico</td></tr>");
                            }
                            ?>

                        </tbody>
                        <tfoot></tfoot>
                    </table>
                </section>


        <?php

            }

            function depositar($valor)
            {
                if ($valor > 0) {
                    $this->saldo += $valor;
                    $this->historicoMovimentacao[] = $valor;
                }
            }

            function sacar($valor)
            {
                if ($valor > 0 && $valor <= $this->saldo) {
                    $this->saldo -= $valor;
                    $this->historicoMovimentacao[] = -1 * $valor;
                }
            }
        }

        $conta1 = new ContaBancaria();
        $conta1->depositar(10);
        $conta1->depositar(16.99);
        $conta1->sacar(20.00);
        $conta1->sacar(20.00);


        $conta1->exibirHistorico();

        ?>

    </div>
</body>

</html>