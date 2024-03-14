<?php
class FileModel
{
    public function createFile($newFileName, $fileContent)
    {
        file_put_contents("files/" . $newFileName, $fileContent);
        return "New File Created!";
    }

    public function listFiles()
    {
        $files = scandir("files/");
        return $files;
    }

    public function readFile($filename)
    {
        $file = fopen($filename, "r");
        return $file;
    }

    public function deleteFile($fileName)
    {
        unlink("files/" . $fileName);
        return "File" . $fileName . " Deleted!";
    }

    public function updateFile($filename, $fileContent)
    {
        file_put_contents("files/" . $filename, $fileContent);
        return " File " . $filename . " updated!";
    }
}
