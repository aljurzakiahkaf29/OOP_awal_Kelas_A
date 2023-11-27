<!DOCTYPE html>
<html>
<body>
<?php
class Mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;
  
  // Methods
  public function __construct($name, $nim, $matkul, $cita_cita) {
    $this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita_cita = $cita_cita;
  }
  
  function get_name() {
    return $this->name;
  }
  function get_nim() {
    return $this->nim;
  }
  
  function get_matkul() {
    return $this->matkul;
  }

  function get_cita_cita() {
    return $this->cita_cita;
  }

  function __destruct() {
    echo "<br>ini akhir dari class mahasiswa {$this->name}";
  }
}

class Organisasi extends Mahasiswa {
  public function name_organisasi() {
    echo $this->get_name();
    echo "<br>";
    echo $this->get_nim();
    echo "<br>";
    echo $this->get_matkul();
    echo "<br>";
    echo $this->get_cita_cita();
    echo "<br>";
    echo "Gardu";
    
  }
}

$organisasi = new Organisasi('Aljur Zaki Ahkaf', '2255201011', 'PBO', 'Pengusaha');
$organisasi->name_organisasi();
?>

</body>
</html>
