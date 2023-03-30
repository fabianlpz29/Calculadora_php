<style>

    body{
        background-color: black;
    }

    a{
        text-decoration: none;
        font-weight: bold;
        color: black;
    }

    ul,li{
        list-style: none;
    }
</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
class Division{
    public $numero1;
    public $numero2;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function Dividir(){
        $resultado = $this->numero1 / $this->numero2;
        echo " " . $this->numero1 . " / " . $this->numero2 . "= " . $resultado;
    }
}

$operaciones = new Division($_POST['numero1'],$_POST['numero2'],)
?>

            
<div class="container">
    <div class="row">

        <div class="col-lg-4 col-sm-6 mt-1">
            <div class="card shadow-lg border-danger">

                <div class="card-header bg-secondary">
                    <b>Division</b>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-6 col-sm-12">
                            <?php
                            $operaciones->Dividir();
                            ?>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">

                        <div class="col-lg-6 col-sm-12">
                            <a href="../Vistas/Division.html" style="color: black;">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>