<?php
$data_file = 'data.txt';

if (file_exists($data_file) && filesize($data_file) > 0) {
    $contents = file_get_contents($data_file);
    $opinions = explode("\n\n", trim($contents));
    
    echo '<h2>Мнения клиентов:</h2>';
    echo '<div class="opinion-container">';
    
    foreach ($opinions as $opinion) {
        $opinion_parts = explode("\n", $opinion);
        $opinion_text = htmlspecialchars(end($opinion_parts));
        $opinion_text = str_replace("Мнение: ", "", $opinion_text);
        
        echo '<div class="opinion">';
        echo '<p class="opinion-text">' . $opinion_text . '</p>';
        echo '</div>';
    }
    
    echo '</div>';
} else {
    echo '<p>Пока нет ни одного мнения.</p>';
}
?>