<?php
$uploaddir = __DIR__."\\uploads\\";
// $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
// echo $uploadfile;
// echo '<pre>';


$files = [];
$files = normalize_files_array($_FILES);
foreach($files['userfile'] as $file){
    $uploadfile = $uploaddir.  md5(date("Y-m-d H:i:s") ). basename($file['name']); 
    if (move_uploaded_file($file['tmp_name'], $uploadfile)) {
        $eilute = "Failo pavadinimas -".$file['tmp_name']." ikelimo data".date("Y-m-d H:i:s")."\n";
        $file = 'people.txt';
       
        if(!file_exists($file)){
            //sukuriam faila ir irasom duomenys i ji
            file_put_contents($file, $eilute);
        } else {
            //papildom faila jei toks failas jau yra
            file_put_contents($file,  $eilute, FILE_APPEND);
        }
        
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible file upload attack!\n";
    }
}
function normalize_files_array($files = []) {
    $normalized_array = [];
    foreach($files as $index => $file) {
        if (!is_array($file['name'])) {
            $normalized_array[$index][] = $file;
            continue;
        }
        foreach($file['name'] as $idx => $name) {
            $normalized_array[$index][$idx] = [
                'name' => $name,
                'type' => $file['type'][$idx],
                'tmp_name' => $file['tmp_name'][$idx],
                'error' => $file['error'][$idx],
                'size' => $file['size'][$idx]
            ];
        }
    }
    return $normalized_array;
}

echo '<pre>';
print_r($files);
echo '<pre>';

$file_data = file($file);
foreach($file_data as $line){
    echo $line."<br>"; //po viena eilute nuskaito
}
echo '<pre>';
print_r($file_data);
echo '<pre>';
 //ar gerai nuskaito duomenis?
?>