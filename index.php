<?php
$url = 'https://occul.ticketers.club/status';
$data = file_get_contents($url);
$tableData = '';
if (!empty($data)) {
    $json = json_decode($data, true);
    if (!empty($json)) {
        foreach ($json as $row) {
            $tableData .= '<tr>';
            $tableData .= '<td>'.$row[0].'</td>';
            $tableData .= '<td>'.$row[1].'</td>';
            $tableData .= '<td>'.$row[2].'</td>';
            $tableData .= '<td>'.$row[3].'</td>';
            $tableData .= '</tr>';
        }
    }
}
?>
