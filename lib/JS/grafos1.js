$(document).ready(function () {
    // Fazer uma solicitação AJAX para o arquivo PHP
    $("#mensagem").show();
    $("#spinner").show();

    $.ajax({
        url: '/controllers/controllerClientes.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log('Dados dos clientes:', data);

            google.charts.load('current', { 'packages': ['corechart'] });
            google.charts.setOnLoadCallback(function () {
                drawSexoChart(data);
                drawESChart(data);
                drawSalarioChart(data);
            });
            function drawSexoChart(dadosCliente) {

                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRow(['Masculino', dadosCliente['sexo']['Masculino']]);
                data.addRow(['Feminino', dadosCliente['sexo']['Feminino']]);

                // Set options for Sarah's pie chart.
                var options = {
                    title: 'Sexo dos Clientes',
                    width: 400,
                    height: 300
                };

                // Instantiate and draw the chart for Sarah's pizza.
                var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
                chart.draw(data, options);
            }

            // Callback que desenha o gráfico de pizza para Anthony.
            function drawESChart(dadosCliente) {
                // Create the data table for Anthony's pizza.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRow(['Solteiro', dadosCliente['estadoCivil']['Solteiro']]);
                data.addRow(['Casado', dadosCliente['estadoCivil']['Casado']]);
                data.addRow(['Separado', dadosCliente['estadoCivil']['Separado']]);
                data.addRow(['Divorciado', dadosCliente['estadoCivil']['Divorciado']]);
                data.addRow(['Viuvo', dadosCliente['estadoCivil']['Viuvo']]);

                // Set options for Anthony's pie chart.
                var options = {
                    title: 'Estado civil',
                    width: 400,
                    height: 300

                };
                // Instantiate and draw the chart for Anthony's pizza.
                var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
                chart.draw(data, options);
            }
            function drawSalarioChart(dadosCliente) {
                // Create the data table for Anthony's pizza.
                var data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRow(['R$1000 à R$3000', dadosCliente['faixaSalarial']['mil']]);
                data.addRow(['R$3000 à R$5000', dadosCliente['faixaSalarial']['mil3']]);
                data.addRow(['R$5000 à R$10Mil', dadosCliente['faixaSalarial']['mil5']]);
                data.addRow(['Acima de R$10Mil', dadosCliente['faixaSalarial']['maxSalario']]);

                // Set options for Anthony's pie chart.
                var options = {
                    title: 'Faixa Salarial',
                    width: 400,
                    height: 300,
                    fontSize: 14
                };

                // Instantiate and draw the chart for Anthony's pizza.
                var chart = new google.visualization.PieChart(document.getElementById('Salario_chart_div'));
                chart.draw(data, options);
            }
            $("#mensagem").hide();
            $("#spinner").hide();

        },
        error: function (error) {
            console.error('Erro na solicitação AJAX:', error);
            $("#mensagem").hide();
            $("#spinner").hide();
        }
    });
});
