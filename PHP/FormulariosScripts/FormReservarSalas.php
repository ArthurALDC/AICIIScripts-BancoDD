 <!DOCTYPE html>
 <hmtl>
    <body></body>
 <!-- Formulário para reservar sala -->
    <h2>Reservar Sala</h2>
    <form action="" method="post">
        <label for="sala_id">ID da Sala:</label><br>
        <input type="number" id="sala_id" name="sala_id"><br>
        <label for="usuario">Professor:</label><br>
        <input type="text" id="usuario" name="usuario"><br>

    <!-- Eu só quero mostrar o dia e o mês da reserva e as horas, mas o mysql precisa da data completa A-D-M // H-M-S então preciso extrair
      e concatenar no script depois pois precisa vir com o DATETIME completo então lá embaixo vai ta la -->
       
        <label for="dia">Dia:</label><br>
        <input type="number" id="dia" name="dia" min="1" max="31"><br>
        
        <label for="mes">Mês:</label><br>
        <input type="number" id="mes" name="mes" min="1" max="12"><br>
        
        <label for="inicio">Início (HH:MM):</label><br>
        <input type="text" id="inicio" name="inicio" placeholder="HH:MM"><br>
        <label for="fim">Fim (HH:MM):</label><br>
        <input type="text" id="fim" name="fim" placeholder="HH:MM"><br>
        <input type="submit" value="Reservar">
    </form>
</body>
</hmtl>
