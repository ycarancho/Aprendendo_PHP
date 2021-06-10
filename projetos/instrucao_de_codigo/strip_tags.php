<?php 

// Elimina Tags HTML para salvar no banco.

$salvarnobanco = "<p>Paragrafo</p><div>Uma Div </div>";

echo strip_tags($salvarnobanco);
