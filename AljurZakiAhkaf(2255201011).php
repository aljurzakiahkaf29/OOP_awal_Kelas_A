<!DOCTYPE html>
<html>
<body>
<?php
class Mahasiswa {
  // Properties
  public $name;
  public $nim;
  protected $matkul;
  private $cita_cita;
  
  // Methods
  public function __construct($name, $nim, $matkul, $cita_cita) {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita_cita = $cita_cita;
  }

  protected function get_matkul() {
    return $this->matkul;
  }

  private function get_cita_cita() {
    return $this->cita_cita;
  }

  function __destruct() {
    echo "<br>ini akhir dari class mahasiswa {$this->name}";
  }
}

class Organisasi extends Mahasiswa {
  public function name_organisasi() {
    echo "{$this->name}";
    echo "<br>";
    echo "{$this->nim}";
    echo "<br>";
    echo "{$this->matkul}";
    echo "<br>";
    echo "{$this->cita_cita}";
    echo "<br>";
    echo "Gardu";
    
  }
}

$organisasi = new Organisasi('Aljur Zaki Ahkaf', '2255201011', 'PBO', 'Pengusaha');
$organisasi->name_organisasi();
?>

</body>
</html>
