<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if ($existe) {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        } else {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "A Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "site/img/modelo_img_home.jpg";
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Pagina Sobre criada com sucesso!";
    }

}
