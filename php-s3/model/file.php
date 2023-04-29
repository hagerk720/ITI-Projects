<?php

use Aws\S3\S3Client;

class Files
{
    private $_s3;
    public function __construct()
    {
        $this->set_credentials();
    }
    public function is_Valid()
    {
        if ($_FILES["fileToUpload"]["size"] > 3000000) {
            die("file size is too large");
        } elseif (!stristr($_FILES["fileToUpload"]["type"], "image")) {
            die("file type must be image");
        } else {
            return true;
        }
        return false;
    }

    public function upload()
    {
        try {
            $id = uniqid();
            $file = $_FILES["fileToUpload"]['tmp_name'];
            $this->_s3->putObject(
                array(
                    'Bucket' => 's3-with-php',
                    'Key' =>  $id,
                    'SourceFile' => $file,
                    'StorageClass' => 'REDUCED_REDUNDANCY'
                )
            );
        } catch (Aws\S3\Exception\S3Exception $e) {
            echo "There was an error uploading the file.\n";
        }
        die("file uploaded successfully");
    }
    private function set_credentials()
    {
        $this->_s3  = S3Client::factory(array(
            'credentials' => array(
                'key' => ACCESS_KEY,
                'secret' => SECRET_ACCESS_KEY,

            ), 'region' => 'us-east-1',
            'version' => 'latest'
        ),);
    }
}
