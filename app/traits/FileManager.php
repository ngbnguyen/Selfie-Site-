<?php

trait FileManager {

  private $name, $err, $ext, $temp, $size, $file, $destination, $newname;

  protected $file_errs = [];
  // prepare file will break up the file elements into name, ext, temp loc, errs
  public function prepareFile($file) {
    $this->file = $file;
    $this->name = $file['name'];
    $this->temp = $file['tmp_name'];
    $this->size = $file['size'];
    $this->err = $file['error'];
    $this->ext = $this->getExtension();
  }

  public function checkFile($maxfilesize, $allowed_files) {
    // check error value (should be zero)
    if($this->err !== 0) {
      $this->file_errs[] = "There was an error uploading the file.";
    }
    //check file size
    if($this->size > $maxfilesize) {
      $this->file_errs[] = "The file was too large!";
    }

    if(!in_array($this->ext,$allowed_files)) {
      // check to see if file type is in permitted array
      $this->file_errs[] = "This file type is not permitted!";
    }
    if(empty($this->file_errs)) {
      return true;
    } else {
      return false;
    }
  }
  public function getExtension() {
    // explode file name and return ext
    $ext = explode('.', $this->name);
    return strtolower(end($ext));
  }

  public function renameFile() {
    $this->newname = uniqid('', true) . "." . $this->ext;
  }

  public function moveFile($relativeloc = "/itec_cs201/selfiesite/iteckymvc10/public/images/") {
    $this->destination = $_SERVER['DOCUMENT_ROOT'] . $relativeloc . $this->newname;
    move_uploaded_file($this->temp, $this->destination);
  }
}
